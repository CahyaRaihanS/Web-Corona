<?php
// include database connection file
include_once("Config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nomer = $_POST['no'];

    $provinsi=$_POST['provinsi'];
    $positif=$_POST['positif'];
    $sembuh=$_POST['sembuh'];
    $meninggal=$_POST['meninggal'];
    

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tb_corona SET no='$nomer',provinsi='$provinsi',positif='$positif',sembuh='$sembuh',meninggal='$meninggal' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: Indexc.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_corona WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $id = $user_data['id'];
    $nomer = $user_data['no'];
    $provinsi = $user_data['provinsi'];
    $positif = $user_data['positif'];
    $sembuh = $user_data['sembuh'];
    $meninggal = $user_data['meninggal'];
    
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="Indexc.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>No</td>
                <td><input type="text" name="no" value=<?php echo $nomer;?>></td>
            </tr>
            <tr> 
                <td>Provinsi</td>
                <td><input type="text" name="provinsi" value=<?php echo $provinsi;?>></td>
            </tr>
            <tr> 
                <td>Positif</td>
                <td><input type="text" name="positif" value=<?php echo $positif;?>></td>
            </tr>
            <tr> 
                <td>Sembuh</td>
                <td><input type="text" name="sembuh" value=<?php echo $sembuh;?>></td>
            </tr>
            <tr> 
                <td>Meninggal</td>
                <td><input type="text" name="meninggal" value=<?php echo $meninggal;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>