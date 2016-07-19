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
            border-color: rgb(238,238,238);
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
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
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
            background-image: url(http://super887.cafe24.com/wink/image/main.png);
            background-size:cover;
            background-repeat:no-repeat;
            height:950px;
        }
        .section1_mobile{
            background-image: url(http://super887.cafe24.com/wink/image/mainmobile.png);
            background-size:cover;
            background-repeat:no-repeat;
            height:500px;
        }

        .section1_desk2{
            background-image: url(http://super887.cafe24.com/wink/image/profile_back.png);
            background-size:cover;
            background-repeat:no-repeat;
            height: 300px;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px; height: 0; overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }



    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--내비 desktp&mobile-->
<nav class="navbar navbar-default navbar-fixed-top">
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
                    <li><a href="#section1">HOME</a></li>
                    <li><a href="#section2">PORTFOLIO</a></li>
                    <li><a href="#section3">ABOUT</a></li>
                    <li><a href="#section4">TEAM</a></li>
                    <li><a href="#section5">CONTACT</a></li>
                    <?
                    session_start();
                    if($_SESSION["id"])
                    {
                        ?>
                            <li><a href="./mypage.php"> My Profile</a></li>
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
<!--signup Modal -->
<div class="modal fade" id="myModal_SignUp" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sign up</h4>
            </div>
            <div class="modal-body">
                <form method="post" onsubmit="return register();">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="inputEmail"  class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="email">Name(실명):</label>
                        <input type="text" name="name" id="inputNickname" class="form-control" placeholder="Enter nickname">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password"  name="pass" id="inputPass" class="form-control"  placeholder="Enter password again">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Re Password:</label>
                        <input type="password"  name="repass" id="inputRepass" class="form-control"  placeholder="Enter password">
                    </div>

                    <div class="form-group">
                        <label for="pwd">major:</label>
                        <input type="text" name="major" id="inputMajor" class="form-control"  placeholder=" Enter major">
                    </div>

                    <div class="form-group">
                        <label for="pwd">student number:</label>
                        <input type="text" name="student_no" id="inputStudent_no"   class="form-control"  placeholder=" Enter student number">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--log in Modal -->
<div class="modal fade" id="myModal_Login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Log in</h4>
            </div>
            <div class="modal-body">
                <form method="post" onsubmit="return login();">

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="loginid" id="email" class="form-control" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="loginpwd" id="pwd" class="form-control" placeholder="Enter password">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Enter</button>
                </form>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!--
<div class="video-container">
<iframe width="560" height="315" src="https://www.youtube.com/embed/jnLSYfObARA?&loop=1&autoplay=1&controls=0&rel=0&playlist=PL3k5pscB-vYDvO24czLvdn0At_tjoxiOk" frameborder="0"></iframe>
</div>
-->
<div class="kimsooyeon hidden-xs section1_desk" id="section1">
    <p style="font-size:500px"></p>
</div>

<div class="visible-xs-block section1_mobile" id="section1">
    <p style="font-size:500px"></p>
</div>

<!--portfolio-->
<div id="section2">
    <!--black line-->
    <div style="width: 100%;background-color:black">
        <div class="container" align="center">
            <p style="color:white;font-size:20px">mouse hover please</p>
        </div>
    </div>
    <!-- image gallery-->
    <div class="container-fluid" style="padding: 0px;margin: 0px">
        <div class="row" style="padding: 0px;margin: 0px">
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a1.jpg" style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a2.jpg" style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a3.jpg" style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a4.jpg" style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="padding: 0px;margin: 0px">
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a5.jpg" style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a6.jpg"style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a7.jpg"style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a8.jpg"style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="padding: 0px;margin: 0px">
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a9.jpg" style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a10.jpg"style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a11.jpg"style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding: 0px;margin: 0px">
                <div class="hovereffect">
                    <img class="img-responsive" src="./image/a12.jpg"style="width:100%;height:300px">
                    <div class="overlay">
                        <h2>Show This WEB</h2>
                        <a class="info" href="#">link here</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--세로줄-->
<hr style="color:rgb(230,230,230); margin:0px;">
<!-- ABOUT-->
<div class="container" id="section3" >
   <div class="row" style="padding: 80px 0px 50px 0px">
      <div class="col-xs-12 col-sm-6">
          <h2>WHAT WE DO</h2>
          <strong style="color:black;">WINK의 시작은 한광수 교수님과 이경용 교수님으로부터 시작 됐습니다. 2016년 국민대학교 컴퓨터공학과 캡스톤디자인 '100조'의 멤버였던 김현우 김경동 김수연 김형준 박세희 황주현 총 6명의 독수리가 그 뒤를 이어 WINK를 만들었습니다.</strong>

          <p style="color:black;"><br>WINK는 100조의 캡스톤디자인 주제였던 오픈소스 디자인에서 시작 됩니다. WINK의 모체였던 100조는 여러가지 기술을 통해 오픈소스 디자인 홈페이지를 완벽하게 구현하였고 그 파급력으로 수 많은 독수리형제들이 모여 웹개발동아리가 되었습니다.</p>
      </div>

      <div class="col-xs-12 col-sm-6">
          <iframe width="520" height="292" src="https://www.youtube.com/embed/0uVBxcTm3lU?showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
   </div>
    <hr style="padding-bottom:50px;">
    <div class="row" style="padding: 0px 0px 80px 0px">
        <div class="col-xs-12 col-sm-6">
            <img class="img-responsive" src="./image/ourprincipal.jpg" width="520" height="292">
        </div>
        <div class="col-xs-12 col-sm-6">
            <h2>NOW,WHAT WE DO?</h2>
            <strong style="color:black;">WINK는 수 많은 독수리가 모여 모체였던 100조와는 완전히 분리, 독립된 단체를 이루었습니다. 그렇다면 WINK는 지금 무엇을 할 까요?</strong>
            <p style="color:black;"><br>WINK는 많은 것을 합니다. 웹홈페이지가 필요한 국민대 부속기관 이라면 WINK는 언제든지 달려갑니다. 다만 독수리들의 활동비를 주십시오. 자세한 사항은 아래 CONTACT US를 통해 언제든지 문의 하실 수 있습니다.</p>
        </div>
    </div>
</div>
<!--team-->
<div class="container-fluid" style="padding: 0px;margin:0px" id="section4">
    <!-- DB 접속 -->
    <?
    session_start();
    $connect = mysqli_connect("localhost","super887","tn3011925","super887");
    mysqli_query($connect, "set names utf8");
    //멤버 30명까지 불러와서 $query에 저장하는 쿼리문
    $query = mysqli_query($connect, "select * from wink_member order by no desc limit 0,30");
    ?>
    <div class="row" style="padding: 0px;margin: 0px">
        <!--한광수 교수님-->
        <div class="col-xs-6 col-sm-1" style="padding: 0px;margin: 0px">
            <div class="hovereffect">
                <img class="img-responsive eveface" src="./image/gwang.jpg">
                <div class="overlay">
                    <a class="info" data-toggle="modal" data-target="#myModal_h">한광수 교수님</a>
                </div>
            </div>
        </div>
        <!--한광수 교수님 모달-->
        <div class="modal fade" id="myModal_h" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body" style="padding:0px">
                        <div style="position: relative;">
                            <div class="kimsooyeon section1_desk2">
                            </div>
                            <div align="center" style="padding-right: 200px">
                                <img class="img-responsive img-thumbnail" style="position: absolute;width:200px;top:40%;" src="http://super887.cafe24.com/wink/image/gwang.jpg">
                            </div>
                        </div>
                        <div class="container" style="margin-top: 20px">
                            <p>이메일 : </p>
                            <p>이름 : 한광수</p>
                            <p>전공 : </p>
                            <p>자기소개 : </p>
                            <p>핸드폰번호 : </p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--이경용 교수님-->
        <div class="col-xs-6 col-sm-1" style="padding: 0px;margin: 0px">
            <div class="hovereffect">
                <img class="img-responsive eveface" src="./image/young.jpg">
                <div class="overlay">
                    <a class="info" data-toggle="modal" data-target="#myModal_l">이경용 교수님</a>
                </div>
            </div>
        </div>
        <!--이경용 교수님 모달-->
        <div class="modal fade" id="myModal_l" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body" style="padding:0px">
                        <div style="position: relative;">
                            <div class="kimsooyeon section1_desk2">
                            </div>
                            <div align="center" style="padding-right: 200px">
                                <img class="img-responsive img-thumbnail" style="position: absolute;width:200px;top:40%;" src="http://super887.cafe24.com/wink/image/young.jpg">
                            </div>
                        </div>
                        <div class="container" style="margin-top: 20px">
                            <p>이메일 : </p>
                            <p>이름 : 이경용</p>
                            <p>전공 : </p>
                            <p>자기소개 : </p>
                            <p>핸드폰번호 : </p>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?
            while($ret = mysqli_fetch_array($query,MYSQLI_BOTH))
            {
                if(!$ret[upload_filename]){
        ?>
                    <!--프사 올리지 않은 회원-->
                    <div class="col-xs-6 col-sm-1" style="padding: 0px;margin: 0px">
                        <div class="hovereffect">
                            <img class="img-responsive eveface" src="./image/dump_profile.png">
                                <div class="overlay">
                                    <a class="info"><?=$ret['nickname']?></a>
                                </div>
                        </div>
                    </div>
            <?}else{?>
                <!--프사 올린 회원-->
                <div class="col-xs-6 col-sm-1" style="padding: 0px;margin: 0px">
                    <div class="hovereffect">
                        <img class="img-responsive eveface" src="http://super887.cafe24.com/wink/image_view.php?no=<?=$ret[no]?>">
                            <div class="overlay">
                                <a class="info"  data-toggle="modal" data-target="#myModal<?=$ret[no]?>"><?=$ret[nickname]?></a>
                            </div>
                    </div>
                    <div class="modal fade" id="myModal<?=$ret[no]?>" role="dialog">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body" style="padding:0px">
                                    <div style="position: relative;">
                                        <div class="kimsooyeon section1_desk2">
                                        </div>
                                        <div align="center" style="padding-right: 200px">
                                            <img class="img-responsive img-thumbnail" style="position: absolute;width:200px;top:40%;" src="http://super887.cafe24.com/wink/image_view.php?no=<?=$ret[no]?>">
                                        </div>
                                    </div>
                                    <div class="container" style="margin-top: 20px">
                                        <p>이메일 : <?=$ret[email]?></p>
                                        <p>이름 : <?=$ret[nickname]?></p>
                                        <p>전공 : <?=$ret[major]?></p>
                                        <p>자기소개 : <?=$ret[description]?></p>
                                        <p>핸드폰번호 : <?=$ret[phone_number]?></p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?}?>
    <?}?>
    </div>
</div>


<!--contact-->
<div class="container" id="section5" >
    <div class="row" style="padding: 80px 0px 50px 0px">
        <div class="col-xs-12 col-sm-6">
            <h2>CONTACT US</h2>
            <strong style="color:black;"></strong>
            <p style="color:black;">WINK는 항상 열려 있습니다. 언제든지 옆에 있는 문의하기 칸을 통해 문의 하실 수 있습니다. 뿐만 아니라 아래 소셜네트워크와 전화번호를 통해서도 연락하실 수 있습니다.</p>
            <hr>
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <form role="form">
                <div class="form-group">
                    <label for="email">NAME:</label>
                    <input type="email" class="form-control" id="email" placeholder="Your Name...">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Your email...">
                </div>
                <div class="form-group">
                    <label for="pwd">PHONE:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Your Telephone... ">
                </div>
                <div class="form-group">
                    <label for="comment">MESSAGE:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
     </div>
</div>

<!--footer-->
<footer>
        <div class="row">
            <ul>
                <li>ABOUT</li>
                <li>BLOG</li>
                <li>FORUMS</li>
                <li>API</li>
                <li>ADVERTISE</li>
                <li>HELP</li>
                <li>TERMS</li>
                <li>PRIVACY</li>
            </ul>
        </div>
        <div class="row" style="margin-left:20px;">
            <div style="float:left">
                <img src="./image/winklogo.jpg" width="30px">
            </div>
            <div>
                <p style="color:darkgray;font-size:6px;margin-left:40px;">© 2010-2016 trakt, inc. All rights reserved.<br>Hand crafted in San Diego and the Bay Area.</p>
            </div>
        </div>


    </footer>
<!--javascript-->
<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

<style>
    .logo{
        position: fixed;
    }

    .box{
        position: absolute;
        backgroud-color:rgba(255,255,255,0.1)
        padd
    }
</style>

<div class="logo">
    <img src="">
</div>

<div class="box">
    <p>sadhjfgsadf</p>
</div>


</body>
</html>