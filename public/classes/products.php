<?php
    class Product{
        private $qtd;
        private $product_name;
        private $brand;
        private $vehicle;
        private $product_value;


        public function getQtd() : int{
            return $this->qtd;
        } 
        public function getName():string{
            return $this->product_name;
        } 
        public function getValue():float{
            return $this->product_value;
        } 
        public function getBrand():string{
            return $this->brand;
        }
        public function getVehicle():string{
            return $this->vehicle;
        }
        public function __construct(int $qtd, string $product_name, string $brand, string $vehicle, float $product_value){
            $this->qtd = $qtd;
            $this->product_name = $product_name;
            $this->brand = $brand;
            $this->vehicle = $vehicle;
            $this->product_value = $product_value;
        }
       
    }
?>