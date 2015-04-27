<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	// public function testBasicExample()
	// {
	// 	$response = $this->call('GET', '/');
	//
	// 	$this->assertEquals(200, $response->getStatusCode());
	// }

	public function testPdf(){
		$response = $this->call('GET', '/testpdf');
		$this->assertEquals(200, $response->getStatusCode());
	}

}
