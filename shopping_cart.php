<?php

	/*
	 *@class: paypal
	 *@purpose: payment gateway with paypal
	*/
	class paypal
	{
		/*
		 *@param: default parameter
		 *@use: will inform user about the paypal gateway
		*/
		function get_paypal()
		{
			echo "Welcome to the paypal payment system";
		}
	}

	/*
	 *@class: credit_card
	 *@purpose: payment gateway with credit_card
	*/
	class credit_card
	{ 
		/*
		 *@param: default parameter
		 *@use: will inform user about the credit_card gateway
		*/	
		function pay_by_card()
		{
			echo "Welcome to credit card system....proceed for payment";
		}
	}

	/*
     *@class: shopping_cart
     *@purpose: total shopping done by user
	*/
	class shopping_cart
	{
		//variable declaration
		public $total_amount=0;


		/*
		 *@use: constructor for initialisation
		*/
		function __construct($amt)
		{
			$this->total_amount = $amt;
		}

		/*
		 *@use: function for proceeding to payment
		*/
		function payment()
		{

			
			//checking the amount
			if($this->total_amount >= 1000)
			{
				//payment by credit card

				//instantiating credit_card class
				$card = new credit_card();  

				//calling the funtion pay_by_card
				$card->pay_by_card();		
			}
			else
			{
				//instantiating paypal class
				$paybypal = new paypal();	

				//calling the funtion pay_by_card
				$paybypal -> get_paypal(); 
			}
		}
	}

	$obj = new shopping_cart(4000);
	$obj -> payment();	
?>
