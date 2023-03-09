<?php
  $pessoa1 = array ();
  $endereço = array (); 


  $pessoa1 [0] [0] = "lulu";
  $pessoa1 [0] [1] = "Corinthians";

  echo "Nome:" . $pessoa1[0][0] ;
  echo "<br>";
  echo "Time de Futebol:" . $pessoa1[0][1] ;
  echo "<br>";
  $endereço [0] [1] = "deide costa";
  $endereço [0] [2] = "zonelandia";
  $endereço [0] [3] = 27;
  echo "Cidade: " . $endereço[0][1];
  echo "<br>";
  echo "Rua: " . $endereço[0][2];
  echo "<br>";
  echo "Nº: " . $endereço[0][3];
?>
