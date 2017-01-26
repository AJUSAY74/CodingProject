<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Random extends CI_Controller {

   public function _construct()
   {
     parent::_construct();
     $this->output->enable_profiler();
   }
	public function index()
	{
    session_start();
    $_SESSION['capnum'] = ((isset($_SESSION['capnum'])) ? $_SESSION['capnum'] : 0);
    if(isset($_GET['ert'])){
     $_SESSION['capnum']++;
}
?>
    <form action="<? echo $_SERVER['PHP_SELF']; ?>" method="get">
      <input type="submit" name="add" value="Generate" />
    </form>
<?

    echo "<h1>"."Randowm Word Generator!"."</h1>";
    echo "Random Word ( attemp #". $_SESSION['capnum']. ")"."<br>";
    printf("%s\r\r\n", uniqid());
    $this->load->view('randomWord');
	}
}
