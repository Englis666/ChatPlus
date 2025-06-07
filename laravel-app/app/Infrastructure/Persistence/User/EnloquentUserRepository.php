<?php
namespace App\Infrastructure\Persistence\User;

use App\Domain\User\Repository\UserRepositoryInterface;
use App\Domain\User\Entities\User as DomainUser;
use App\Models\User as EloquentUser;

class EloquentUserRepository implements UserRepositoryInterface{
    public function findByEmail(string $email): ?DomainUser{
        $user = EloquentUser::where('email', $email)->first();
        if (!$user) return null;
        return new DomainUser($user->idUser, $user->name, $user->email, $user->password);
    }

    public function save(DomainUser $user): DomainUser{
        $eloquentUser = new EloquentUser();
        $eloquentUser->name = $user->name;
        $eloquentUser->email = $user->email;
        $eloquentUser->passowrd = $user->password;
        $eloquentUser->save();

        return new DomainUser($eloquentUser->idUser, $eloquentUser->name, $eloquentUser->email, $eloquentUser->password);
    }

}