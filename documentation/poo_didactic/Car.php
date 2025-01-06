<?php

class Car

{	// Propriedades (atributos) :: Properties (fields)
	private $name;
	private $color;	
	public $vehicleType = "car";
	
	// membro estático, compartilhado entre todos :: acessado sem objeto
	public static $totalCars = 2;
	
	// Constructor
	public function __construct($name, $color)
	{
		$this->name = $name;
		$this->color = $color;
	}
	
	// Getter & setter methods
	public function getColor()
	{
		return $this->color;
	}
	public function setColor($color)
	{
		$allowedColors = [
			"black",
			"blue",			
			"brown"
		];
		if (in_array($color, $allowedColors)){
			$this->color = $color;
		}
	}
	
	// Methods
	public function getCarInfo()
	{	// membros (propriedades) de instância, acessados via objetos
		return "Name: " . $this->name . ", Color: " . $this->color;
	}
	
	// Método estático
    public static function getTotalCars() {
        return "Total cars created: " . self::$totalCars;
    }
	
}

