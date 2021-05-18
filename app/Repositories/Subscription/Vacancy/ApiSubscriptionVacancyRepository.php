<?php


namespace App\Repositories\Subscription\Vacancy;


use App\Repositories\Subscription\Vacancy\Interfaces\ApiSubscriptionVacancyInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Ramsey\Collection\Collection;

class ApiSubscriptionVacancyRepository implements ApiSubscriptionVacancyInterface
{

    private $client;
    private $headers;

    public function __construct(Client $client)
    {
        $this->headers = [

        ];

        $this->client = new $client([
            "headers" => $this->headers
        ]);

    }

    /**
     * Check Email for presence on Black list
     *
     * @param string $email
     * @return bool
     * @throws GuzzleException
     */
    public function checkEmail(string $email): bool
    {
        // Settings
        $method = "GET";
        $url = "https://www.disify.com/api/email/" . $email;

        // Send request and get response
        $response = $this->client->request($method, $url);

        // Parse response
        $result = json_decode($response->getBody(), true);

        // return bool
        if ($result['disposable']) {
            return false;
        } else {
            return true;
        }
    }
}
