<?php

/**
 * @file
 * A mock Elomentary client, used only for testing.
 */

namespace Eloqua;

class Client {

  protected $data = array(
    'options' => array(),
    'authentication' => array(),
  );

  public function setOption($name, $value) {
    $this->data['options'][$name] = $value;
  }

  public function getOption($name) {
    return $this->data['options'][$name];
  }

  public function authenticate($site, $user, $password) {
    $this->data['authentication']['site'] = $site;
    $this->data['authentication']['login'] = $user;
    $this->data['authentication']['password'] = $password;
  }

  public function getAuthentication() {
    return $this->data['authentication'];
  }

}
