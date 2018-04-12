<?php
/**
 * Created by PhpStorm.
 * User: Vell
 * Date: 04.04.2018
 * Time: 19:11
 */

class Teapot
{
    protected $name;
    protected $model;
    protected $color;
    private $max_volume_of_water;
    protected $volume_of_water;
    protected $enabled;

    public function __construct(
        $name,
        $model,
        $color,
        $volume_of_water,
        $enabled
    ) {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
        $this->max_volume_of_water = 3;
        $this->volume_of_water = 0;
        $this->enabled = false;
    }
    public function fill ($volume_of_water) {
        if ($volume_of_water >= 0.5 && $volume_of_water <= 3) {
            echo "Чайник может быть закипячен" . "<br>";
        } else if ($volume_of_water < 0.5) {
            echo "Долейте немного воды в чайник" . "<br>";
        } else {
            echo "Отлейте немного воды из чайника" . "<br>";
        }
    }
     public function is_connected ($enabled) {
        if ($enabled==true) {
            echo "Чайник может быть закипячен" . "<br>";
        } else {
            echo "Проверьте подключение к сети 220V" . "<br>";
        }
     }
     public function pour_out ($volume_of_water) {
         if ($volume_of_water >= 0.5 && $volume_of_water <= 3) {
             echo "Чайник может быть закипячен" . "<br>";
         } else if ($volume_of_water > 3) {
             echo "Отлейте немного воды из чайника" . "<br>";
         } else { null;
            }
     }
     public function turn_on ($enabled, $volume_of_water ) {
        if ($enabled==true && ($volume_of_water >= 0.5 && $volume_of_water <= 3)) {
            echo "Включите чайник" . "<br>";
        } else {
            echo "Проверьте подключение к сети 220V и/или обьем воды в чайнике" . "<br>";
        }
     }
}