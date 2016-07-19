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