<?php


namespace App\Repositories\Vacancy;


use App\Models\Vacancy;
use App\Repositories\Vacancy\Interfaces\VacancyRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class VacancyRepository implements VacancyRepositoryInterface
{

    private $model;

    public function __construct(Vacancy $vacancy)
    {
        $this->model = $vacancy;
    }

    /**
     * Get all Vacancies
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * Get Vacancy by ID
     *
     * @param int $vacancyId
     * @return Vacancy
     */
    public function getById(int $vacancyId): Vacancy
    {
        return $this->model->where('id', $vacancyId)->first();
    }

    /**
     * Count all Vacancies
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->model->all());
    }
}
