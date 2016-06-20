<?php
	/**
	* @class for checking the connectivity of db connection
	*/

	include('db_connection.php');

	class check_dbconnection extends db_connection
	{
		
		function check_connection()
		{
			if(db_conn == null)
			{
				$db_obj = new db_connection();
			}
			else
			{
				return db_conn;
			}
		}
	}
?>