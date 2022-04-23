<?php

class fruit
{
    public $name;
    protected $color;
    private $weight;

    public function set_name($name)
    {
        $this->name = $name;
    }

    protected function set_color($color)
    {
        $this->color = $color;
    }

    private function set_weight($weight)
    {
        $this->weight = $weight;
    }
}
