<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tasks;

$angka_sebelumnya=0;
$angka_sekarang=1;
  

echo "$angka_sebelumnya $angka_sekarang";
 
for ($i=0; $i<10; $i++)
{
  
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output";
  
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}
 
