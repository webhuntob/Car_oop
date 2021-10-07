<?php
/*
*
*
*/

include 'MovableInterface.php';

class Car implements MovableInterface {
    
    protected $model;
    protected $tachometer;
    protected $speed;
    protected $transmission;
    
    public function __construct($model, $tachometer, $transmission, $speed) {

        $this->model = $model;
        $this->tachometer = $tachometer;
        $this->speed = $speed;
        $this->transmission = $transmission;
    }
        
    public function start() {
        if($this->transmission != 1) {
            echo 'Переключитесь на первую передачу что бы поехать!<br>';
        } else if($this->transmission == 1 && $this->tachometer < 2000) {
            echo 'Спасибо за чудестное приобритение автомобиля ' . $this->model . ' Вы точно не пожалеете и зависните на СТО))<br>';
            $speed = $this->up();
            $upSpeed = range(0, $speed);
            foreach($upSpeed as $key => $value) {
                if($value < 40) {
                    echo 'Скорость вашего движения ' . $value . 'км/час, слектор находится в положении ' . $this->transmission . '-ой передачи<br>';
                } elseif($value > 40 && $value < 60) {
                    $transmission = 2;
                    echo 'Скорость вашего движения ' . $value . 'км/час, слектор находится в положении ' . $transmission . '-ой передачи<br>';
                } elseif($value > 60 && $value < 80) {
                    $transmission = 3;
                    echo 'Скорость вашего движения ' . $value . 'км/час, слектор находится в положении ' . $transmission . '-ой передачи<br>';
                } elseif($value > 80 && $value < 100) {
                    $transmission = 4;
                    echo 'Скорость вашего движения ' . $value . 'км/час, слектор находится в положении ' . $transmission . '-ой передачи<br>';
                } elseif($value > 100 && $value < 220) {
                    $transmission = 5;
                    echo 'Скорость вашего движения ' . $value . 'км/час, слектор находится в положении ' . $transmission . '-ой передачи<br>';
                } elseif($value > 220) {
                    return $this->speed = $value;
                }
            }
        }
    }
    
    public function stop() {
        if($this->speed > 220) {
            echo 'Вы превышаете скорость, пожалуйста снизьте темп вашего движения!<br>';
            return $this->speed = 221;
        } 
    }
    
    public function up() {
        return '350';
    }
    
    public function down() {
        if($this->speed == 221) {
            echo 'Вы не выполнили условия аренды и мы вынуждены выключить ваше авто, соблюдайте инструкции<br>';
            $speed = $this->speed;
            $upSpeed = array_reverse(range(0, $speed));
            foreach($upSpeed as $key => $value) {
                if($value > 220 && $value > 218) {
                    echo 'Скорость вашего движения снижается ' . $value . 'км/час, выберите удобное место для парковки<br>';
                } elseif($value < 15 && $value > 13) {
                    echo 'Паркуйтесь в удобное место, эвакуатор выехал. Спасибо что выбрали услуги нашей компании!<br>';
                }
            }
        } 
    }
}