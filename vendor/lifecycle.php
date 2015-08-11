<?php

require_once 'vendor/autoload.php';
namespace 'Lifecycle'



class Lifecycle {
	$lifecycle_api_key;
	function __construct($api_key){
		$lifecycle_api_key = $api_key;
	}
	public static function track($event_id, $unique_id) {

		$headers = array("Content-Type" => "application/json", "lifecycle-api-key" => $lifecycle_api_key);
		$body = array("event_id" => $event_id, "unique_id" => $unique_id);

		$response = Unirest\Request::post("http://localhost:3400/v1/track", $headers, $body);

		$response->code;        // HTTP Status code
		$response->headers;     // Headers
		$response->body;        // Parsed body
		$response->raw_body;    // Unparsed body
	}
	public static function identify($params) {

		$headers = array("Content-Type" => "application/json", "lifecycle-api-key" => $lifecycle_api_key);
		$body = array("params" => $params);

		$response = Unirest\Request::post("http://localhost:3400/v1/identify", $headers, $body);

		$response->code;        // HTTP Status code
		$response->headers;     // Headers
		$response->body;        // Parsed body
		$response->raw_body;    // Unparsed body
	}

}