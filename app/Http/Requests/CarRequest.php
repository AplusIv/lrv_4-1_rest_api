<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Сохранение новой записи в таблицу, обновление позиции сработали только после изменения на true
        //         return false;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand' => ['required', 'string'],
            'model' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            // 'price' => ['required'],
        ];
    }
}
