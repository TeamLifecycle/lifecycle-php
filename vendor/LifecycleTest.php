<?php

require_once 'lifecycle.php';

class LifecycleTest extends \PHPUnit_Framework_TestCase
{
	public $test;

	public function setUp() {
		$this->test = new Lifecycle('07fd3326118474520dc18baf');
	}
	public function testAPIKEY() {
		$key = $this->test->lifecycle_api_key;
		$this->assertTrue($key == '07fd3326118474520dc18baf');
	}
	public function testIdentify() {
		$params = array( "unique_id" => "1234",
						 "first_name" => "Nathan",
						 "last_name" => "Mooney",
						 "email_address" => "someone@lifecycle.io",
						 "phone_number" => "12345678913");
		$this->test->identify($params);
		$this->assertTrue($response->code == 200);
	}
	public function testTrack() {
		$this->test->track("event", "12");
		$this->assertTrue($response->code == 200);
	}
}