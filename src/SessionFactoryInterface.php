<?php
declare(strict_types=1);

namespace Interop\Session\Factory;

interface SessionFactoryInterface {
  /**
  * This function should create a SessionInterface from the $_SESSION Array.
  * This function must let the session at the previous state
  **/
  public function get(): \Interop\Session\SessionInterface;
}
