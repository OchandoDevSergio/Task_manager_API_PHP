<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
        $method = $this->method();
        if($method == 'PUT'){
            return [
                'name'=> ['required'],
                'surnames'=> ['required'],
                'email'=> ['required', 'email']
            ];
        } else {
            return [
                'name'=> ['sometimes','required'],
                'surnames'=> ['sometimes','required'],
                'email'=> ['sometimes','required', 'email']
            ];
        }
    }
}
