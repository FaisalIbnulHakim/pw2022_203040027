<?php
define('NAMA', 'Faisal Ibnul Hakim');
echo NAMA;
echo "<br>";
const UMUR = 19;
echo UMUR;
echo "<hr>";
class Coba
{
  const NAMA = 'Faisal Ibnul Hakim';
}
echo Coba::NAMA;
echo "<hr>";
echo __LINE__;
echo "<hr>";
echo __DIR__;
echo "<hr>";
echo __FILE__;
echo "<hr>";
function Coba1()
{
  return __FUNCTION__;
}
echo coba1();
echo "<hr>";
class Coba2
{
  public $kelas = __CLASS__;
}
$obj = new coba2();
echo $obj->kelas;
echo "<hr>";
