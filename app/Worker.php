<?php

namespace App;

abstract class Worker
{

    public int $age;
    public int $bdate;
    public string $fio;
    public string $position;

    /**
     * @param int $age
     * @param int $bdate
     * @param string $fio
     * @param string $position
     */
    public function __construct(int $age, int $bdate, string $fio, string $position)
    {
        $this->age = $age;
        $this->bdate = $bdate;
        $this->fio = $fio;
        $this->position = $position;
    }


    abstract public function introducing_worker();
}