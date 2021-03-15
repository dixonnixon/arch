<?php
namespace Services;

use Providers\L1Provider;
use Providers\L1Peer;

class DataLink  extends L1Peer  implements L1Provider
{
  private $msg;

  function L1Service()
  {
    echo "message from higher Level:" . $this->message . "\r\n";
    echo __METHOD__ . " doing job\r\n";
    //method here to implement sending message to another stack
  }

  function setMessage($msg)
  {
    $this->message = $msg;
  }
}


?>