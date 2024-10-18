<?php

namespace App\Livewire;

use Livewire\Component;

class RandomDadJoke extends Component
{
    public $randomJoke;

    public function mount()
    {
        $this->selectNewJoke();
    }

    public function selectNewJoke()
    {
        $builder = \App\Models\DadJoke::inRandomOrder();

        if ($this->randomJoke) {
            $builder->where('id', '!=', $this->randomJoke->id);
        }

        $this->randomJoke = $builder->first();
    }

    public function render()
    {
        return view('livewire.random-dad-joke', ['joke' => $this->randomJoke]);
    }
}
