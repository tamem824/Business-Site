<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);


$email = $_POST['email'];
$password = $_POST['password'];
$phoneNumber = $_POST['phone-number'];
$profession = $_POST['profession'];
$location = $_POST['location'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}


if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}

if (!Validator::number($phoneNumber)) {
    $errors['phone-number'] = 'Please provide a valid phone number.';
}


if (!Validator::string($profession, 3, 255)) {
    $errors['profession'] = 'Please provide a valid profession.';
}


if (!Validator::string($location, 3, 255)) {
    $errors['location'] = 'Please provide a valid location.';
}

if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}


$user = $db->query('select * from users where email = :email', [
    'email' => $email
])->find();

if ($user) {

    header('location: /');
    exit();
} else {

    $db->query('INSERT INTO users(email, password, phone_number, profession, location) VALUES(:email, :password, :phone_number, :profession, :location)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'phone_number' => $phoneNumber,
        'profession' => $profession,
        'location' => $location
    ]);

    login($user);

    header('location: /');
    exit();
}
