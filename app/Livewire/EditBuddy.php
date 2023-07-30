<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use App\Models\Buddy;
use Livewire\Component;

class EditBuddy extends Component
{
    public $buddy;

    #[Rule('required|min:5')]
    public $name;

    #[Rule('required')]
    public $image;

    public function mount($buddy = null)
    {
        $this->buddy = $buddy;

        $this->name = $buddy->name;

        $this->image = $buddy->image;
    }

    public function save()
    {
        $this->validate();

        Buddy::findOrFail($this->buddy->id)->update($this->all());

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.edit-buddy');
    }
}
