<?php

readonly final class User
{
    public function __construct(private string $email, private string $password) {}
}