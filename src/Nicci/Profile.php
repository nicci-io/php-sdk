<?php

namespace Nicci;

class Profile {
  private $service = "profile";
  private $token = "";
  private $host = "https://profile.nicci.io";

  private $client_id = "";
  private $client_secret = "";
  private $client_password = "";
  private $scope = array("basic");
  private $state = "";
  private $redirect_uri = "";
  private $locale = "en_US";

  public function __construct($config = array()) {
    $this->readConfig($config);
  }

  private function readConfig($config = array()) {
    $vars = array("host", "client_id", "client_secret", "redirect_uri", "scope", "locale");
		foreach ($vars as $var) {
			if (isset($config[$var])) {
				$this->{$var} = $config[$var];
			}
		}
  }

  public function setHost($host) {
    $this->host = $host;
  }

  public function getHost() {
    return $host;
  }
}
