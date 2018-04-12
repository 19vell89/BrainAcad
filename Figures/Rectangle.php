<?php
/**
 * Created by PhpStorm.
 * User: Vell
 * Date: 03.04.2018
 * Time: 19:44
 */
namespace Figures;
class Rectangle extends Figures
{

    public function __construct($a, $b)
    {
        $this->side1 = $a;
        $this->side2 = $b;
        parent::__construct('Rectangle');
    }

    public function getArea()
    {
        return $this->side1 * $this->side2;
    }

    public function getPerimeter()
    {
        return ($this->side1 + $this->side2) * 2;
    }
}