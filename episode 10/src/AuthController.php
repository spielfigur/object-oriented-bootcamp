<?php

namespace Acme;

class AuthController implements RespondsToUserRegistration
{
    protected $registration;

    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register()
    {
        $this->registration->execute(array(), $this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully, redirect somewhere...');
    }

    public function userRegisteredFailed()
    {
        var_dump('created unsuccessfully, redirect back.');
    }
}
