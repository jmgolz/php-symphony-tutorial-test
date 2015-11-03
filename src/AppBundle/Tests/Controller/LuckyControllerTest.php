<?php
namespace AppBundle\Tests\Controller;

use AppBundle\Controller\LuckyController;


/**
* Unit test for the tutorial "Lucky numbers" class
*/
class LuckyControllerTest extends \PHPUnit_Framework_TestCase {

	//stub
	public function testLuckyNumberShouldBeUnderOneHundred(){
		$lucky = new LuckyController();
		
		$generateOneNumber = $lucky->numberAction();
		
		$this->assertGreaterThanOrEqual(0, $generateOneNumber);
		$this->assertLessThanOrEqual(100 , $generateOneNumber);
	}
}

?>