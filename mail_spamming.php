<?php

	/**
	* @use: class for spamming the mail
	*/

	abstract class mailing_list
	{
			//function is used to sent message
			abstract function send_message();
			
			//function will add the new subscriber
			abstract function add_subscribers();

			//function will list total number of subscriber
			abstract function list_of_mail();

			//function will remove subscriber
			abstract remove_subscriber();
	}

	class mailer extends mailing_list
	{
		function send_message()
		{
			//the message 
			$msg = "Hii, how are you ?";
			$subject = "test";

			//using wordwrap if it's lines are longer than 50 character
			$msg = wordwrap($msg,50);

			//send mail
			mail("krishnadevb@mindfire.com", $subject, $msg);
		}

		function remove_subscriber()
		{
			
			echo "remove subscriber";
		}

	} 

	class watcher extends mailing_list
	{
		/*
		 * @use: function to receive the message
		*/

		function receive_message()
		{
			msg_receive(queue, desiredmsgtype, msgtype, maxsize, message)
		}
	}

?>