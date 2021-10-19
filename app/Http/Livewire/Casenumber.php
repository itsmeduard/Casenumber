<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Casenumber extends Component
{
    public function render()
    {
        return view('livewire.casenumber');
    }

    public $caseNumber = ['casenum0','casenum1','casenum2','casenum3','casenum4'];
    public $inputPlate = [];

    public $inputcNumber;

    public function mount()
    {
        $this->inputPlate =
            [
                [   'case_number' => 0,
                    'plate'       => 0
                ]
            ];
    }

    public function add_plate($cNumber, $plateIndex)
    {
        $this->inputPlate[] = ['case_number' => $cNumber, 'plate' => $plateIndex];
    }

    public function remove_plate($plateIndex)
    {
        unset($this->inputPlate[$plateIndex]);
        $this->inputPlate = array_values($this->inputPlate);
    }
}
