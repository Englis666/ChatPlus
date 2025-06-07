<?
namespace App\Domain\User\Repository;

use App\Domain\User\Entity\User;

interface UserRepositoryInterface{

    public function findByEmail(string $email): ?User;
    public function save(User $user): User;
    public function update(User $user): User;
    

}

