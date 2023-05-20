<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border='2'>
        <?php
        $myfile = fopen("suyan.txt", "w") or die("Unable to open File");
        $txt = "Suyan Man Amatya\n";
        fwrite($myfile , $txt);
        $multi = "Multiplication of two\n";
        fwrite($myfile , $multi);
        
        $num = 2;
        for($i = 1 ; $i<=5 ; $i++)
        {
            $product = $i * $num. "\r\n";
            $product2 = "$num * $i = $product\n";
            echo '<br>';
            fwrite($myfile , $product2);
        }
        fclose($myfile);
        
        $myfile = fopen("suyan.txt", "a") or die("Unable to open File");
        $num = 2;
        for($i = 6 ; $i<=10 ; $i++){
            $product = $i * $num;
            $product2 = "$num * $i = $product\n";
            // echo '<br>';
            fwrite($myfile , $product2);
        }
        
        fclose($myfile);
        $myfile = fopen("suyan.txt" , "r") or die("Unable to open file");

        while (!feof($myfile))
        {
            $value = fgets($myfile);
            print "<tr> <td>$value</td> </tr>";
        }
        ?>
    </table>
</body>

</html>