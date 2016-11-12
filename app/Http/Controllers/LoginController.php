<?php
namespace App\Http\Controllers;

class LoginController extends Controller
{
	public $clientId = 'client-id';
	public $clientSecret = 'client-secret';
	public $tenant = "common";
	public $scope = "openid+email+offline_access+profile+" .
					"https%3A%2F%2Fgraph.microsoft.com%2Fuser.readwrite";
	public $redirectUri = "http://localhost:8002/loginSuccessful";

	public function login()
	{
		$loginUrl = "https://login.microsoftonline.com/" . $this->tenant . 
					"/oauth2/v2.0/authorize?client_id=" . $this->clientId .
					"&response_type=code&scope=" . $this->scope . 
					"&redirect_uri=" . $this->redirectUri;

		header('Location: ' . $loginUrl);
		die();
	}

	public function retrieveAccessToken()
	{
		/* This is the URL parameter that allows us
		to exchange our code for an access token */
		$code = $_GET['code'];

		$authUrl = "https://login.microsoftonline.com/" . $this->tenant .
					"/oauth2/v2.0/token";
		$body = "grant_type=authorization_code&code=" . $code . "&scope=" . $this->scope .
				"&redirect_uri=" . $this->redirectUri . "&client_id=" . $this->clientId . 
				"&client_secret=" . $this->clientSecret;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $authUrl);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/x-www-form-urlencoded', 
			'Content-Length: ' . strlen($body)
		));
		$result = curl_exec ($ch);
		$result = json_decode($result, true);

		session(['access_token' => $result['access_token']]);

		return redirect()->action('DataController@showUserInfo');
	}
}

