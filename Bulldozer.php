<?php

include_once 'Machines.php';

class Bulldozer extends Machines
{
    public function __construct(string $model = 'Caterpillar')
    {
        $this->model = $model;
    }
    protected string $bucket = 'Управление ковшом активированно!';
    // управлять ковшом
    public function drivingBucket ()
    {
        echo $this->bucket . PHP_EOL;
    }
}

// реализация методов
$bull = new Bulldozer;

function activateMachine($bull)
{
    $bull->setModel($model = 'DT-800');
    $bull->setInterior($interior = 'Wood&Leather');
    echo 'Модель машины:' . ' ' . $bull->getModel() . PHP_EOL;
    echo 'Внутренняя отделка:' . ' ' . $bull->getInterior() . PHP_EOL;
    $bull->startEngine();
    $bull->drivingBucket();
    $bull->giveHorn();
    $bull->waveWipers();           
}
print_r (activateMachine($bull));
?>