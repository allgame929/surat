<?php
include 'config.php';
$conn=mysql_connect("localhost", "root", "");

$id = $_GET["id"];

$np = mysql_query("SELECT * FROM pejabat WHERE id = $id");
$row=mysql_fetch_row($np);
//var_dump($row);

if (isset ($_POST["submit"]) ){

    $nama_pejabat = htmlspecialchars($_POST["nama_pejabat"]);

    $query="UPDATE pejabat SET nama_pejabat = '$nama_pejabat' WHERE id = $id";

    mysql_query($query);

    mysql_affected_rows($conn);

        if (( $_POST) > 0 ) {
            echo "
                <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'pengaturan.php';
                </script>
            ";
        } else {
            echo "
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'pengaturan.php';
            </script>
        ";
        }

}

?>

<html>
<head>
    <title>Edit Data Nama Pejabat</title>
</head>
<body>
    <h1> Edit Data Nama Pejabat </h1>

        <form action="" method="POST">
            <ul>
                <li>
                    <label for="nama_pejabat"> Nama Pejabat :</label>
                    <input type="text" name="nama_pejabat" id="nama_pejabat" required value="<?= $row[1]; ?>">
                </li>

                <li>
                    <button type="submit" name="submit"> Ok </button>
                </li>
            </ul>

        </form>

</body>
</html>