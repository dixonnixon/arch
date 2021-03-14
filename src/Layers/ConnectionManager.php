<?php
namespace Layers;

use Providers\L1Provider;
use Providers\L2Provider;
use Providers\L3Provider;

class ConnectionManager
{
  private $dataLink;
  private $transport;
  private $session;

  function __construct(L1Provider $l1, L2Provider $l2, L3Provider $l3)
  {
    $this->dataLink = $l1;
    $this->transport = $l2;
    $this->session = $l3;
  }

  function runBottomTopReverse()
  {
    $this->session->L3Service("<connection string>");
  }
}

?>