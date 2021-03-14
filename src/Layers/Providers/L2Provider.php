<?php
namespace Providers;

abstract class L2Provider extends L1Parent
{
  protected $l1;
  abstract function L2Service();

  function setLowerLevel(L1Provider $l1)
  {
    $this->l1 = $l1;
  }
}
?>