<?php

namespace App\Application\User\UseCases;

use App\Domain\User\Repository\UserRepositoryInterface;

class LoginService{
    public function __construct(private UserRepositoryInterface $userRepository){}

    public function login(string $email, string $password): ?array{
        $user = $this->userRepository->findByEmail($email);
        if(!$user) return false;
        return password_verify($password, $user->password);
    }

}