<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Newslist extends Component
{
    use WithFileUploads;

    public $newsList;
    public $status = 4;

    public $count = 0;

    public $photo;

    public $aaa;

    public $miofile;

    public function handleChange($id)
    {
        $this->status = 3;
    }

    public function updated($name, $val)
    {
        logger('test1');

    }

    public function updatedStatus($key)
    {
        logger('test');
    }

    public function onClick()
    {
        $this->status = 100;
    }

    public function increment()
    {
        $this->count++;

    }

    public function updatedMiofile()
    {
        $this->miofile->store('file');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.newslist');
    }
}
