<?php 

/**
 * Signup Controller
 */
class Signup extends Controller
{
	
	function index()
	{
		$errors = array();
		if (count($_POST) > 0) {
			// code...
			$user = new User();

			if ($user->validate($_POST)) {
				$user->insert($_POST);
				$this->redirect('login');
			}else
			{
				$errors = $user->errors;
			}
		}
		echo $this->view('signup', [
			'errors' =>$errors,
		]);
	}
}

 ?>