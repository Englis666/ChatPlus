<?php
namespace App\Application\User\UseCases;

use App\Domain\User\Repository\UserRepositoryInterface;

class RegisterService{
    public function __construct(private UserRepositoryInterface $userRepository){}

    public function register(string $name, string $email, string $password): ?array{
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user = newUser(null, $name, $email, $hashedPassword);
        return $this->userRepository->save($user);

    }
}