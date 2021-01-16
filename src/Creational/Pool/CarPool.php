<?php


namespace App\Creational\Pool;


class CarPool
{
    /**
     * @var Car[]
     */
    private array $freeCars = [];
    /**
     * @var Car[]
     */
    private array $busyCars = [];

    /**
     * @return Car
     */
    public function rentCar():Car
    {
        if (empty($this->getFreeCars())) {
            $car = new Car();
        }else{
            $car = array_pop($this->freeCars);
        }
        $this->busyCars[spl_object_hash($car)]=$car;

        return $car;
    }

    public function freeCar(Car  $car)
    {
        $hashCarId = spl_object_hash($car);
        if (isset($this->busyCars[$hashCarId])) {
            unset($this->busyCars[$hashCarId]);
            $this->freeCars[$hashCarId]=$car;
        }
    }

    /**
     * @return Car[]
     */
    public function getFreeCars(): array
    {
        return $this->freeCars;
    }

    /**
     * @param Car[] $freeCars
     * @return CarPool
     */
    public function setFreeCars(array $freeCars): CarPool
    {
        $this->freeCars = $freeCars;
        return $this;
    }

    /**
     * @return Car[]
     */
    public function getBusyCars(): array
    {
        return $this->busyCars;
    }

    /**
     * @param Car[] $busyCars
     * @return CarPool
     */
    public function setBusyCars(array $busyCars): CarPool
    {
        $this->busyCars = $busyCars;
        return $this;
    }

    /**
     * @return int
     */
    public function getFreeCarsCount():int
    {
        return count($this->getFreeCars());
    }

    /**
     * @return int
     */
    public function getBusyCarsCount():int
    {
        return count($this->getBusyCars());
    }

    /**
     * @return int
     */
    public function getAllCarsCount():int
    {
        return $this->getBusyCarsCount() + $this->getFreeCarsCount();
    }

    /**
     * @return string
     */
    public function getReport():string
    {
        return "free cars : {$this->getFreeCarsCount()} \n 
          busy cars : {$this->getBusyCarsCount()} \n
          all cars : {$this->getAllCarsCount()}
          ";
    }
}