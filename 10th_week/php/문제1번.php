<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제1번</title>
</head>
<body>
    <?php
        echo "<h3>문제 1번 : \$a라는 변수의 값이 홀수이면 그 숫자 다음 숫자인 짝수를 출력하고, \$a의 값이 짝수이면 그 수를 출력하는 함수를 작성하고 테스트하시오.<br></h3>";
        echo "<hr>";

        function checkNumber($a){
            if ($a % 2 == 1) {
                return $a + 1;
            } else {
                return $a;
            }
        }
        
        echo "<h5>[홀수 테스트 : \$a의 값이 5일때]</h5>";
        $a = 5;
        $result = checkNumber($a);
        echo "입력값 : $a, 결과 : $result<br>";

        echo "<h5>[짝수 테스트 : \$a의 값이 6일때]</h5>";
        $a = 6;
        $result = checkNumber($a);
        echo "입력값 : $a, 결과 : $result<br>";
    ?>
</body>
</html>