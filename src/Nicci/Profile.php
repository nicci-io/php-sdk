<?php

namespace Nicci;

class Profile {
  private $service = "profile";
  private $token = "";
  private $host = "https://profile.nicci.io";

  public function setHost($host) {
    $this->host = $host;
  }

  public function getHost() {
    return $host;
  }
}
