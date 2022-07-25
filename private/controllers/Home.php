<?php 

/**
 * Home Controller
 */
class Home extends Controller
{
	
	function index()
	{
		$user = new User();
		$data = $user->findAll();

		$arr['firstname'] = 'Shakil';
		$arr['lastname'] = 'Chowdhury';


		// $user->insert($arr);
		// $user->update(7, $arr);
		$user->delete(7);
		

		$this->view( 'home', [ 'rows' =>$data ] );
	}
}

 ?>