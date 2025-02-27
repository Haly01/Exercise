<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        'name' => ['required', 'string', 'min:3', 'max:30', 'unique'],
        'last_name' => ['required', 'string', 'min:3', 'max:30'],
        'age' => ['required', 'string', 'max:3'],
        'gender' => ['required', 'string', 'max:10'],
        'email' => ['required', 'string', 'min:3', 'max:100', 'unique'],
        'phone' => ['required', 'string', 'min:3', 'max:20', 'unique'],
        'address' => ['required', 'string', 'min:3', 'max:100'],
        'marital_status' => ['required', 'string', 'max:20', 'nullable'],
        'identification_card' => ['required', 'string', 'max:14', 'unique'],
        ];
    }

    public function messages(): array
    {
        return [
        'name.required' => 'El nombre es requerido',
        'name.string' => 'Debe ingresar texto',
        'name.min' => 'El minimo de texto es de 3',
        'name.max' => 'El maximo de texto es de 30',

        'last_name.required' => 'El apellido es requerido',
        'last_name.string' => 'Debe ingresar texto',
        'last_name.min' => 'El minimo de texto es de 3',
        'last_name.max' => 'El maximo de texto es de 30',


        'age.required' => 'La edad es requerida',
        'age.string' => 'Debe ingresar numeros',
        'age.max' => 'El maximo de texto es de 3',

        'gender.required' => 'El genero es requerido',
        'gender.string' => 'Debe ingresar texto',
        'gender.max' => 'El maximo de texto es de 3',

        'email.required' => 'El Correo Electronico es requerido',
        'email.string' => 'Debe ingresar texto',
        'email.min' => 'El minimo de texto es de 3',
        'email.max' => 'El maximo de texto es de 100',

        'phone.required' => 'El numero de telefono es requerido',
        'phone.string' => 'Debe ingresar texto',
        'phone.min' => 'El minimo de texto es de 3',
        'phone.max' => 'El maximo de texto es de 20',

        'address.required' => 'La direccion es requerida',
        'address.string' => 'Debe ingresar texto',
        'address.min' => 'El minimo de texto es de 3',
        'address.max' => 'El maximo de texto es de 100',

        'marital_status.required' => 'El estado civil es requerido',
        'marital_status.string' => 'Debe ingresar texti',
        'marital_status.max' => 'El maximo de texto es de 20',


        'identification_card.required' => 'La cedula es requerida',
        'idenfitication_card.string' => 'Debe ingresar texto y numeros',
        'identification.max' => 'El maximo de texto o numeros es de 14',
        ];
    }
}
