<?php
namespace Providers;

use Provisers\L1Provider;

class L1Parent
{
  function connect(L3Provider $l3)
  {
    $this->l1->setMessage($l3->message());
  }
}