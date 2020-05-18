<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="Indexc.php">Go to Home</a>
    <br/><br/>

    <form action="Add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>No</td>
                <td><input type="text" name="no"></td>
            </tr>
            <tr> 
                <td>Provinsi</td>
                <td><input type="text" name="provinsi"></td>
            </tr>
            <tr> 
                <td>Positif</td>
                <td><input type="text" name="positif"></td>
            </tr>
            <tr> 
                <td>sembuh</td>
                <td><input type="text" name="sembuh"></td>
            </tr>
            <tr> 
                <td>Meninggal</td>
                <td><input type="text" name="meninggal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nomer = $_POST['no'];
        $provinsi = $_POST['provinsi'];
        $positif = $_POST['positif'];
        $sembuh = $_POST['sembuh'];
        $meninggal = $_POST['meninggal']; 

        // include database connection file
        include_once("Config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tb_corona VALUES(NULL,'$nomer','$provinsi','$positif','$sembuh','$meninggal')");

        // Show message when user added
        if($result) {
        echo "User added successfully. <a href='Indexc.php'>View Users</a>";
        } else {
            echo "Data gagal ditambah";
        }
    }
    ?>
</body>
</html>