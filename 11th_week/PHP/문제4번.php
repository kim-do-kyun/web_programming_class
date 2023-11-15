<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제4번</title>
</head>
<body>
    <?php
         echo "<h3>문제 4번 : 다음은 각각의 사람들이 현재까지 생활하였던 도시의 이름을 나타내었다.</h3>";
         echo "Kim    Seoul<br>";
         echo "Lee    Pusan, Daegu<br>";
         echo "Choi   Inchon<br>";
         echo "Park   Suwon, Daejon<br>";
         echo "Jung   Kwangju, Chunchon, Wonju<br><br>";
         echo "위의 값들을 연관 배열로 선언한 후 Choi 항목을 삭제한 뒤 연상 배열의 내용을 출력하는 PHP 프로그램을 작성하시오<br>";
         echo "(단, vardump() 함수는 사용하지 않음)<hr>";

         $info = array("Kim"=> "Seoul","Lee"=> "Pusan, Daegu","Choi"=> "Inchon","Park"=> "Suwon, Daejon","Jung"=> "Kwangju, Chunchon, Wonju");
         unset($info["Choi"]);      //Choi 자체를 삭제하는경우
         foreach($info as $key => $value){
            echo "[".$key.": ".$value."]<br>";
         }


    ?>
</body>
</html>