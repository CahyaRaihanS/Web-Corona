<?php
// Create database connection using config file
include_once("Config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM tb_corona ORDER BY id DESC");
?>

<html>
<head>    
    <title>Table Pegawai</title>
</head>

<body>
<a href="Add.php"><Button>Add New User</Button></a><br/><br/>

    <table width='80%' border=1>

    <tr style='background-color: #fc0'>
        <th>No</th> <th>Provinsi</th> <th>Positif</th> <th>Sembuh</th> <th>Meninggal</th> <th>update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['no']."</td>";
        echo "<td>".$user_data['provinsi']."</td>";
        echo "<td>".$user_data['positif']."</td>";
        echo "<td>".$user_data['sembuh']."</td>";
        echo "<td>".$user_data['meninggal']."</td>";    
        echo "<td><a href='Edit.php?id=$user_data[id]'>Edit</a> | <a href='Delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>