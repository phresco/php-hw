<?php
/*	Author by {phresco} QA Automation Team	*/

require_once 'tests/UserModules.php';


class AllTest extends PHPUnit_Framework_TestSuite
{
	protected function setUp(){
		parent::setUp();
	}
	public static function suite(){
		$testSuite = new AllTest('AllTestSuite');
		$testSuite->addTestSuite('UserModules');
		return $testSuite;
    }
	protected function tearDown(){
		parent::tearDown();
	}
}
?>
