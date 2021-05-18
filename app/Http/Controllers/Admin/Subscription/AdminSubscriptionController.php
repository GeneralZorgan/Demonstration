<?php

namespace App\Http\Controllers\Admin\Subscription;

use App\Http\Controllers\Controller;
use App\Repositories\Subscription\Vacancy\SubscriptionVacancyRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminSubscriptionController extends Controller
{

    private $subscriptionRepository;

    public function __construct(SubscriptionVacancyRepository $subscriptionVacancyRepository)
    {
        $this->subscriptionRepository = $subscriptionVacancyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('admin.pages.subscriptions.index', [
            'subscriptions' => $this->subscriptionRepository->all()
        ]);
    }
}
