<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * AppLayout constructor
     *
     * @param string $title prefixed page title
     */
    public function __construct(public string $title = '', public $scripts = '') {}

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
