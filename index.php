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
        <h4>masukan daftar mashasiswa</h4>
       <h4>Daftar Mahasiswa</h4>
       <a href="tambah.php">TAMBAH DATA</a>
       <br>
       <table border="2" cellpadding="20" cellspacing = "0">
        
       <tr>
         <th>NO.</th>
         <th>aksi</th>
         <th>Nama</th>
         <th>harga</th>
       </tr>
       
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
        <?php endforeach; ?>


        <p>coba paragraph</p>
       </table>
  <script></script>
  </body>
  </html>