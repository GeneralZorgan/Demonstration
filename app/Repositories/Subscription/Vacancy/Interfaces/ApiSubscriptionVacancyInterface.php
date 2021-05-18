<?php


namespace App\Repositories\Subscription\Vacancy\Interfaces;


use Ramsey\Collection\Collection;

interface ApiSubscriptionVacancyInterface
{
    public function checkEmail(string $email);
}
