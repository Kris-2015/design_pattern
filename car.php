<?php
	/**
	* 
	*/

	class Car_Manufacture
	{
		static $make_car, $model_name;

		function getModel()
		{
			$this->model_name = array("Maruto SX4, Maruti Baleno");
		}
	}

	class Nexa 
	{
		public $car_model;		

		function __construct()
		{
			$this->car_model = array("Maruto SX4, Maruti Baleno");
		}

		function PlacedOrder()
		{
			
		}
	}
?>