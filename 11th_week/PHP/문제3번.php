<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문제3번</title>
</head>
<body>
    <?php
        echo "<h3>문제 3번 : 'exam.txt' 라는 파일을 열어 그 파일의 줄 수, 단어 수, 글자 수를 계산하는 프로그램을 작성하시오.</h3>";
        echo "<hr>";

        $line_count = 0;
        $word_count = 0;
        $char_count = 0;
        
        if(file_exists("exam.txt")){
            $file = fopen("exam.txt",'r');
            
            while (!feof($file)){
                $line = fgets($file);
                $word = fgetc($file);

                $line_count++;

                //mb_strlen(문자열의 길이구하는거)
                echo $line. "<br>";
                
                $word_count += mb_substr_count($line,' ')+1;
                echo (mb_strlen($line,"UTF-8")-mb_substr_count($line,' ')-1);
                echo "<br>";
                echo mb_strlen($line,"UTF-8");
                echo   "<br>";
                $char_count += (mb_strlen($line,"UTF-8")-mb_substr_count($line,' ')-1);
            }
            

        } else{
            echo "파일이 존재하지 않습니다.";
        }

        echo "줄 수 : {$line_count}<br>";
        echo "단어 수 : {$word_count}<br>";
        echo "글자 수 : {$char_count}<br>";
    ?>
</body>
</html>
