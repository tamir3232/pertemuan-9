 <?php
require'function.php';
$menu= query("SELECT * FROM menu");


 ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
        body{
          font-family: Arial, Helvetica, sans-serif;
        }
      </style>
      <title>Document</title>
  </head>
  <body>

        

        <h3>masukan daftar mashasiswa</h3>
       <h1>Daftar Mahasiswa</h1>

       <a href="tambah.php">TAMBAH DATA</a>
       <br>
       <table border="2" cellpadding="20" cellspacing = "0">
        
       <tr>
         <th>NO.</th>
         <th>aksi</th>
         <th>Nama</th>
         <th>harga</th>
         <th>nama</th>
       </tr>

       

       <?php $i=2; ?>

       <?php foreach($menu as $row): ?>
        <tr>
          <td><?= $i++ ?></td>
          <td>
            <a href=""> ubah </a> | 
            <a href=""> Hapus </a>
          </td>  
          <td>
            <?= $row["Nama_menu"]; ?>
          </td>
          <td>
            <?= $row["Harga"]; ?>
          </td>
          
        
        </tr>
        <p>contoh paragraf</p>
        <?php endforeach; ?>


        <p>coba paragraph</p>
       </table>
  <script></script>
  </body>
  </html>