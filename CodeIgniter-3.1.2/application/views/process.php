<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Process extends CI_Controller {

	public function index()
	{
      $this->load->view('ninjaGold');

      if($_POST['building']=='farm'){
        $earned = rand(10,20);
        $_SESSION['gold']+=$earned;
        // array_unshift($_SESSION['activity'].$earned);
      }  if($_POST['building']=='cave'){
          $earned = rand(5,10);
          $_SESSION['gold']+=$earned;
          // array_unshift($_SESSION['activity'].$earned);
        }
      elseif($_POST['building']=='house'){
        $earned = rand(2,5);
        $_SESSION['gold']+=$earned;
        // array_unshift($_SESSION['activity'].$earned);
      }
      elseif($_POST['building']=='casino'){
        $earned = rand(-50,50);
        $_SESSION['gold']+=$earned;
        // array_unshift($_SESSION['activity'].$earned);
      }
}
}
