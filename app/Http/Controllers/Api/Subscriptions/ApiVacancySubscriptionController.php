<?php

namespace App\Http\Controllers\Api\Subscriptions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Order\Vacancy\ApiOrderVacancyRequest;
use App\Models\Subscription;
use App\Repositories\Api\Subscription\Vacancy\ApiSubscriptionVacancyRepository;
use Illuminate\Database\Eloquent\Model;

class ApiVacancySubscriptionController extends Controller
{
    private $apiOrderVacancyRepository;

    public function __construct(ApiSubscriptionVacancyRepository $apiOrderVacancyRepository)
    {
        $this->apiOrderVacancyRepository = $apiOrderVacancyRepository;
    }

    public function postOrderOnVacancy(ApiOrderVacancyRequest $request): \Illuminate\Http\JsonResponse
    {
        $validatedData = $request->validated();

        $result = $this->apiOrderVacancyRepository->checkEmail($validatedData['email']);

        if ($result) {
            $subscription = new Subscription($validatedData);

            $subscription->save();
        }

        return \response()->json([
            "success" => $result
        ]);
    }
}
