<?php

namespace App\Http\Requests\Apprentice;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApprenticeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|max:255',
            'cell_number' => 'sometimes|integer',
            'course_id' => 'sometimes|exists:courses,id',
            'computer_id' => 'sometimes|exists:computers,id',
        ];
    }
}
