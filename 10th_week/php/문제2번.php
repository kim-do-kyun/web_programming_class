<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제2번</title>
</head>
<body>
    <?php
        echo "<h3>문제 2번 : While문을 이용하여 factorial 값을 구하는 함수를 작성하고 테스트하시오.</h3>";
        echo "<hr>";

        function fact($n){
            if ($n < 0){
                return "음수는 팩토리얼을 계산할 수 없음.";
            }

            $result =1;

            while($n>1){
                $result *= $n;
                $n--;
            }

            return $result;
        }
    
        echo "<h5>[입력값이 0일때]</h5>";
        $n = 0;
        $result = fact($n);
        echo "결과 : $result<br>";

        echo "<h5>[입력값이 6일때]</h5>";
        $n = 6;
        $result = fact($n);
        echo "결과 : $result<br>";

        echo "<h5>[입력값이 -3일때]</h5>";
        $n = -3;
        $result = fact($n);
        echo "결과 : $result<br>";
    ?>
</body>
</html>