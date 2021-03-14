<?php
namespace Services;

use Providers\L2Provider;
use Providers\L1Parent;

class Transport extends L2Provider 
{
  private const NAME = '<protocol#>';
  function L2Service()
  {
    echo __METHOD__ . " starting job\r\n";
    $this->l1->L1Service();
    echo __METHOD__ . " finishing job\r\n";

  }


}
?>