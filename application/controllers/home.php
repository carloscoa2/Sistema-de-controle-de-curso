<?php
class Home extends CI_Controller{
	public function index()
	{
		$data["pagina"] = 'home';
		$this->load->view("layout",$data);
		
	}

}
?>
