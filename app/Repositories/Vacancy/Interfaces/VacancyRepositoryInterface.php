<?php


namespace App\Repositories\Vacancy\Interfaces;


use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Collection;

interface VacancyRepositoryInterface
{
    public function all(): Collection;

    public function getById(int $vacancyId) : Vacancy;

    public function count(): int;
}
