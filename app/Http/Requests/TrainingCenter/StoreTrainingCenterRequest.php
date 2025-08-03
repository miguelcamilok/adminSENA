<?php

namespace App\Http\Requests\TrainingCenter;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingCenterRequest extends FormRequest
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
        $trainingCenterId = $this->route('training_center'); // Asegúrate que el nombre coincida con la ruta

        return [
            'name' => 'required|string|max:255|unique:training_centers,name,' . $trainingCenterId,
            'location' => 'required|string|max:255',
        ];
    }
}
