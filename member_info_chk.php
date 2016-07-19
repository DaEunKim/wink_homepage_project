<meta charset="utf-8">
<?
session_start();
$connect = mysqli_connect("localhost","super887","tn3011925","super887");
mysqli_query($connect, "set names utf8");
if(!$_SESSION['id']){
    ?>
    <script>
        alert('로그인 정보가 없는 상태입니다.');
        history.back();
    </script>
    <?
}

if(!$_POST[pw]){
    ?>
    <script>
        alert("비밀번호를 입력해 주세요.");
        history.back();
    </script>
    <?
    exit;
}
if($_POST[pw2] != $_POST[pw3]){
    ?>
    <script>
        alert("비밀번호를 확인해 주세요.");
        history.back();
    </script>
    <?
    exit;
}
if(!$_POST[name]){
    ?>
    <script>
        alert("변경하실 닉네임을 입력해 주세요.");
        history.back();
    </script>
    <?
    exit;
}
if(!$_POST[email]){
    ?>
    <script>
        alert("변경하실 이메일을 입력해 주세요.");
        history.back();
    </script>
    <?
    exit;
}
$index = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM wink_member WHERE email='{$_SESSION[id]}'"),MYSQLI_BOTH);
$_POST[pw] = hash('sha256', $_POST[pw]);

if($_POST[pw] == $index[password]){
    $_POST[pw2] = hash('sha256', $_POST[pw2]);
    $id= $_SESSION[id];

    $query = "update wink_member set nickname='{$_POST[name]}', email='{$_POST[email]}',password='{$_POST[pw2]}',description='{$_POST[description]}',phone_number='{$_POST[phone_number]}' where email= '{$id}' ";
    $ret = mysqli_fetch_array(mysqli_query($connect, $query), MYSQLI_BOTH);
    ?>

    <script>
        alert("회원정보가 수정 되었습니다.");
        location.href="mypage.php";
    </script>
    <?
}else{
    ?>
    <script>
        alert("비밀번호가 일치하지않습니다.");
        history.back();
    </script>
    <?
    exit;
}
?>