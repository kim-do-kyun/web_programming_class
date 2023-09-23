# 실습과제1-1
![실습문제1-1](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/816042d5-8dec-4eea-a210-b8d4c0fc424b)
</br>
&#60;div&#62;태그로 문단을 나누고, 셀렉터에서 border을 이용해 yellowgreen색의 테두리를 만들어 표현했습니다.

---

# 실습과제1-2
![실습문제1-2](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/8fbb5f4c-9cb6-4b5f-b750-d97c4ec68a00)
</br>
css의 display:inline 을 이용해 한줄씩 테두리를 만들었습니다.
</br>
**css의 display 종류**
</br>
<img src="https://github.com/kim-do-kyun/web_programming_class/assets/70315428/0dae9348-1ac0-4a1d-9686-80443ec947df" width="30%">


---

# 실습과제2
![실습문제2](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/8f45bd99-f64f-49bc-9700-502414341890)
</br>
css의 position:fixed로 웹페이지의 아래부분에 고정했으며, 크기는 10px로 맞춰서 표현했습니다.


---

# 실습과제3
![실습문제3](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/b3db4e46-30be-4dbe-a96d-0073872447a5)
</br>
```
.input{
            border:  1px solid greenyellow; 
            padding-left: 3px; 
            padding-right: 3px;}
        th{
            width: 200px;
            text-align: left;
            border-bottom: 1px solid gray;
        }
```
위의 css 구문에서 border-bottom을 이용해 밑줄을 표현했습니다.

---

# 실습과제4-1
![실습문제4-1](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/75696940-98a3-47b4-b1ce-9c23c150074a)
</br>
css에서 :hover을 이용해서 li(각 나라)의 background-color를 이용해서 마우스를 올리면 yellowgreen으로 바뀌게 표현했습니다.

---

# 실습과제4-2
![실습문제4-2](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/481fb63e-d4e3-4a29-895b-6ef2007cf3cc)
</br>
ul 셀렉터에 배경이미지를 넣고, li:hover을 이용해
실습과제4-1처럼 나라를 마우스오버 하면 색이 바뀌게 표현했습니다.

---

# 실습과제5
![실습문제5](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/db4dee5d-44f6-4b11-b760-e151abe125bb)
</br>
float: left를 이용해 스폰지밥의 사진을 왼쪽으로 이동시키고 그옆에 설명이 출력되게 표현했습니다.

---

# 실습과제6-1
![실습문제6-1](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/89b82477-b6af-48ec-8690-e3143a431a2c)
</br>
```
 @keyframes rotatesponge{
            100%{transform: rotate(360deg);}
        }
        img{
            animation-name: rotatesponge;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            width: 100px; 
            height: 100px;
        }
```
&#64;keyframes 을 이용해 transform을 정의하고 rotate(360deg)로 스폰지밥이 360도 돌수있게 img셀렉터에 적용시켰습니다.

---

# 실습과제6-2
![실습문제6-2](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/6beed7a9-c6f7-4d91-8251-312c08755f14)
</br>
실습문제 6-1번과는 조금 다르게 &#64;keyframes에서
50%는 -90deg로 왼쪽 회전, 100%는 90deg로 회전을 시켜 1초동안 계속해서 왼쪽에서 오른쪽으로 회전하는 것을 이용했습니다.

---

# 실습과제7
[마우스 올리기전]
![실습문제7(before)](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/fc29a418-f6a3-4dcf-902d-f06bd08b8518)
</br>
[마우스 올린후]
![실습문제7(after)](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/08a94bdc-04cb-4c77-8c5e-6c505bdd3ded)
</br>
transition을 이용해 마우스를 올리면 2초에 걸쳐 스폰지밥의 이미지가 가로로 꽉 채우게 했습니다.

---

# 실습과제8
![실습문제8](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/7c806bf1-f5e0-4996-a1b4-60e99f9b97ea)
</br>
자손 셀렉터를 이용해 한 단계식 중첩되게 css를 이용했습니다.
```
 #menubar{background-color: olive; width: 120px;}
 #menubar ul{margin: 0; padding: 0; height: 105px;} #menubar ul li{display: block; list-style-type: none; padding: 0px 15px;}
 #menubar ul li a{color: white; text-decoration: none;}
 #menubar ul li a:hover{color: violet;}
```

---

# 실습과제9
![실습문제9](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/68322f57-10e4-4f8b-a32d-b03fa4beb32d)
</br>
카푸치노 만드는 순서에 대한 내용을 	&#60;div&#61; 안에 만들고, 셀렉터 div에 border속성을 이용해 테두리를 만들었습니다, 셀렉터 ol에는 list-style-type:noe;을 이용해 목록의 마커를 없애고 숫자를 넣었습니다.

---

# 실습과제10
[첫화면]
![실습문제10(before)](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/68805775-4d1b-4ab9-a53f-bcc1e8d77a26)

[3초 후]
![실습문제10(after)](https://github.com/kim-do-kyun/web_programming_class/assets/70315428/cbcdb948-d7bc-4740-8968-6a34cb360db1)
</br>
웹 페이지가 열리고 3초동안 "질문있습니다."가 오른쪽에서 왼쪽으로 이동하며, 이를
```
@keyframes movequestion{
    from{margin-left: 100%;}
    to{margin-left: 0%;}
    }
    p{
        animation-name: movequestion;
        animation-duration: 3s;
        animation-iteration-count: 1;
    }
```
from,to를 이용했습니다.
