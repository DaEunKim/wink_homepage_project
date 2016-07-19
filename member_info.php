<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://super887.cafe24.com/wink/js/javascript.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

<script>
    function modifyinfocheck(){
        if(!document.modifyinfoform.pw.value){
            alert('비밀번호를 입력하세요');
            document.modifyinfoform.pw.focus();
            return false;
        }else if(!document.modifyinfoform.pw2.value){
            document.modifyinfoform.pw2.value = document.modifyinfoform.pw.value;
            document.modifyinfoform.pw3.value = document.modifyinfoform.pw.value;
        }else if(document.modifyinfoform.pw2.value.match(/[^0-9a-zA-Z_]/) != null || document.modifyinfoform.pw2.value.length<7){
            alert('비밀번호를 변경하려면\n\n변경하실 비밀번호를 입력해주세요\n\n변경하실 비밀번호는 최소 8자리 이상\n\n공백없이 입력해주세요\n\n(영문, 숫자, _ 사용)');
            document.modifyinfoform.pw2.focus();
            return false;
        }else if(document.modifyinfoform.pw2.value != document.modifyinfoform.pw3.value){
            alert('변경하실 비밀번호를 다시 입력해 주세요');
            document.modifyinfoform.pw3.value = "";
            document.modifyinfoform.pw3.focus();
            return false;
        }else if(!document.modifyinfoform.name.value){
            alert('사용하실 별칭을 입력해주세요');
            document.modifyinfoform.name.focus();
            return false;
        }else if(!document.modifyinfoform.email.value || document.modifyinfoform.email.value.indexOf ('@') == -1 || document.modifyinfoform.email.value.indexOf ('.') == -1){
            alert('사용하시는 이메일을 입력해주세요');
            document.modifyinfoform.email.focus();
            return false;
        }else if(!document.modifyinfoform.description.value){
            alert('자기소개를 입력해주세요');
            document.modifyinfoform.description.focus();
            return false;
        }else if(!document.modifyinfoform.phone_number.value){
            alert('핸드폰 번호를 입력해주세요');
            document.modifyinfoform.phone_number.focus();
            return false;
        }
        return true;
    }
</script>

</head>
<body>
<?
session_start();
$connect = mysqli_connect("localhost","super887","tn3011925","super887");
mysqli_query($connect, "set names utf8");
if(!$_SESSION['id']){
    ?>
    <script>
        alert('1로그인 정보가 없는 상태입니다.');
        history.back();
    </script>
    <?
}
$index = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM wink_member WHERE email='{$_SESSION[id]}'"),MYSQLI_BOTH);

?>

    <form action="member_info_chk.php" method="post" onsubmit="return modifyinfocheck();" name="modifyinfoform">
        <table>
            <tr>
                <td colspan="2">회원정보수정
            <tr>
                <td>비밀번호 확인
                <td align="left"><input type="password" name="pw">
            <tr>
                <td>변경할 비밀번호
                <td align="left"><input type="password" name="pw2">
            <tr>
                <td>변경할 비밀번호 확인
                <td align="left"><input type="password" name="pw3">
            <tr>
                <td>닉네임
                <td align="left"><input type="text" name="name" size="10" maxlength="20" value="<?=$index[nickname]?>">
            <tr>
                <td>이메일주소
                <td align="left"><input type="text" name="email" value="<?=$index[email]?>">
            <tr>
                <td>자기소개
                <td align="left"><input type="text" name="description" value="<?=$index[description]?>">
            <tr>
                <td>핸드펀 번호
                <td align="left"><input type="text" name="phone_number" value="<?=$index[phone_number]?>">
            <tr>
                <td colspan="2"><input type="submit" value="수정하기">
                    <input type="reset" value="다시입력">
        </table>
    </form>

</body>
</html>