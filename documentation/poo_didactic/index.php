<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
	<?php
		require_once 'Car.php';
		
		$car01 = new Car("Nildo", "black");

		echo $car01->vehicleType;
		echo "<br>";
		echo $car01->getCarInfo();
		echo "<br>";
		
		echo $car01->setColor("blue");
		echo $car01->getColor();

		var_dump($car01);
		
		// Acessando membros estáticos
		echo Car::getTotalCars();
		
	?>
  </body>
</html>