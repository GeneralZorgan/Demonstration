<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\Vacancy\VacancyRepository;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    private $vacancyRepository;

    public function __construct(VacancyRepository $vacancyRepository)
    {
        $this->vacancyRepository = $vacancyRepository;
    }

    public function index()
    {
        return view('admin.pages.dashboard.index', [
            "countVacancies" => $this->vacancyRepository->count()
        ]);
    }
}
