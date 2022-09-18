<?php
/*
  Property
  - mempresentasikan data / keadaan dari sebuah object
  - variabel yang ada di dalam object (member variable)
  - sama seperti yang ada di dalam PHP, ditambah dengan visibility di depannnya

  Method
  - Mempresentasikan perilaku dari sebuah object
  - Function yang ada di dalam object
  - sama seperti yang ada di dalam PHP, ditambah dengan visibility di depannnya

  Contoh kasus (mobil)
  Property
  - nama
  - merk
  - warna
  - kecepatanMaksimal
  - jumlahPenumpang
  Method
  - tambahKecepatan
  - kurangiKecepatan
  - gantiTransmisi
  - belokKiri
  - belokKanan

*/
?>

<?php
class Mobil
{
  public $nama;
  public $merk;
  public $warna;
  public $kecepatanMaksimal;
  public $jumlahPenumpang;

  public function tambahKecepatan()
  {
  }
  public function kurangKecepatan()
  {
  }
  public function gantiTransmisi()
  {
  }
}
?>