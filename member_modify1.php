<meta charset="utf-8">
<?
session_start();
$connect = mysqli_connect("localhost","super887","tn3011925","super887");
mysqli_query($connect, "set names utf8");
if(!$_SESSION["id"]){
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
$index = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM wink_member WHERE email='{$_SESSION[id]}'"),MYSQLI_BOTH);
$_POST[pw] = hash('sha256', $_POST[pw]);
if($_POST[pw] == $index[password]){
    if($_POST[gogo] == '1'){
        ?>
        <script>
            location.href='member_info.php';
        </script>
        <?
    }else if($_POST[gogo] == '2'){
        ?>
        <script>
            location.href='member_leave.php';
        </script>
        <?
    }
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

