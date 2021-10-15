<?php

function homeController()
{
    $connection = getConnection();
    $phones = retrieveMobilePhones($connection);

    return [
        "home",
        [
            "title" => "Kezdőlap",
            "phones" => $phones
        ]
    ];
}

function adminController()
{
    $connection = getConnection();
    $allPhones = retrieveAllMobilePhones($connection);
    $allUsers = allUsers($connection);

    return [
        "administ",
        [
            "title" => "Adminisztrációs felület",
            "allPhones" => $allPhones,
            "allUsers" => $allUsers
        ]
    ];
}

function allMobileController()
{
    $connection = getConnection();
    $allPhones = retrieveAllMobilePhones($connection);

    return [
        "allmobile",
        [
            "title" => "Összes mobiltelefon megtekintése",
            "allPhones" => $allPhones
        ]
    ];
}

function mobilePhonesSubmitController()
{
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $operating_system = $_POST['operating_system'];
    $memory = $_POST['memory'];
    $its_state = $_POST['its_state'];
    $price = $_POST['price'];
    $filename = $_FILES["image"]["name"];
    $image_file = $_FILES["image"]["tmp_name"];
    $folder = __DIR__ . "/../imagesuploaded/";
    move_uploaded_file($image_file, $folder . $filename);
    $connection = getConnection();
    mobilePhonesAppend($connection, $brand, $type, $operating_system, $memory, $its_state, $price, $folder . $filename);
    return [
        "redirect:/administ", []
    ];
}


function singleImageController($params)
{
    $connection = getConnection();
    $picture = getImageById($connection, $params['id']);
    return [
        "single",
        [
            "title" => $picture["brand"] .=  ' ' . $picture['type'],
            "picture" => $picture
        ]
    ];
}

function phoneEditController($params)
{
    $title  = $_POST['title'];
    $id = $params['id'];
    $connection = getConnection();
    updateImage($connection, $id, $title);
    return [
        "redirect:/Traning/image/$id",
        []
    ];
}

function phoneDeleteController($params)
{
    $connection = getConnection();
    phoneDelete($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

function userBoughtController($params)
{
    $connection = getConnection();
    userBoughtEdit($connection, $params["id"]);
    return [
        "redirect:/administ",
        []
    ];
}

/******************** user registration and login start **********************/

function UserRegistrationController()
{
    $register_name  = $_POST['register_name'];
    $register_email = $_POST['register_email'];
    $register_password = $_POST['register_password'];
    $connection = getConnection();
    UserRegistration($connection, $register_name, $register_email, $register_password);
    //robotCheck();
    sendMail();
    return [
        "redirect:/",
        []
    ];
}

function LoginSubmitController()
{
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $user = LoginUser(getConnection(), $email, $password);
    if ($user != null) {
        $_SESSION["user"] = [
            "name" => $user["name"],
            "id" => $user["id"]
        ];
        $view = "redirect:/";
    } else {
        $_SESSION["containsError"] = 1;
        $view = "redirect:/";
    }
    return [
        $view, []
    ];
}

function LogoutSubmitController()
{
    unset($_SESSION["user"]);
    return [
        "redirect:/", []
    ];
}

/******************** 404 start **********************/

function notFoundController()
{
    return [
        "404", [
            "title" => "The page you are looking for is not found."
        ]
    ];
}
