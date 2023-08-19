<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user = $this->user();

        if ($user->is_admin) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'nombreEmpresa' => 'required|string|max:30',
            'rif' => ['required','string','size:10','regex:/(V|J)+\d\d\d\d\d\d\d\d\d/'],
            'email' => 'required|string|max:50|email',
            'emailSecondary' => 'required|string|max:50|email',
            'phone' => 'required|numeric|digits:11',
            'phoneSecondary' => 'required|numeric|digits:11',
            'pais' => 'required|string|max:30',
            'estado' => 'required|string|max:30',
        ];
    }
}
