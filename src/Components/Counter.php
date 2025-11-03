<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Cache;

class Counter extends Component
{
    public function __construct()
    {
        $this->count = Cache::get('counter', 0);
        $this->increment = $this->count + 1;
        
        Cache::put('counter', $this->increment);
    }

    public function render()
    {
        return view('components.counter');
    }
}
