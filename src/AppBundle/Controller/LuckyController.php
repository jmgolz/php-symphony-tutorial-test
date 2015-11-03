<?php
// src/AppBundle/Controller/LuckyController
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller {
	
	/**
     * @Route("/lucky/")
     */
    public function indexAction()
    {
		return new Response("<html><body>IT WORKS!</body></html>");
	}
	
	/**
	* @route("/lucky/number")
	*/
	public function numberAction(){
		$number = rand(0, 100);		
		return new Response("<html><body>Lucky number: ".$number."</body></html>");
	}
	
}

?>