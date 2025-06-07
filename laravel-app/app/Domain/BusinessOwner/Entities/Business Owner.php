<?php
namespace App\Domain\BusinessOwner\Entities;

class BusinessOwner{

    public function __construct(
        public readonly int $idBusinessOwner,
        public string $names,
        public string $lastNames,
        public string $phone,
        public string $address,
        public string $city,
        public string $country,
        public string $nameCompany,
        public string $email,
        public string $codeToJoinAtTheCompany,
        public string $password,
    ) {

    }

}   
