<?php
require_once "config.php";
ob_start();

$uri = $_SERVER["REQUEST_URI"];
$cleaned = explode("?", $uri)[0];

route('/', 'homeController');
route('/phone(?<id>[\d]+)', 'singleImageController');

route('/quickreg', 'UserRegistrationController', "POST");
route('/login', 'LoginSubmitController', "POST");

route('/administ', 'adminController');
route('/addMobileSubmit', 'mobilePhonesSubmitController', "POST");
route('/administ/(?<id>[\d]+)/phoneDelete', 'phoneDeleteController', "POST");
route('/administ/(?<id>[\d]+)/phoneEdit', 'phoneEditController', "POST");

route('/administ/(?<id>[\d]+)/userBought', 'userBoughtController', "POST");

route('/allmobile', 'allMobileController');

list($view, $data) = dispatch($cleaned, 'notFoundController');
if (preg_match("%^redirect\:%", $view)) {
    $redirectTarget = substr($view, 9);
    header("Location:" . $redirectTarget);
    die;
}
extract($data);


$user = createUser();
$containsError = array_key_exists("containsError", $_SESSION);
unset($_SESSION["containsError"]);

ob_clean();
require_once "tamplates/layout.php";
