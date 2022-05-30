<?php
    $name = "mahasiswa";
    $value = "Galihwahyu";
    setcookie($name, $value, time()+600);

    setcookie("kelas", "MI-1G", time()+3600);
?>
<html>
<body>
<?php
    echo "Cookies telah diubah";
?>
</body>
</html>