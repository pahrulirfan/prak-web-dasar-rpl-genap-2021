<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<h2>Biodata</h2>
<hr>

<form action="" method="post">
    <label>Nama : </label>
    <input type="text" name="txtnama"> <br>
    <label>Alamat : </label>
    <input type="text" name="txtalamat"> <br>
    <input type="submit" name="submit" value="Cetak">
</form>

<?php
if (isset($_POST['submit'])){
    echo "Nama Anda : " . $_POST['txtnama'] . "<br>";
    echo "Alamat Anda : " . $_POST['txtalamat'] . "<br>";
}
?>

</body>
</html>














