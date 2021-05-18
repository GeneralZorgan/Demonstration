<?php


namespace App\Repositories\Subscription\Vacancy;


use App\Models\Subscription;
use App\Repositories\Subscription\Vacancy\Interfaces\SubscriptionVacancyInterface;
use \Illuminate\Database\Eloquent\Collection;

class SubscriptionVacancyRepository implements SubscriptionVacancyInterface
{
    private $subscription;

    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Get all Subscriptions
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->subscription->all();
    }
}
