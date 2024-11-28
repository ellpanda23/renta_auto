<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;

class CarList extends Component
{
    use WithPagination;

    public $brand, $brands, $type = '', $model = '', $price = '';

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.car-list', [
            'cars' => Car::where('fuel_type', 'LIKE', '%'. $this->type . '%')
            ->where('brand', 'LIKE', '%'. $this->brand . '%')
            ->where('model', 'LIKE', '%'. $this->model . '%')
            ->where('daily_rate', 'LIKE', '%'. $this->price . '%')
            ->paginate(8)
        ]);
    }

    public function search()
    {
        $this->render();
    }

    public function clear()
    {
        $this->reset(['type', 'brand', 'model', 'price']);
    }

}
