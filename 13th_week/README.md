# :computer: Web-Programming Class Task [11월 27일]
> 11월 27일 수업중 회원가입, 로그인 폼을 이용하고 이를 데이터 베이스에 저장하는 코드 리뷰

<br>

## :loudspeaker: [구성]
### :memo: 코드리뷰
### :floppy_disk: 데이터베이스 연결 방법

<br>

#### :clipboard:function.php 코드 리뷰
```
<?php 
// 세션을 시작해 세션 변수를 사용할 수 있게 함
session_start();

// 데이터베이스 연결
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 변수 선언
$username = "";
$email    = "";
$errors   = array(); 

// 'register_btn'이 클릭된 경우 register() 함수를 호출한다
if (isset($_POST['register_btn'])) {
        register();
}

// 사용자 등록 함수(회원가입)
function register(){
        // 전역 변수 선언
        global $db, $errors, $username, $email;

        // 폼 값에서 모든 입력 값을 받아오고 e() 함수를 사용하여 폼 값에서 나감
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);

        // 폼 유효성 검사 : 폼이 올바르게 채워졌는지 확인
        if (empty($username)) { 
                array_push($errors, "Username is required"); 
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) {
                array_push($errors, "The two passwords do not match");
        }

        // 폼에 오류가 없으면 사용자 등록(회원가입)
        if (count($errors) == 0) {
                $password = md5($password_1);//데이터베이스에 저장하기 전 비밀번호암호화

                if (isset($_POST['user_type'])) {
                        $user_type = e($_POST['user_type']);
                        $query .= "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', '$user_type', '$password')";
                        mysqli_query($db, $query);
                        $_SESSION['success']  = "New user successfully created!!";
                        header('location: home.php');
                }else{
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                          VALUES('$username', '$email', 'user', '$password')";
                        mysqli_query($db, $query);

                        // 생성된 사용자의 ID를 가져옴
                        $logged_in_user_id = mysqli_insert_id($db);

                        $_SESSION['user'] = getUserById($logged_in_user_id); // 로그인된 사용자를 세션에 저장
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');                          
                }
        }
}

// ID에 해당하는 사용자 배열을 반환
function getUserById($id){
        global $db;
        $query = "SELECT * FROM users WHERE id=" . $id;
        $result = mysqli_query($db, $query);

        $user = mysqli_fetch_assoc($result);
        return $user;
}

// 문자열에서 탈출
function e($val){
        global $db;
        return mysqli_real_escape_string($db, trim($val));
}

// 오류 표시
function display_error() {
        global $errors;

        if (count($errors) > 0){
                echo '<div class="error">';
                        foreach ($errors as $error){
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
} 

// 사용자가 로그인되어 있는지 확인함
function isLoggedIn()
{
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}

// 로그아웃이 클릭된 경우 세션을 파기하고 사용자 세션 변수를 지운다
if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        header("location: login.php");
}

// 'login_btn'이 클릭된 경우 login() 함수를 호출
if (isset($_POST['login_btn'])) {
        login();
}

// 사용자 로그인 함수
function login(){
        global $db, $username, $errors;

        // 폼 값에서 값을 가져옴
        $username = e($_POST['username']);
        $password = e($_POST['password']);

        // 폼이 올바르게 채워졌는지 확인
        if (empty($username)) { 
                array_push($errors, "Username is required");
        }
        if (empty($password)) {
                array_push($errors, "Password is required");
        }

        // 폼에 오류가 없으면 로그인 시도
        if (count($errors) == 0) {
                $password = md5($password);

                $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
                $results = mysqli_query($db, $query);

                if (mysqli_num_rows($results) == 1) { // 사용자 발견
                        // 사용자가 admin(관리자)인지 user(사용자)인지 확인
                        $logged_in_user = mysqli_fetch_assoc($results);
                        if ($logged_in_user['user_type'] == 'admin') {

                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";
                                header('location: admin/home.php');               
                        }else{
                                $_SESSION['user'] = $logged_in_user;
                                $_SESSION['success']  = "You are now logged in";

                                header('location: index.php');
                        }
                }else {
                        array_push($errors, "Wrong username/password combination");
                }
        }
}

// 사용자가 관리자인지 확인
function isAdmin()
{
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                return true;
        }else{
                return false;
        }
}
```

#### :cd: 데이터 베이스 연결 방법
* Laragon의 데이터베이스에서 CREATE BATABASE "데이터베이스 이름"으로 데이터 베이스 생성
* 이후 테이블 생성후 key값을 id로 설정한 뒤 나머지 세부 정보를 입력받을 공간 생성
![스크린샷 2023-11-27 161123](https://github.com/kim-do-kyun/My_Baekjoon/assets/70315428/23a9032b-2787-4f0d-a4c9-1188eb31a85f)
