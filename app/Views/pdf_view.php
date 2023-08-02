<!DOCTYPE html>  
<html lang="en">  

<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Generate PDF CodeIgniter 4 - qadrLabs</title>  

</head>  

<body>  
<h2>Data Mahasiswa </h2>  
<a href="<?php echo site_url('pdf/generate') ?>">  
    Download PDF  
</a>  
<table border=1 width=80% cellpadding=2 cellspacing=0 style="margin-top: 5px; text-align:center">  
    <thead>    
        <tr bgcolor=silver align=center>  
            <td width="10%">Id</td>  
            <td width="30%">Nama</td>  
            <td width="20%">Phone</td>  
            <td width="20%">Address</td>  
            <td width="20%">Email</td>  
        </tr>    
    </thead>    
    <tbody>            
        <?php foreach($data as $value) : ?> 
            <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['phone'] ?></td>
            <td><?= $value['address'] ?></td>
            <td><?= $value['email'] ?></td>        
            </tr>
        <?php endforeach; ?>        
       </tbody>
    </table>  
<p>Jumlah data : <?= count($data) ?></p>  
</body>  

</html>
