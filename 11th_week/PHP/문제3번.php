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
        echo "==== exam.txt ===============================================================<br>";
        echo "A popular general-purpose scripting language that is especially suited to web development.<br>";
        echo "Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.<br>";
        echo "==========================================================================<br>";
        echo "<hr>";

        $line_count = 0;
        $word_count = 0;
        $char_count = 0;

        $file = fopen("exam.txt",'r');
        while(!feof($file)){
            $line_count++;
            
            $line = trim(fgets($file)); 
            
            $word_count += str_word_count($line);

            $char_count += strlen(str_replace(' ','', $line));
        }
        echo "줄 수 : {$line_count}<br>";
        echo "단어 수 : {$word_count}<br>";
        echo "글자 수 : {$char_count}<br>";
    ?>
</body>
</html>
