<?php
namespace Services;

use Providers\L1Provider;

class DataLink  implements L1Provider 
{
  private $msg;

  function L1Service()
  {
    echo "message from higher Level:" . $this->message . "\r\n";
    echo __METHOD__ . " doing job\r\n";
  }

  function setMessage($msg)
  {
    $this->message = $msg;
  }
}


?>