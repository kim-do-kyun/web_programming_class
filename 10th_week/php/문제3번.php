<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제3번</title>
</head>
<body>
    <?php
        echo "<h3>다음 프로그램과 동일한 기능을 하는 프로그램을 삼항연산자( ? : )를 이용하여 작성고 테스트하시오.</h3>";
        echo "<hr>";
        
        echo "\$value = 12;<br>";
        echo "if ((\$value % 2) == 1) print \"odd\"<br>";
        echo "else print \"even\"";

        echo "<hr>";


        $value = 12;
        $result = ($value % 2 == 1) ? "odd" : "even";

        echo "\$value = 12<br>";
        echo "\$result = (\$value % 2 == 1) ? \"odd\" : \"even\";";
        echo "<hr>";

        echo "[\$value가 12일때]<br>결과 : ";
        echo $result;
        echo "<br>[\$value가 11일때]<br>결과 : ";
        $value = 11;
        $result = ($value % 2 == 1) ? "odd" : "even";
        echo $result;
    ?>
</body>
</html>
