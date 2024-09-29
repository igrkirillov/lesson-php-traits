<?php

namespace Auth;

trait AppUserAuthentication
{
    private string $appLogin = "app";
    private string $appPassword = "app";

    public function authenticate(string $login, string $password): bool
    {
        if ($login === $this->appLogin && $password === $this->appPassword) {
            fwrite(STDOUT, "Пользователь залогинен как 'толстый' юзер" . PHP_EOL);
            return true;
        } else {
            return false;
        }
    }
}