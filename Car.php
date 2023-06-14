<?php

include_once 'Machines.php';

class Car extends Machines
{
    public function __construct(string $model = 'Ford')
    {
        $this->model = $model;
    }
    protected string $nitro = 'Закись азота активирована!';
    // применить закись азота
    public function applyNitro()
    {
        echo $this->nitro . PHP_EOL;        
    }    
}

// реализация методов
$car = new Car;

function activateMachine($car)
{
    //$car->setModel($model = 'Porche');
    echo 'Модель машины:' . ' ' . $car->getModel() . PHP_EOL;
    echo 'Внутренняя отделка:' . ' ' . $car->getInterior() . PHP_EOL;
    $car->startEngine();
    $car->applyNitro();
    $car->giveHorn();
    $car->waveWipers();        
}
print_r (activateMachine($car));

?>