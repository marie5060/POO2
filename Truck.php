<?php

require_once 'Vehicule.php';
 
class Truck extends Vehicule
{
    private int $stockageCapacity; 
    private int $load = 0 ;

    public function __construct( string $color, int $nbSeats, string $energy, int $stockageCapacity){
        parent::__construct($color, $nbSeats, $energy);
        $this->stockageCapacity = $stockageCapacity;
    }
//pas besoin car déja déclarée dans mon parent
    // public function getColor() {
    //   return $this->color;
    // }
    // public function setColor(string $color) : Truck {
    //     $this->color = $color;
    //     return $this;
    //  }

    //  public function getNbSeats() {
    //  return $this->nbSeats;
    //  }
    //  public function setNbSeats(int $nbSeats) : int {
    //     $this->nbSeats = $nbSeats;
    //  }

    //  public function getEnergy(){
    //  return $this->energy;
    //  }
    //  public function setEnergy(int $energy) : Truck {
    //     $this-> energy = $$energy;
    // }

    public function getStockageCapacity(){
        return $this->stockageCapacity;
    }
    public function setStockageCapacity(int $stockageCapacity) : Truck {
        $this->stockageCapacity = $stockageCapacity;
    }
    
    public function getLoad(){
        return $this->load;
    }
    public function setLoad(int $load) {
        if($load <=100){
            $this->load = $load;
        } else {
            $coucou = $load - 100;
            return "You tried to put " . $coucou . " l more in the tank";
        }
  
    }

    public function isFull(){
        if ($this->load >= 99){
            return 'Full';
        } else{
            return 'in filling';
        }
    }
}