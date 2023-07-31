<?php

namespace App\Livewire;

use App\Models\Buddy;
use Livewire\Component;

class IndexBuddy extends Component
{
    public $editOrDelete = false;

    public $userId = '';

    public function toEditOrDelete($id)
    {
        if ($this->userId == $id) {
            $this->editOrDelete = false;
            $this->userId = '';
            return;
        }

        $this->editOrDelete = true;
        $this->userId = $id;
    }

    public function render()
    {
        return view('livewire.index-buddy', [
            'buddies' => Buddy::all()
        ]);
    }
}
