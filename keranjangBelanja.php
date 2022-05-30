<html>
<head>
    <title>Keranjang Pembelian</title>
</head>
<body>
    <h2>Jumlah yang dibeli</h2>
    <?php
        $jmlGula = $_COOKIE["jumlah gula"];
        $jmlMinyak = $_COOKIE["jumlahminyak"];

        echo  "Jumlah gula yang dibeli $jmlGula <br>";
        echo  "Jumlah minyak yang dibeli $jmlMinyak <br>";
    ?>
</body>
</html>