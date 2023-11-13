<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		if($this->input->post('btn_subscribe_email')){
			$subscribe_email = $this->input->post('subscribe_email');
			echo $subscribe_email;


			$to = "info@eswarihomes.com,ikchakravarthy@eswarigroup.com,chandhu418@gmail.com";
				$subject = "Eswarihomes-Subscribe Email";

				$message = "
				<html>
				<head>
				<title>Eswarihomes-Subscribe Email</title>
				</head>
				<body>
				<p>Eswarihomes-Subscribe Email</p>
				<table>
				<tr>
				<th>Email</th>
				
				</tr>
				<tr>
				<td>".$subscribe_email."</td>
				</tr>
				</table>
				</body>
				</html>
				";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <csr8790@gmail.com>' . "\r\n";
				$headers .= 'Cc: csr8790@gmail.com' . "\r\n";

				mail($to,$subject,$message,$headers);
				
		}
		redirect('home');
	}

}