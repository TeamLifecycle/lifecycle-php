<?php

require_once 'vendor/autoload.php';

class Lifecycle {
	public $lifecycle_api_key;
	public function __construct($api_key){
		$this->lifecycle_api_key = $api_key;
	}
	public function track($event_id, $unique_id) {
		$headers = array("Content-Type" => "application/json", "lifecycle-api-key" => $this->lifecycle_api_key);
		$body = array("event_id" => $event_id, "unique_id" => $unique_id);

		$response = Unirest\Request::post("http://localhost:3400/v1/track", $headers, $body);

		echo $response->code;        // HTTP Status code
		$response->headers;     // Headers
		echo $response->body;        // Parsed body
		$response->raw_body;    // Unparsed body
		return $response;
	}
	public function identify($params) {

		$headers = array("Content-Type" => "application/json", "lifecycle-api-key" => $this->lifecycle_api_key);
		$body = array("params" => $params);

		$response = Unirest\Request::post("http://localhost:3400/v1/identify", $headers, $body);

		echo $response->code;        // HTTP Status code
		echo $response->headers;     // Headers
		$response->body;        // Parsed body
		$response->raw_body;    // Unparsed body
		return $response;
	}

}