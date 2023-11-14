<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제2번</title>
</head>
<body>
    <?php
        echo "<h3>문제 2번 : 배열을 내림차순으로 정렬하고 싶다. sort() 함수를 이용하여 revsort() 함수를 설계하고 테스트하시오<br>(hint : sort와 array_reverse함수 사용)</h3><hr>";
        
        $array = [3,1,5,2,6,4];
        echo "<테스트 1><br>정렬 전 : ";
        print_array($array);
        echo "<br>";
        revsort($array);
        
        echo "정렬 후 : ";
        print_array($array);

        echo "<hr><테스트 2><br>";
        $array = [40,30,50,20,600,10,70];
        echo "정렬 전 : ";
        print_array($array);
        echo "<br>";
        revsort($array);
        echo "정렬 후 : ";
        print_array($array);

        function revsort(&$arr) { // &$arr로 배열을 참조로 전달
            sort($arr);
            $arr = array_reverse($arr); // 정렬된 배열을 뒤집음
        }
        function print_array($array){
            echo "[";
           foreach ($array as $key => $value) {
                if($key !== 0){         //배열 사이에 , 출력
                    echo ", ";
                }
                echo $value;
            }
            echo "]";
        }
    ?>
</body>
</html>