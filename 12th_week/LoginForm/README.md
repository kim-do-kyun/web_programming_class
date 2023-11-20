# :computer: Web-Programming Class Task [11월 20일]
> 11월 20일 수업 3교시 과제(로그인 폼 만들고 입력 받은 정보를 php파일의 변수에 값 할당)

<br>

### :pushpin: 로그인 폼(HTML, CSS, JS) 
#### :speaker:<a href="http://zetgi7dk5359.dothome.co.kr/12th_week/LoginForm/login.html">[로그인폼 바로가기]</a>
* 로그인 폼은 https://bootsnipp.com/snippets/bxzmb 에서 오픈소스를 다운 받아 왔으며 
```<form>```태그에 ```action="loginback.php" ```를 html파일에 선언하고,
php파일에서는 넘겨준 name값이 가진 데이터를 ```$_POST```를 이용해 받아 변수에 넣고 출력함   

<br>

### :green_book: HTTP 요청방식
* 클라이언트인 브라우저가 서버에 HTTP 요청을 보낼 때 방식
  * GET 방식
  * POST 방식
* 위의 두 방식 모두 form 요소를 통해 입력받은 데이터를 연관 배열에 담아 전송(연관 배열의 키값은 input요소의 name속성값, 값은 사용자가 입력한 데이터)
* :blue_book:GET 방식
  * 주소에 데이터(data)를 추가하여 전달하는 방식
  * 브라우저에 의해 캐시되어 저장, 쿼리 문자열(query string)에 포함되어 전송되어 길이의 제한이 있음 따라 보안상 취약해 중요한 데이터는 POST 방식이 좋음
* :orange_book:POST 방식
  * 데이터를 별도로 첨부하여 절달하는 방식
  * 캐시되지 않아 브라우저 히스토리에도 남지않고, 쿼리 문자열과는 별도로 전송되어 길이의 제한도 없으며 GET 방식보다 보안성이높다