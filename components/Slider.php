<?php
namespace Bsbvolmachten\Slider\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Slider\Models\Slider as Slides;

class Slider extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Slides',
            'description' => 'Geeft de slides weer op de pagina.'
        ];
    }

    public function slides()
    {
        return Slides::orderBy('sort_order', 'ASC')->get();
    }
}