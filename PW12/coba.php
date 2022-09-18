<?php
abstract class Buah
{
  private $warna;
  abstract public function makan();
  public function setWarnaa($warna)
  {
    $this->warna = $warna;
  }
}

class Apel extends Buah
{
  public function makan()
  {
    // kupas
    // makan tengah
  }
}

class Jeruk extends Buah
{
  public function makan()
  {
    // kupas
    // makan satu satu
  }
}
