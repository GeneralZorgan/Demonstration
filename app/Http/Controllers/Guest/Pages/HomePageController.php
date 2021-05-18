<?php


namespace App\Http\Controllers\Guest\Pages;


use App\Http\Controllers\Controller;
use App\Repositories\Vacancy\VacancyRepository;
use Illuminate\View\View;

class HomePageController extends Controller
{
    private $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepository)
    {
        $this->vacancyRepository = $vacancyRepository;
    }

    /**
     * Home page with Vacancies
     *
     * @return View
     */
    public function index(): View
    {
        return view('guest.pages.home.index', [
            'vacancies' => $this->vacancyRepository->all()
        ]);
    }
}
