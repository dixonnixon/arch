<?php
namespace Providers;

abstract class L3Provider
{
  protected $l2;
  abstract function L3Service($message);
  function setLowerLevel(L2Provider $l2)
  {
    $this->l2 = $l2;
  }
}
?>