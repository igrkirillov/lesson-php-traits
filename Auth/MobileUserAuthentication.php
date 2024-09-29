<?php

namespace Auth;

trait MobileUserAuthentication
{
    private string $mobLogin = "mob";
    private string $mobPassword = "mob";

    public function authenticate(string $login, string $password): bool
    {
        if ($login === $this->mobLogin && $password === $this->mobPassword) {
            fwrite(STDOUT, "Пользователь залогинен как мобильный юзер" . PHP_EOL);
            return true;
        } else {
            return false;
        }
    }
}