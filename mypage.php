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
    <!--css-->
    <style>
        .eveface{
            width: 100%;
        }
        .social {
            margin: 0;
            padding: 0;
        }
        .social ul {
            margin: 0;
            padding: 5px;
        }
        .social ul li {
            margin: 5px;
            list-style: none outside none;
            display: inline-block;
        }
        .social i {
            width: 40px;
            height: 40px;
            color: #FFF;
            background-color: black;
            font-size: 22px;
            text-align:center;
            padding-top: 12px;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            -o-border-radius: 50%;
            transition: all ease 0.3s;
            -moz-transition: all ease 0.3s;
            -webkit-transition: all ease 0.3s;
            -o-transition: all ease 0.3s;
            -ms-transition: all ease 0.3s;
        }
        .social i:hover {
            color: #FFF;
            text-decoration: none;
            transition: all ease 0.3s;
            -moz-transition: all ease 0.3s;
            -webkit-transition: all ease 0.3s;
            -o-transition: all ease 0.3s;
            -ms-transition: all ease 0.3s;
        }

        label{
            font-family: Montserrat, sans-serif;
            color:black;
            size:5px;
        }
        body {
            position: relative;
            font: 400 15px Lato, sans-serif;
            line-height: 1.8;
            color: #818181;
            overflow-x: hidden;
        }

        .navbar-default {
            background-color: white;
            border-color: lightgray;
            font-family: Montserrat, sans-serif;
        }
        .navbar-default .navbar-brand {
            color: black;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: black;
        }
        .navbar-default .navbar-nav > li > a {
            color: lightgray;
            font-size:12px;
            letter-spacing: 4px;
            margin-top: 24px;
            margin-right: 20px;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: ;
        }

        .navbar-default .navbar-nav > .active{
            color: black;
            background: white;
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: black;
            background-color: white;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
            color: black;
            background-color: white;
        }
        .navbar-default .navbar-nav > .dropdown > a .caret {
            border-top-color: #ffffff;
            border-bottom-color: #ffffff;
        }
        .navbar-default .navbar-nav > .dropdown > a:hover .caret,
        .navbar-default .navbar-nav > .dropdown > a:focus .caret {
            border-top-color: #8a0e0b;
            border-bottom-color: #8a0e0b;
        }
        .navbar-default .navbar-nav > .open > a .caret,
        .navbar-default .navbar-nav > .open > a:hover .caret,
        .navbar-default .navbar-nav > .open > a:focus .caret {
            border-top-color: #8a0e0b;
            border-bottom-color: #8a0e0b;
        }
        .navbar-default .navbar-toggle {
            border: solid 1px black;
            margin-top: 35px;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: lightgray;
        }
        .navbar-default .navbar-toggle .icon-bar {
            background-color: black;
        }



        @media (max-width: 480px) {
            #row1 p,#row2 h1{
            }

            #row1 h2,#row2 h2{
            }
        }


        footer {
            background-color: black;
            color: white;
            padding: 20px 0px 15px 0px;
            overflow-x: hidden;
        }

        footer li{
            display: inline;
            margin: 10px 20px 10px 0px;
        }

        footer li:hover{
            color:gainsboro;
        }
        input[type=text] {
            width: 100%;
            padding: 12px 2px;
            margin:0px;
            box-sizing: border-box;
        }

        .hovereffect {
            overflow: hidden;
            text-align: center;
            cursor: default;
            position: absolute;
            left: 47%;
            top: 180px;
            z-index: 1;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all 0.4s ease-in;
            transition: all 0.4s ease-in;
        }

        .hovereffect:hover img {
            filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
            filter: grayscale(1) blur(3px);
            -webkit-filter: grayscale(1) blur(3px);
            -webkit-transform: scale(1.2);
            -ms-transform: scale(1.2);
            transform: scale(1.2);
        }

        .hovereffect h2 {
            text-transform: uppercase;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            border: 1px solid #fff;
            margin: 50px 0 0 0;
            background-color: transparent;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect a.info, .hovereffect h2 {
            -webkit-transform: scale(0.7);
            -ms-transform: scale(0.7);
            transform: scale(0.7);
            -webkit-transition: all 0.4s ease-in;
            transition: all 0.4s ease-in;
            opacity: 0;
            filter: alpha(opacity=0);
            color: #fff;
            text-transform: uppercase;
        }

        .hovereffect:hover a.info, .hovereffect:hover h2 {
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        h2{
            font-family: Montserrat, sans-serif;
            color:black;
        }

        iframe{
            max-width: 100%;
        }
        .winklogo{
            margin:8px 0px 11px 8px;
            width:80px;
        }

        .section1_desk{
            background-image: url(http://super887.cafe24.com/wink/image/pageback.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            height: 300px;
            margin-top: 0px;
            padding-top: 110px;
        }
        .section1_mobile{
            background-image: url(http://super887.cafe24.com/wink/image/mainmobile.png);
            background-size:cover;
            background-repeat:no-repeat;
            height:950px;
        }

        .back{
            background-image: url(http://super887.cafe24.com/wink/image/pageback.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            height:300px;
        }

        .imgbrand_mobile {
            position: absolute;
            left: 38%;
            top: 180px;
            z-index: 1;
        }
        .imgbrand_desk {


        }

        .section1_desk{
            background-image: url(http://super887.cafe24.com/wink/image/pageback.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            margin:auto;
            width: 600px;
            height:170px;

        }
        .section1_mobile{
            background-image: url(http://super887.cafe24.com/wink/image/pageback.jpg);
            background-size:cover;
            background-repeat:no-repeat;
            height:170px;
        }



    </style>
    <script>
        $.fn.setPreview = function(opt){
            "use strict"
            var defaultOpt = {
                inputFile: $(this),
                img: null,
                w: 200,
                h: 200
            };
            $.extend(defaultOpt, opt);

            var previewImage = function(){
                if (!defaultOpt.inputFile || !defaultOpt.img) return;

                var inputFile = defaultOpt.inputFile.get(0);
                var img       = defaultOpt.img.get(0);

                // FileReader
                if (window.FileReader) {
                    // image 파일만
                    if (!inputFile.files[0].type.match(/image\//)) return;

                    // preview
                    try {
                        var reader = new FileReader();
                        reader.onload = function(e){
                            img.src = e.target.result;
                            img.style.width  = defaultOpt.w+'px';
                            img.style.height = defaultOpt.h+'px';
                            img.style.display = '';
                        }
                        reader.readAsDataURL(inputFile.files[0]);
                    } catch (e) {
                        // exception...
                    }
                    // img.filters (MSIE)
                } else if (img.filters) {
                    inputFile.select();
                    inputFile.blur();
                    var imgSrc = document.selection.createRange().text;

                    img.style.width  = defaultOpt.w+'px';
                    img.style.height = defaultOpt.h+'px';
                    img.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(enable='true',sizingMethod='scale',src=\""+imgSrc+"\")";
                    img.style.display = '';
                    // no support
                } else {      }
            };
            // onchange
            $(this).change(function(){
                previewImage();
            });
        };
        $(document).ready(function(){
            var opt = {
                img: $('#img_preview'),
                w: 200,
                h: 200
            };
            $('#upload').setPreview(opt);
        });
    </script>
</head>
<body style="background-color: rgb(238,238,238); ">
<nav class="navbar navbar-default" style="margin-bottom: 0px;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
                <span class="icon-bar" ></span>
                <span class="icon-bar" ></span>
                <span class="icon-bar" ></span>
            </button>
            <a href="./index.php"><img class="winklogo" src="./image/winklogo.jpg" ></a>
        </div>

        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="./index.php">HOME</a></li>
                    <?
                    session_start();
                    if($_SESSION["id"])
                    {
                        ?>
                        <li><a href="#" data-toggle="modal" data-target="#myModal_profile"> My Profile</a></li>
                        <li><a href="#"><?= $_SESSION["nick"] ?>님 환영합니다. <span class="glyphicon glyphicon-log-out" onclick="location.href='logout.php'" ></span></a></li>
                    <?} else {?>
                        <li><a href="#" data-toggle="modal" data-target="#myModal_SignUp"><span class="glyphicon glyphicon-user"  data-toggle="modal" data-target="#myModal_SignUp"></span> Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal_Login"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myModal_Login"></span> Login</a></li>
                    <?}?>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="hidden-xs kimsooyeon section1_desk" style="background-color: white;border: solid 1px lightgray;">
    <p style="font-size:500px"></p>
</div>
<div class="visible-xs kimsooyeon section1_mobile" style="background-color: white;border: solid 1px lightgray;">
    <p style="font-size:500px"></p>
</div>

<div class="container" align="center" style="padding: 0px">
    <div class="well" style="max-width: 600px;border-top-left-radius: 0px;border-top-right-radius: 0px;background-color:white" align="left">
        <?
        $connect = mysqli_connect("localhost","super887","tn3011925","super887");
        mysqli_query($connect, "set names utf8");
        $index = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM wink_member WHERE email='{$_SESSION[id]}'"),MYSQLI_BOTH);
        ?>
        <p>E-mail : <?=$index['email']?></p>
        <p>이름 : <?=$index['nickname']?></p>
        <p>전공 : <?=$index['major']?></p>
        <p>자기소개 : <?=$index['description']?></p>
        <p>핸드폰 번호 : <?=$index['phone_number']?></p>
        <div align="center">
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">정보 수정하기</button>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">비밀번호 확인</h4>
            </div>
            <div class="modal-body">
                <form method="post" name="modifyform">
                    <input type="hidden" value="" name="gogo">비밀번호
                    <input type="password" name="pw">

<!--<input type="button" value="회원탈퇴하기" onclick="member_le()">&nbsp 탈퇴하시려면 여기를 클릭하세요-->
            </div>
            <div class="modal-footer">
                <button type="button" onclick="member_mo()" class="btn btn-default">회원정보 수정</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>

            </div>
        </div>

    </div>
</div>


<?
$profile = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM wink_member WHERE email='{$_SESSION[id]}'"),MYSQLI_BOTH);
if(!$profile[upload_filename]){
?>
<div class="hovereffect" >
    <img class="img-thumbnail" src="./image/dump_profile.png" style="width:100px"  >
    <div class="overlay">
        <a data-toggle="modal" data-target="#myModal2" class="info" href="#" style="font-size:6px;color:black">프사 바꾸기</a>
    </div>
</div>
<?}else{?>
<div class="hovereffect">
    <img class="img-thumbnail" src="http://super887.cafe24.com/wink/image_view.php?no=<?=$profile[no]?>" style="width:100px"  >
    <div class="overlay">
        <a data-toggle="modal" data-target="#myModal2" class="info" href="#" style="font-size:6px;color:black">프사 바꾸기</a>
    </div>
</div>
<?}?>




<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">프사 바꾸기</h4>
            </div>
            <div class="modal-body">
                <form  action="upload_check.php" method="post" role="form" enctype="multipart/form-data">

                    <div class="file-field input-field">
                        <label for="upload">이미지 파일(사진이름양식:학번+이름 ex:20103325개똥이):</label>
                        <input type="file" id="upload" name="upload"/>
                    </div>

                    <br>
                    <img id="img_preview" style="display:none;"/><!--미리보기 이미지가 나오는 부분-->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">프사 바꾸기</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>

    </div>
</div>



<script>
    function member_mo(){
        if(!document.modifyform.pw.value){
            alert('비밀번호를 입력하세요');
            document.modifyform.pw.focus();
        }else{
            document.modifyform.action = "member_modify1.php";
            document.modifyform.gogo.value = "1";

            document.modifyform.submit();
        }
    }
    function member_le(){
        if(!document.modifyform.pw.value){
            alert('비밀번호를 입력하세요');
            document.modifyform.pw.focus();
        }else{
            document.modifyform.action = "member_modify1.php";

            document.modifyform.gogo.value = "2";
            document.modifyform.submit();
        }
    }
</script>
</body>
</html>