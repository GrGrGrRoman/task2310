<?php

include_once 'IMachines.php';

abstract class Machines implements IMachines {
    // модель транспортного средства
    protected string $engine = 'Двигатель запущен!';
    protected string $horn = 'Сигнал!';
    protected string $wipers = 'Машем дворниками!';
    protected string $forward = 'Поехали вперёд!';
    protected string $back = 'Поехали назад!';


    protected $model;
    protected function __construct(string $model)
    {
        $this->model = $model;
    }

    public function getModel ()
    {
        return $this->model;
    }

    public function setModel (string $model)
    {
        $this->model = $model;
    }

    // внутрення отделка 
    private $interior = 'Luxury';

    public function getInterior ()
    {
        return $this->interior;
    }

    public function setInterior (string $interior)
    {
        $this->interior = $interior;
    }

    // запуск двигателя, основная первичная функция
    public function startEngine()
    {
        echo $this->engine . PHP_EOL;
    }
    // двигаться вперед
    public function moveForward ()
    {
        echo $this->forward . PHP_EOL;
    }
    // двигаться назад
    public function moveBack ()
    {
        echo $this->back . PHP_EOL;
    }
    // сигналить
    public function giveHorn ()
    {
        echo $this->horn . PHP_EOL;
    }
    // включить дворники
    public function waveWipers ()
    {
        echo $this->wipers . PHP_EOL;
    }
}