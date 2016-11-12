<?php
namespace App\Http\Controllers;

class DataController extends Controller
{
	public function showUserInfo()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://graph.microsoft.com/v1.0/me");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Authorization: Bearer ' . session('access_token')
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		$result = curl_exec($ch);
		$result = json_decode($result, true);

		$name = $result['givenName'];
		$mail = $result['mail'];
		$mobilePhone = $result['mobilePhone'];

		return view('data', array(
			'name' => $name, 
			'mail' => $mail, 
			'phone' => $mobilePhone
		));
	}
}

