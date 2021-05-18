<?php


namespace App\Repositories\VacancyTypes\Interfaces;


use App\Models\Vacancy;
use App\Models\VacancyType;
use Illuminate\Database\Eloquent\Collection;

interface VacancyTypesRepositoryInterface
{
    public function all(): Collection;

    public function getById(int $id) : VacancyType;
}
