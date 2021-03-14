<?php
use PHPUnit\Framework\TestCase;

use Services\DataLink;
use Services\Transport;
use Services\Session;
use Layers\ConnectionManager;

class LayersTest extends TestCase
{
  function testInitLayers()
  {
    $d = new DataLink();
    $t = new Transport();
    $s = new Session();

    $t->setLowerLevel($d);
    $s->setLowerLevel($t);

    $t->connect($s);

    $cn = new ConnectionManager($d, $t, $s);
    $cn->runBottomTopReverse();
  }
}

?>