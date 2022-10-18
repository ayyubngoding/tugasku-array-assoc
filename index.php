<?php

$indentitas=["id"=>"1","nama"=>"Ayyub","npm"=>"720520012","email"=>"ayyub@gmail.com","Jurusan"=>"Teknik Informatika","alamat"=>"Paberasan"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa Informatika</h1>
    <table border="1" cellspacing="0" cellpadding="10">
<tr>
    <th>No. Urut</th>
    <th>Nama</th>
    <th>Npm</th>
    <th>Email</th>
    <th>Jurusan</th>
    <th>Alamat</th>
</tr>
<tr>
    
<?php foreach($indentitas as  $mhs => $value) :  ?>
        <td><?= $value;?></td>
    <?php endforeach; ?>
  
</tr>

    </table>
</body>
</html>