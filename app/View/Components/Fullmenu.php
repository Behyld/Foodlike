<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class FullmenuLayout extends Component
{
        public function render(): View
        {
            return view('layouts.fullmenu');
        }
}