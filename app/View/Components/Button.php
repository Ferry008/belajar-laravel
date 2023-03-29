<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    // Pendifinisian Properties
    // Text
    public $text;
    // Warna
    public $color;
    // Ukuran
    public $size;
    // Tipe
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = "Tombol", $color = "primary", $size = "", $type = "button")
    {
        // Mendaftarkan properties ke component
        $this->text = $text;
        $this->color = $color;
        $this->size = $size;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
