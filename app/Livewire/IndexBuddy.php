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
        $this->editOrDelete = !$this->editOrDelete;

        $this->userId = $id;
    }

    public function deleteBuddy(Buddy $id)
    {
        $id->delete();

        $this->editOrDelete = !$this->editOrDelete;

        return $this->render();
    }

    public function render()
    {
        return view('livewire.index-buddy', [
            'buddies' => Buddy::all()
        ]);
    }
}
