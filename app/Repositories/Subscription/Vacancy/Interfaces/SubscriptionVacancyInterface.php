<?php


namespace App\Repositories\Subscription\Vacancy\Interfaces;


use \Illuminate\Database\Eloquent\Collection;

interface SubscriptionVacancyInterface
{
    public function all(): Collection;
}
