<?
$connect = mysqli_connect("localhost","super887","tn3011925","super887");
mysqli_query($connect, "set names utf8");

//조작된 값이 오는 경우
if($_GET) die("잘못된 시도입니다.");

$_POST=array_map('mres',$_POST);

$id = $_POST[email];
$nickname = $_POST[name];
$pwd = $_POST[pass];
$repwd = $_POST[repass];
$major = $_POST[major];
$student = $_POST[student_no];

if($_POST[emailCheck] == 1)
{
    //이메일 정규표현식 검사
    if(!preg_match("/^[0-9a-zA-Z]([\-.\w]*[0-9a-zA-Z\-_+])*@([0-9a-zA-Z][\-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9}$/si",$id))
    {
        die("이메일 형식이 올바르지 않습니다.");
    }

    //이미 존재하는 이메일인지 검사하는 부분 추가해야 함.

    $query = mysqli_fetch_array(mysqli_query($connect, "select * from wink_member where email='{$id}'"),MYSQLI_BOTH);

    if(count($query))
    {
        die("입력하신 이메일은 이미 가입된 계정입니다.");
    }
}

if($_POST[nicknameCheck] == 1)
{
    //닉네임 길이 검사
    if(mb_strlen($nickname) <2 || mb_strlen($nickname)>9)
    {
        die("이름은 2자 이상, 4자 이하로 입력해야 합니다.");
    }

    //한글,영문,숫자[\x{1100}-\x{11FF}\x{3130}-\x{318F}\x{AC00}-\x{D7AF}0-9a-zA-Z]+/u
    //if(!preg_match("/[\x{1100}-\x{11FF}\x{3130}-\x{318F}\x{AC00}-\x{D7AF}0-9a-zA-Z]+/u",$nickname))

    //특수문자 추출
    //if(preg_match("/[^\x{1100}-\x{11FF}\x{3130}-\x{318F}\x{AC00}-\x{D7AF}0-9a-zA-Z]+/u",$nickname))

    //닉네임 유효성 검사
    if(preg_match("/[^0-9a-zA-Z가-힣\x20]+/u",$nickname))
    {
        die("이름은 한글과 영문,숫자만 입력할 수 있습니다");
    }

    //이미 존재하는 닉네임인지 검사하는 부분 추가해야 함.


    //$query = mysqli_fetch_array(mysqli_query($connect, "select * from dg_member where nickname='{$nickname}'"),MYSQLI_BOTH);
    //if(count($query))
    //{
    //	die("입력하신 닉네임은 사용 중입니다.");
    //}
}



if($pwd == $repwd)
{
    $pwd = $pwd;
} else
{

    die("비밀번호가 맞지 않습니다.");
    exit;
}


if($_POST[emailCheck] != 1 || $_POST[nicknameCheck] != 1) die("1");


$pwd = hash('sha256', $pwd);
$date = date("Y-m-d H:i:s",time());

$sql = "INSERT INTO wink_member (email,nickname,password,student_no,major,birth) VALUES ('{$id}','{$nickname}','{$pwd}','{$student}','{$major}','{$date}')";
$query = mysqli_query($connect,$sql);

die("1");

function mres($a)
{
    global $connect;
    return mysqli_real_escape_string($connect,$a);
}


?>

