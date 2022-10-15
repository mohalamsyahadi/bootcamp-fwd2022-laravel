<?php

namespace App\Http\Requests\User;

use App\Models\User;
// use gate
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
Use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required', 'string', 'max:255',
            ],
            'email' => [
                'required', 'email', 'max:255', Rule::unique('users')->ignore($this->user),
                // rule unique means that other users/id cant update if id isnt same
            ],
            'password' => [
                'min:8', 'string', 'max:255', 'mixedCase',
            ],
            //
        ];
    }
}
