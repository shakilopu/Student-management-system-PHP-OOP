<?php 

/**
 * Students Controller
 */
class Students extends Controller
{
	

	function index($id = null)
	{
		echo $this->view('students');
	}
}

 ?>