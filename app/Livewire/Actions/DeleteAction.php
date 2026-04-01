<?php

namespace App\Livewire\Actions;

use Livewire\Component;

class DeleteAction extends Component
{
    public $showConfirm = false;
    public $modelId;
    public $modelClass;

    // Popup variables
    public $title;
    public $message;

    protected $listeners = ['delete:confirm' => 'confirmDelete'];

    public function confirmDelete($modelId, $modelClass, $title = null, $message = null)
    {
        $this->modelId = $modelId;
        $this->modelClass = $modelClass;
        $this->title = $title;
        $this->message = $message;
        $this->showConfirm = true;
    }

    public function delete()
    {
        $model = $this->modelClass::find($this->modelId);

        if ($model) {
            $model->delete();
            $this->dispatch('deleted', $this->modelId);
        }

        $this->reset(['showConfirm', 'modelId', 'modelClass', 'title', 'message']);
    }

    public function render()
    {
        return view('livewire.actions.delete-action');
    }
}
