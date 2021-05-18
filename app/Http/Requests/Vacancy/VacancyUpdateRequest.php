<?php

namespace App\Http\Requests\Vacancy;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class VacancyUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return (bool)Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            "title" => "required|max:255",
            "sub_title" => "max:255",
            "type_id" => "required|int",
            "locations" => "required|array",
            "status" => "bool"
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
            "title.required" => "Название обязательно",
            "title.max" => "Название не должно быть больше 255 символов",

            "sub_title.max" => "Подназвание не должно быть больше 255 символов",

            "type_id.required" => "Тип обязателен",

            "locations.required" => "Локации обязательны",
            "locations.array" => "Локации должны придти массивом"
        ];
    }
}
