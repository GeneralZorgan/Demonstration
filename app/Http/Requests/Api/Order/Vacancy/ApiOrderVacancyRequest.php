<?php

namespace App\Http\Requests\Api\Order\Vacancy;

use Illuminate\Foundation\Http\FormRequest;

class ApiOrderVacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "email" => "required"
        ];
    }

    /**
     * Messages for validation
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            "email.required" => "Email обязателен для заполнения"
        ];
    }
}
