<?php

namespace App\Livewire;

use App\Models\Buddy;
use Livewire\Component;

class CreateBuddy extends Component
{
    public $name = '';

    public $image = '';

    public function save()
    {
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
