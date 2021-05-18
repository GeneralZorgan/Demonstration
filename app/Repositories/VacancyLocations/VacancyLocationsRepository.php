<?php

namespace App\Repositories\VacancyLocations;

use App\Models\VacancyLocation;
use App\Repositories\VacancyLocations\Interfaces\VacancyLocationsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VacancyLocationsRepository implements VacancyLocationsRepositoryInterface
{
    private $model;

    public function __construct(VacancyLocation $vacancyLocation)
    {
        $this->model = $vacancyLocation;
    }

    /**
     * Get all VacancyLocations
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Get VacancyLocation by ID
     *
     * @param int $id
     * @return VacancyLocation
     */
    public function getById(int $id): VacancyLocation
    {
        return $this->model->find($id);
    }
}
