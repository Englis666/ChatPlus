<?php
namespace App\Domain\Projects\Entities;

class Projects{

    public function __construct(
        public readonly int $idProject,
        public string $name,
        public string $client,
        public string $description,
        public string $startDate,
        public string $endDate,
        public string $status,
        public string $goals,
    ) {
    }

}