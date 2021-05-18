<?php


namespace App\Repositories\VacancyLocations\Interfaces;


use App\Models\Vacancy;
use App\Models\VacancyLocation;
use Illuminate\Database\Eloquent\Collection;

interface VacancyLocationsRepositoryInterface
{
    public function all(): Collection;

    public function getById(int $id) : VacancyLocation;
}
