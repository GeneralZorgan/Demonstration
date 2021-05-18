<?php

namespace App\Repositories\VacancyTypes;

use App\Models\VacancyType;
use App\Repositories\VacancyTypes\Interfaces\VacancyTypesRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VacancyTypesRepository implements VacancyTypesRepositoryInterface
{

    private $model;

    public function __construct(VacancyType $vacancyType)
    {
        $this->model = $vacancyType;
    }

    /**
     * Get all VacancyTypes
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Get VacancyType by ID
     *
     * @param int $id
     * @return VacancyType
     */
    public function getById(int $id): VacancyType
    {
        return $this->model->find($id);
    }
}
