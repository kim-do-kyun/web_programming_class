# :books: PHP 과제 
## :open_file_folder: 문제별 설명
##### :loudspeaker: [문제 번호 클릭시 해당 문제 웹 페이지로 이동]
#### :pushpin: <a href = "http://zetgi7dk5359.dothome.co.kr/11th_week/문제1번.php">문제1번</a>

* 문제 1번 : 별찍기 for문의 응용으로 상단부 삼각형와 하단부의 두가지 for문을이용하여 만듬

#### :pushpin: <a href = "http://zetgi7dk5359.dothome.co.kr/11th_week/문제2번.php">문제2번</a>

* 문제 2번 : 힌트 그대로 ```array_reverse```를 이용해 역순으로 정렬 후 출력함

#### :pushpin: <a href ="http://zetgi7dk5359.dothome.co.kr/11th_week/문제3번.php">문제3번</b>

* 문제 3번 : ```fopen()```을 이용해 파일을 열고, ```fgets()```함수를 이용해 파일에서 한 줄씩 읽어오면서 라인수를 카운트 했고, 일어온 라인을 ```str_word_count```로 단어 수를 세고, ```strlen(str_replace())```를 이용해 글자 수를 읽어왔음

#### :pushpin: <a href ="http://zetgi7dk5359.dothome.co.kr/11th_week/문제4번.php">문제4번</a>

* 문제 4번 : 연관 배열을 생성하면서 동시에 초기화 하는 방식으로 ```$배열이름 = array("키1" => 값1, "키2" => 값2,...);```의 방식으로 연관 배열을 선언했으며 ```unset()```함수를 이용해 ```Choi```항목을 제거했음

#### :pushpin: <a href = "http://zetgi7dk5359.dothome.co.kr/11th_week/문제5번.php">문제5번</a>

* 문제 5번 : 3번문제의 방식을 기반으로 ```fopen(), !feof(파일의 끝까지)```등을 이용하여 읽고, ```explode()```함수를 이용하여 공백을 기준으로 잘라서 첫번째 인덱스로 나이를 판단후 조건에 맞는경우만 출력하게 함