<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //In cac so N
    $x = rand(-100, 100);
    echo "N = $x <br>";
    if ($x > 0)
    {
        echo "Uoc so cua N la: ";
        for ($i = 1; $i <= $x; $i++) {
            if ($x % $i == 0) {
                echo "$i ";
            }
        }
        echo "<br><br>";
    }
    // Kiem tra so nguyen to
    function laSoNguyenTo($n) {
        if ($n < 2) {
            return false;
        }

        for ($i = 2; $i < $n; $i++) {

            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

if ($x > 0)
    {
        echo "Kiem tra so nguyen to:<br>";

        if (laSoNguyenTo($x)) {
            echo "$x la so nguyen to";
        } else {
            echo "$x khong phai la so nguyen to";
        }   
        echo "<br><br>";
        //Tinh tong so nguyen to < N
        $tong = 0;
        for ($i = 2; $i < $x; $i++) {

            if (laSoNguyenTo($i)) {
                $tong = $tong + $i;
            }
        }
        echo "Tong cac so nguyen to nho hon $x: <br>";
        echo "$tong";
        echo "<br><br>";
        // Kiem tra N co phai la so chinh phuong hay khong
        $ChinhPhuong = false;
        for ($i = 1; $i <= $x; $i++) {

            if ($i * $i == $x) {
                $ChinhPhuong = true;
                break;
            }
        }
        echo "Kiem tra so chinh phuong: ";
        if ($ChinhPhuong) {
            echo "$x la so chinh phuong.";
        } else {
            echo "$x khong phai la so chinh phuong.";
        }

    }
else
    {
        echo "$x khong phai la so duong nen khong thuc hien cac yeu cau.";
    }
    ?>
</body>
</html>