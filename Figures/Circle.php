<?php
/**
 * Created by PhpStorm.
 * User: Vell
 * Date: 03.04.2018
 * Time: 20:47
 */
namespace Figures;
class Circle extends Figures
{
    const PI = 3.14;

    public function __construct($radius)
    {
        $this->side1 = $radius;
        $this->name = 'Circle';
    }
    public function getArea()
    {
        return self::PI*$this->$side1*$this->$side1;
    }

    public function getPerimeter()
    {
        return 2*self::PI*$this->$side1;
    }
}