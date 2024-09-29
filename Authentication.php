<?php

use \Auth\AppUserAuthentication as AppUserAuthentication;
use \Auth\MobileUserAuthentication as MobileUserAuthentication;
class Authentication
{
    use AppUserAuthentication, MobileUserAuthentication {
        MobileUserAuthentication::authenticate as authenticateAsMobile;
        AppUserAuthentication::authenticate as authenticateAsApp;
    }

    public function authenticate(string $login, string $password): bool
    {
        return $this->authenticateAsMobile($login, $password)
            || $this->authenticateAsApp($login, $password);
    }
}