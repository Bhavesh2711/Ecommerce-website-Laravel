<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\register;
class RegistrationForm extends Component
{
    public $name, $lastName, $address, $gender, $dob, $email, $password, $password_confirmation;
    public $successMessage = ''; // Add this property to hold the success message


    protected $rules = [
        'name' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'gender' => 'required|string',
        'dob' => 'required|date',
        'email' => 'required|email|unique:registers,email',
        'password' => 'required|string|min:6|confirmed',
    ];

    public function save()
    {
        $this->validate();

        Register::create([
            'name' => $this->name,
            'last_name' => $this->lastName,
            'address' => $this->address,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        $this->successMessage = 'Registration successful.'; // Set the success message
        $this->resetExcept('successMessage'); // Reset form fields except for the success message
        $this->emit('formClosed');
    }

    public function closeForm()
    {
        $this->reset();
        $this->emit('formClosed');
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
   
}
