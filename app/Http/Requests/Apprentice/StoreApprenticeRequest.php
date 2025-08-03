<?php

namespace App\Http\Requests\Apprentice;

use Illuminate\Foundation\Http\FormRequest;

class StoreApprenticeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $apprenticeId = $this->route('apprentice');

        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:apprentices,email,' . $apprenticeId,
            'cell_number' => 'required|digits_between:7,15',
            'course_id' => 'required|exists:courses,id',
            'computer_id' => 'required|exists:computers,id',
        ];
    }
}
