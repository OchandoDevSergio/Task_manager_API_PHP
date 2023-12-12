<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTaskRequest extends FormRequest
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
                'customerId'=> ['required'],
                'status'=> ['required',Rule::in(['hecho', 'por hacer'])],
                'description'=> ['required']
            ];
        } else {
            return [
                'customerId'=> ['sometimes','required'],
                'status'=> ['sometimes','required',Rule::in(['hecho', 'por hacer'])],
                'description'=> ['sometimes','required']
            ];
        }
    }
    protected function prepareForValidation() {
        if($this->customerId){
            $this->merge([
                'customer_id' => $this->customerId
            ]);
        };
    }
}
