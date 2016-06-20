<?php
	
	/**
	*Author:krishnadev_msfi
	*category: db_connection
	*/
	class db_connection 
	{
		//declaration of variable
		public $conn, $hostname, $username, $password, $database;
		
		//creating the instance variable of db_connection
		public static $db_conn;
		//initialising the variable inside the constructor
		function __construct()
		{
			$this->hostname = "localhost";
			$this->username = "root";
			$this->password = "mindfire";
			$this->database = "food_factory";
		}
		/*
		 *@param default parameter
		 *@use: creating the database connection
		*/
		
		function create_connection()
		{
			//Create connection
			$conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);

			//checking the connectivity
			if ( ! $this->conn)
			{
				die("Connection failed");
			}
		}

		/*
		 *@param: default parameter
		 *@use: instantiating the database connection
		 *@pupose: checking the presence of db_connectivity 
		*/
		function get_connection()
		{
			$this->db_conn=null;

			if(db_conn == null)
			{
				echo "hii";
			}
			else
			{
				$this->db_conn = new static();
				echo "db connection established";
			}
		}
	}


	//instatiating the object of db_connection
	$obj_connection = new db_connection();
	$obj_connection->get_connection();
?>