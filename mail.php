<?php

require_once 'emailUIclass.php';

class sendEmail extends emailUiClass {


	public function __construct ($contact, $receiver, $messageSubject, $message, $name)
	{
		$emailUi = $this -> emailUiMethod($messageSubject, $message, $name, $contact);

		$header = "From:".$contact."\r\n";
        $header .= "Cc:".$receiver." \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";

        $send = mail ($receiver, $messageSubject, $emailUi, $header);

        if ($send) {
        	echo "<span style=\"color:green;font-size:16px;padding:10px;background-color:#fff;\">Message Sent Successfully</span>";
        } else echo "<span style=\"color:red;font-size:16px;padding:10px;background-color:#fff;\">An error Occured. Please try again</span>";
	}



}


if (isset($_POST) && isset($_POST["msgType"])) {

	$messageType = $_POST["msgType"];
	$receiver = "patex112@gmail.com";

	if ($messageType == "contact") {

		$name = $_POST["name"];
		$contact = $_POST["contact"];
		$message = $_POST["msg"];
		$messageSubject = "Contact Message From Client";

	} else {

		$name = $_POST["quoterName"];
		$contact = $_POST["quoterContact"];
		$service = $_POST["service"];
		$budget = $_POST["budget"];
		$message = $_POST["message"];
		$message = $service."<br> <br> ".$message."<br> <br>".$budget;
		$messageSubject = "Client Quotation Request";
	}

	$sendMessage = new sendEmail ($contact, $receiver, $messageSubject, $message, $name);

}

?>