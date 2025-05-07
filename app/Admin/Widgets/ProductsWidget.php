<?php
namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        return $this->renderWidget('Счетчик продуктов', Product::count(), 'voyager-basket');
    }

    public function shouldBeDisplayed()
    {
        return true;
    }

    protected function renderWidget($title, $count, $icon)
    {
        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => $icon,
            'title' => $title,
            'text' => "Количество: {$count}",
            'button' => [
                'text' => 'Перейти к списку',
                'link' => ''
            ],
            'image' => $icon,
        ]));
    }
}
