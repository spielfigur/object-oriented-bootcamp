<?php

$registration   = new Acme\RegisterUser;
$authController = new Acme\AuthController($registration);

echo $authController->register();
