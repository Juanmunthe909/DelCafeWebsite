<?php

namespace App\View\Components;

use Illuminate\View\Component;

class adminLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'Del_Cafe';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('theme.admin.index');
    }
}