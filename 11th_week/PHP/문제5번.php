<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제5번</title>
</head>
<body>
    <h3>문제 5번 : 고객 정보가 들어있는 파일 client.txt가 있다. 이 파일에 저장된 자료의 구조는 다음과 같이 ASCII 형식으로 저장되어 있다고가정하자.</h3>
    이름 [TAB] 나이 [TAB] 성별 [TAB] 이메일<br><br>
    이 파일을 읽어 나이가30세 이상의 고객을 출력하는 프로그램을 작성하시오.<br><br>
    ==== client.txt ===============================================================<br>
    nameA 29 남 abc@abc.com<br>
    nameB 39 여 bcd@bcd.net<br>
    nameC 19 남 cde@cde.ac.kr<br>
    nameD 40 남 def@def.com<br>
    nameE 24 여 efg@efg.ac.kr<br>
    nameF 32 남 fgh@fgh.com<br>
    nameG 17 여 ghi@ghi.com<br>
    nameH 35 여 hij@hij.ac.kr<br>
    ==========================================================================
    <hr>
    <?php
        $file = fopen("client.txt",'r');

        while (!feof($file)) {
            $line = trim(fgets($file));

            $info = explode(' ', $line);

            if(intval($info[1] >= 30)){
                echo "이름 : $info[0], 나이 : $info[1], 성별 : $info[2], 이메일 : $info[3]<br>";
            }
        }
    ?>
</body>
</html>