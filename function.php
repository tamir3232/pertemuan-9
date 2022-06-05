<?php
 

 
   $con = mysqli_connect("localhost","root","","menu_makanan");
 
   //ambil data dari tabel menu
   $result = mysqli_query($con, "SELECT * FROM menu");
   // if(!$result){
   //   echo mysqli_error($con);
   // }
     // untuk cek error
 
   // var_dump($result);
   //ambil data mahasiswa dari object result
   //mysqli_fetch_row() mengembalikan array numeric
   // mysqli_fetch_assoc(); mengembalikan array associatif
   // mysqli_fetch_array(); mengembalikan array keduanya
   // mysqli_fetch_object(); mengembalikan secara object
 
     // while($menu = mysqli_fetch_assoc($result)){
     //   var_dump($menu);
 
     // }
     function query($query){
        global $con;
        $result = mysqli_query($con, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
      }
 
     
 
 
 
   
?>