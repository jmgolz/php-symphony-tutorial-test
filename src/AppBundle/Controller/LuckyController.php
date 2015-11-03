<?php
// src/AppBundle/Controller/LuckyController
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class LuckyController extends Controller {
	
	/**
     * @Route("/lucky/")
     */
    public function indexAction(){
		return new Response("<html><body>IT WORKS!</body></html>");
	}
	
	/**
	* @Route("/lucky/number")
	*/
	public function numberAction(){
		$number = rand(0, 100);		
		return new Response("<html><body>Lucky number: ".$number."</body></html>");
	}
	
	/**
	* @Route("/lucky/generate_random_numbers/{count}")
	*/
	public function generateRandomNumbersAction($count){
		$numbers = array();
		for($i = 0; $i < $count; $i++){
			$numbers[] = rand(0, 100);
		}
		$numbersList = implode(", ", $numbers);
		return new Response("<html><body>Lucky numbers: ".$numbersList."</body></html>");
	}
	
	/**
	* @Route("/api/lucky/number")
	*/
	public function apiNumberAction(){
		$data = array('lucky_number' => rand(0, 100));
		return new JsonResponse($data);
	}
	
	/**
	* @Route("/lucky/number/with_templating/{count}")
	*/
	public function numberGeneratorWithTemplatingAction($count){
		$numbers = array();
		for($i = 0; $i < $count; $i++){
			$numbers[] = rand(0, 100);
		}
		$numbersList = implode(", ", $numbers);
		return $this->render('lucky/number.html.twig', array("luckyNumberList" => $numbersList));
	}
	
}

?>