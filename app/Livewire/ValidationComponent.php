<?php

namespace App\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    // protected $rules = [
    //     'email' => 'required|email',
    //     'password' => 'required|min:6',
    //     'remember' => 'nullable',
    // ];

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
            'remember' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'My Custom email message',
        ];
    }
    public function attributes()
    {
        return [
            'password' => 'My password attribute',
        ];
    }
    #--------------REAL TIME VALIDATION
    // public function updatedEmail()
    // {
    //     $this->validateOnly('email');
    // }
    // public function updatedPassword()
    // {
    //     $this->validateOnly('password');
    // }

    public function submit()
    {
        $this->validate($this->rules(), $this->messages(), $this->attributes());
        $this->addError('custom_error', 'This is custom error');
        // dd('SUBMIT');
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}
