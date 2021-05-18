<?php

namespace App\Http\Controllers\Admin\Vacancy;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancy\VacancyStoreRequest;
use App\Http\Requests\Vacancy\VacancyUpdateRequest;
use App\Models\Vacancy;
use App\Models\VacancyLocation;
use App\Models\VacancyType;
use App\Repositories\Vacancy\VacancyRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdminVacancyController extends Controller
{

    // Репоситорий для получения данных о вакансии
    private $vacancyRepository;
    // Репозиторий для получения данных о типах вакансии
    private $vacancyTypesRepository;
    // Репозитории для получения данных о локациях
    private $vacancyLocationsRepository;

    public function __construct(
        VacancyRepository $vacancyRepository,
        VacancyType $vacancyType,
        VacancyLocation $vacancyLocation)
    {
        $this->vacancyRepository = $vacancyRepository;
        $this->vacancyTypesRepository = $vacancyType;
        $this->vacancyLocationsRepository = $vacancyLocation;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.pages.vacancy.index', [
            'vacancies' => $this->vacancyRepository->all(),
            'vacancyTypes' => $this->vacancyTypesRepository->all(),
            'vacancyLocations' => $this->vacancyLocationsRepository->all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.pages.vacancy.create', [
            'vacancyTypes' => $this->vacancyTypesRepository->all(),
            'vacancyLocations' => $this->vacancyLocationsRepository->all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param VacancyStoreRequest $request
     * @return RedirectResponse
     */
    public function store(VacancyStoreRequest $request): RedirectResponse
    {
        // Проверяем полученные данные и сохраняем в массив
        $validatedData = $request->validated();

        // Если всё ок, то создаём новый экземляр вакансии с проверенными данными
        $vacancy = new Vacancy($validatedData);

        // Сохраняем экземляр в бд
        $vacancy->save();

        // Связываем локации с вакансией
        $vacancy->locations()->sync($validatedData['locations'], []);

        // Редирект на страницу с вакансиями
        return Redirect::route('vacancy.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        return view('admin.pages.vacancy.edit', [
            'vacancy' => $this->vacancyRepository->getById($id),
            'vacancyTypes' => $this->vacancyTypesRepository->all(),
            'vacancyLocations' => $this->vacancyLocationsRepository->all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param VacancyUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(VacancyUpdateRequest $request, int $id): RedirectResponse
    {
        // Проверяем полученные данные и сохраняем в массив
        $validatedData = $request->validated();

        // Если всё окей, то двигаемся дальше и ищем по id вакансию
        $vacancy = Vacancy::find($id);

        // Обновляем данные в вакансии с помощью наших проверенных данных
        $vacancy->update($validatedData);

        $vacancy->save();

        // Связываем локации с вакансией
        $vacancy->locations()->sync($validatedData['locations']);

        // Редирект на страницу с вакансиями
        return Redirect::route('vacancy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        // Получаем и сохраняем вакансию
        $vacancy = $this->vacancyRepository->getById($id);

        // Убираем привязанные локации
        $vacancy->locations()->sync([]);

        // Удаляем вакансию
        $vacancy->delete();

        // Редирект на страницу со всеми вакансиями
        return Redirect::route('vacancy.index');
    }
}
