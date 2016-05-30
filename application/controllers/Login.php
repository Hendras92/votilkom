<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
        // $this->load->view('V_login');     /*ui-143*/        
        $this->load->library('cas');
        $this->cas->force_auth();
        $user = $this->cas->user();
        echo "Hello, $user->userlogin!";
	}

    public function check()
    {
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://api.luliner.ilkom.unsri.ac.id/safana.php',
            CURLOPT_USERAGENT => 'Codular Sample cURL Request',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                nim => $_POST["uname"],
                pass => $_POST["pass"]
            )
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);
        echo($resp);
    }

}
