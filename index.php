<?php 

require_once(__DIR__.'/vendor/autoload.php');


/*$transport = Swift_SmtpTransport::newInstance("smtp.gmail.com", 465, "SSL")
		->setUserName("md.shakhaoathossain@gmail.com")
		->setPassword("S71459284100@1");*/
$transport = Swift_SmtpTransport::newInstance("mail.sakibme.com",25)
						->setUserName("skb@sakibme.com")
						->setPassword("sakib100");


$mailer = Swift_Mailer::newInstance($transport);



$message = Swift_Message::newInstance() 
		->setSubject("Test Subject")
		->setFrom(array("md.shakhaoathossain@gmail.com" => "sakib hasan")) /*kotha theke jabe*/
		->setTo(array("larapress007@gmail.com" => "larapress"))             /*koi jabe*/
		->setBody("Test message bodys")
		->addPart("this is extra parts")
		->attach(Swift_Attachment::fromPath('something.html'));


if($send = $mailer->send($message)){
		$notice = "the maail has been send successfully";
}
if(isset($notice)){
	echo "<h1>".$notice."</h1>";
}

