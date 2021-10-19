<?php



function logMessage($level, $message)
{
    $file = fopen('app.log', "a");
    fwrite($file, "[$level] $message" . PHP_EOL);
    fclose($file);
}

function errorPage()
{
    include "tamplates/error.php";
    die();
}

$routes = [];

function route($action, $callable, $method = 'GET')
{
    global $routes;
    $pattern = "%^$action$%";
    $routes[strtoupper($method)][$pattern] = $callable;
}

function dispatch($action, $notFound)
{
    global $routes;
    $method = $_SERVER["REQUEST_METHOD"];
    if (array_key_exists($method, $routes)) {
        foreach ($routes[$method] as $pattern => $callable) {
            if (preg_match($pattern, $action, $matches)) {
                return $callable($matches);
            }
        }
    }
    return $notFound();
}


function esc($string)
{
    echo htmlspecialchars($string);
}

function getConnection()
{
    global $config;
    $connection = mysqli_connect($config['DB_HOST'], $config['DB_USER'], $config['DB_PASS'], $config['DB_NAME']);
    if (!$connection) {
        logMessage('ERROR', 'Connection error:' . mysqli_connect_error());
        errorPage();
    }
    return $connection;
}

/******************** mobile add function content start **********************/

function mobilePhonesAppend($connection, $brand, $type, $operating_system, $memory, $its_state, $price, $image)
{
    if ($statement = mysqli_prepare($connection, 'INSERT INTO mobile_phones (brand, type, operating_system, memory, its_state, price, image) VALUES (?,?,?,?,?,?,?)')) {
        $null = NULL;
        mysqli_stmt_bind_param($statement, 'ssssssb', $brand, $type, $operating_system, $memory, $its_state, $price, $null);
        mysqli_stmt_send_long_data($statement, 6, file_get_contents($image));
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

/******************** mobile query home page **********************/

function retrieveMobilePhones($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT id, brand, image, type, operating_system, memory, its_state, price FROM mobile_phones ORDER BY id DESC limit 4')) {
        $null = NULL;
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        mysqli_stmt_bind_result($statement, $id, $brand, $image, $type, $operating_system, $memory, $its_state, $price);
        $images = [];
        while (mysqli_stmt_fetch($statement)) {
            $images[] = ["id" => $id, "image" => $image, "brand" => $brand, "type" => $type, "operating_system" => $operating_system, "memory" => $memory, "its_state" => $its_state, "price" => $price];
        }
        mysqli_stmt_close($statement);
        return $images;
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

/******************** mobile query allmobile page **********************/

function retrieveAllMobilePhones($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT id, brand, image, type, operating_system, memory, its_state, price FROM mobile_phones')) {
        $null = NULL;
        mysqli_stmt_execute($statement);
        mysqli_stmt_store_result($statement);
        mysqli_stmt_bind_result($statement, $id, $brand, $image, $type, $operating_system, $memory, $its_state, $price);
        $images = [];
        while (mysqli_stmt_fetch($statement)) {
            $images[] = ["id" => $id, "image" => $image, "brand" => $brand, "type" => $type, "operating_system" => $operating_system, "memory" => $memory, "its_state" => $its_state, "price" => $price];
        }
        mysqli_stmt_close($statement);
        return $images;
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}


/******************** mobile query single page **********************/

function getImageById($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from mobile_phones where id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_assoc($result);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function updateImage($connection, $id, $title)
{
    if ($statement = mysqli_prepare($connection, 'UPDATE photos SET title = ? WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'si', $title, $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

/******************** user registration and login start **********************/

function UserRegistration($connection, $register_name, $register_email, $register_password)
{
    $didNotBuy = 'didNotBuy';
    $pass_hash = password_hash($register_password, PASSWORD_BCRYPT);
    if ($statement = mysqli_prepare($connection, 'INSERT INTO users (name, email, password,status) VALUES (?,?,?,?)')) {
        mysqli_stmt_bind_param($statement, 'ssss', $register_name, $register_email, $pass_hash, $didNotBuy);
        mysqli_stmt_execute($statement);
        mysqli_stmt_close($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}



function loginUser($connection, $email, $password)
{
    if ($statement = mysqli_prepare($connection, 'SELECT id, name, password FROM users WHERE email = ?')) {
        mysqli_stmt_bind_param($statement, "s", $email);
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        $record = mysqli_fetch_assoc($result);
        if ($record != null && password_verify($password, $record["password"])) {
            $statement = mysqli_prepare($connection, 'UPDATE users SET last_login = ? WHERE email = ?');
            mysqli_stmt_bind_param($statement, 'ss', date("Y.m.d H:i:s"), $email);
            mysqli_stmt_execute($statement);
            return $record;
            header("Content-type: application/script");
        } else {
            return null;
        }
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}

function createUser()
{
    $loggedIn = array_key_exists("user", $_SESSION);
    return [
        "loggedIn" => $loggedIn,
        "name" => $loggedIn ? $_SESSION["user"]["name"] : null,
        "id" => $loggedIn ? $_SESSION["user"]["id"] : null
    ];
}


define('EMAIL', 'pryma@prymaphone.hu');
define('PASS', 'Hacker13prog');

function sendMail()
{
    $pEvent = filter_input(INPUT_POST, "event", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($pEvent == 'sendemail') {
        require_once 'vendor/autoload.php';
        // Create the Transport
        $transport = (new Swift_SmtpTransport('s27.tarhely.com', 587, 'tls'))
            ->setUsername(EMAIL)
            ->setPassword(PASS);

        // Create the Mailer using your created Transport
        $mailer = new Swift_Mailer($transport);
        $confirmation_email = new Swift_Mailer($transport);

        // Create a message
        $message = (new Swift_Message('Regisztrációs kedvezmény érkezett'))
            ->setFrom([EMAIL => $_POST['register_name']])
            // ->setCc('rrd@webmania.cc') copy
            ->setTo([EMAIL])
            ->setBody(
                'Új regisztráció érkezett! 

A weboldal admin felületén megtekintheti, és vásárlást követően pipálhatja az Ügyfelet. '
            );

        $confirmation_email_message = (new Swift_Message('PrymaPhone regisztrációs kedvezmény'))
            ->setFrom([EMAIL => $_POST['register_name']])
            ->setTo([$_POST['register_email']])
            ->setBody(
                'Tisztelt ' . $_POST['register_name'] . ' köszönjük, hogy regisztráltál! 

Kedvezményed levásárláshoz, kérjük fáradjon be üzletünkbe.
Bármilyen kérdéssel kapcsolatban, kérjük hívja a weboldalon látható telefonszámot.

Üdvözlettel: PrymaPhone csapata! 
                '
            );


        $mailer->send($message);
        $confirmation_email->send($confirmation_email_message);
    }
}


/******************** admin page **********************/

function phoneDelete($connection, $id)
{
    if ($statement = mysqli_prepare($connection, 'DELETE FROM mobile_phones WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'i', $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}

function allUsers($connection)
{
    if ($statement = mysqli_prepare($connection, 'SELECT * from users')) {
        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        logMessage('ERROR', 'Query error: ' . mysqli_error($connection));
        errorPage();
    }
}


function userBoughtEdit($connection, $id)
{
    $bought = 'bought';
    if ($statement = mysqli_prepare($connection, 'UPDATE users SET status = ? WHERE id = ?')) {
        mysqli_stmt_bind_param($statement, 'si', $bought, $id);
        mysqli_stmt_execute($statement);
    } else {
        logMessage('ERROR', 'Query error:' . mysqli_error($connection));
        errorPage();
    }
}
