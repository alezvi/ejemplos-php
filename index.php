<?php 

$_POST = [
    'email' => 'john@doe.com...',
    'password' => 'secret',
];

require 'Registration.php';
require 'User.php';

$form = new Registration;

$form->validate($_POST);

var_dump($form);