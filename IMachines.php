<?php

interface IMachines
{
    public function getModel();
    public function setModel (string $model);
    public function startEngine();
    public function giveHorn ();
    public function waveWipers ();
    public function setInterior (string $interior);
}

?>