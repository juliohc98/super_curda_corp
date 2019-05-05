<?php

$user = [
    "username" => $_POST['username'],
    "password" => $_POST['password'],
    "email" => $_POST['email'],
    "first_name" => $_POST['first_name'],
    "last_name" => $_POST['last_name'],
    "sex" => $_POST['sex'],
    "identity_number" => $_POST['identity_number'],
    "nationality" => $_POST['nationality'],
    "phone_number" => $_POST['phone_number'],
    "city" => $_POST['city']
];

$query->insert('users', $user);

//insert into users ()
