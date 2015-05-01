<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	 public function testBasicExample()
	 {
	 	$response = $this->call('GET', '/');

	 	$this->assertEquals(200, $response->getStatusCode());
	 }

	public function testTanah(){
		$response = $this->call('GET', '/tanah');
		$this->assertEquals(200, $response->getStatusCode());
	}

    public function testPemilik(){
        $response = $this->call('GET', '/pemilik');
        $this->assertEquals(200, $response->getStatusCode());
    }
}
