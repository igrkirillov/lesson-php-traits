<?php

class Authentication
{
    use \Auth\AppUserAuthentication;
    use \Auth\MobileUserAuthentication;

    public function authenticate(string $login, string $password): bool
    {
        return $this->authenticateAsMob($login, $password)
            || $this->authenticateAsApp($login, $password);
    }
}