<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use App\Models\Buddy;
use Livewire\Component;

class CreateBuddy extends Component
{
    #[Rule('required|min:5')]
    public $name;

    #[Rule('required')]
    public $image;

    public function save()
    {
        $this->validate();

        Buddy::create(
            $this->only(['name', 'image'])
        );

        return $this->redirect('/');
        //->with('status', 'Post successfully created.');
    }

    public function render()
    {
        return view('livewire.create-buddy');
    }
}
