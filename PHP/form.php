<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Biodata</h2>
    <hr>
    <div class="row">
        <div class="col">
            <form action="" method="post">
                <div class="form-group">
                    <label>Nama : </label>
                    <input type="text" name="txtnama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat : </label>
                    <input type="text" name="txtalamat" class="form-control">
                </div>
                <input type="submit" name="btncetak" value="Cetak" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-warning">
            </form>
        </div>
        <div class="col">
            <?php
            // cek jika tombol cetak di klik
            if (isset($_POST['btncetak'])) {
                ?>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><?php echo $_POST['txtnama']; ?></td>
                        <td><?php echo $_POST['txtalamat']; ?></td>
                    </tr>
                    </tbody>
                </table>
                <?php
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>














