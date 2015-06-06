<?php

use App\Models\User;

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	 public function testBasicExample()
	 {
         $user = new User(array('name' => 'Admins'));
         $this->be($user);
         $response = $this->call('GET', '/');
         $this->assertEquals(200, $response->getStatusCode());
	 }

	public function testTanah(){
        $user = new User(array('name' => 'Admins'));
        $this->be($user);
		$response = $this->call('GET', '/tanah');
		$this->assertEquals(200, $response->getStatusCode());
	}

    public function testPemilik(){
        $user = new User(array('name' => 'Admins'));
        $this->be($user);
        $response = $this->call('GET', '/pemilik');
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testKonflik(){
        $user = new User(array('name' => 'Admins'));
        $this->be($user);
        $response = $this->call('POST', '/konflik/store/1');
        $this->assertEquals(200, $response->getStatusCode());
    }
}
