<?php
/**
 * Created by PhpStorm.
 * User: Vell
 * Date: 02.04.2018
 * Time: 22:22
 */
namespace Figures;
class Square extends Rectangle
{
    public function __construct($a)
    {
        parent::__construct($a,$a);
    }
}