<?php
namespace Figures;
abstract class Figures
{
    protected $name;
    protected $side1;
    protected $side2;

    public function __construct($name){
        $this->name = $name;
    }
    public static $description =
        "Это иерархия фигур";
    abstract public function getArea();
    abstract public function getPerimeter();
    public function getName ()
    {
        return $this->name;
    }
}