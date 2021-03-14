<?php
namespace Services;

use Providers\L3Provider;

class Session extends L3Provider
{
  private CONST NAME = '<magic_cipher>';
  function L3Service($message)
  {
    echo __METHOD__ . " starting job\r\n";
    $this->l2->L2Service();
    echo __METHOD__ . " finishing job\r\n";
  }


  function message()
  {
    return self::NAME;
  }
}
?>