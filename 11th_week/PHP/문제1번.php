<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제1번</title>
</head>
<body>
    <?php
        echo "<h3>문제 1번 : for문을 이용하여 다음과 같은 출력을 하는 프로그램을 작성하시오.</h3>";
        echo "<hr>";

        $rows = 5;
        for( $i = 0; $i < $rows; $i++ ){
            for( $j = 0; $j <= $i; $j++ ){
                echo chr(65 + $j) ." ";
            }
            echo "<br>";
        }
        for( $i = $rows-1; $i > 0; $i-- ){
            for( $j = 0; $j <= $i-1; $j++ ){
                echo chr(65+ $j) ." ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>