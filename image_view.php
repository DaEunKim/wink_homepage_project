<?
if(!$_GET || $_POST) die();



session_start();
$connect = mysqli_connect("localhost","super887","tn3011925","super887");
mysqli_query($connect, "set names utf8");

$no = intval($_GET[no]);
//파일 정보를 가져온다.

$file = mysqli_fetch_array(mysqli_query($connect, "select * from wink_member where no = {$no} "),MYSQLI_BOTH);
if(!$file) die("삭제된 파일입니다.");

//폴더 경로 get

$folderName = "img/workshop/".md5("dg");
$imageName = md5($file[upload_filename]);



if($_GET[d] == 0 && preg_match("/stl/si",$file[file_type]))
{
    ?>
    <script src="js/Three.js"></script>
    <script src="js/plane.js"></script>
    <script src="js/thingiview.js"></script>
    <script>
        window.onload = function() {
            thingiurlbase = "js";
            thingiview = new Thingiview("viewer");
            thingiview.setObjectColor('#C0D8F0');
            thingiview.initScene();
            thingiview.loadSTL('<?="../".$folderName."/".$imageName?>');
        }
    </script>
    <body>
    <center>
        <div id="viewer" style="width:100%;height:100%;"></div>
    <?
}
else if($_GET[d] == 0 && preg_match("/pdf/si",$file[file_type]))
{
    echo file_get_contents("img/document/ai.png");
}
else
{
    //다운 설정일 경우 readfile로 대체
    if($_GET[d]==1)
    {
        header("Content-disposition: attachment; filename=\"".basename($file[upload_filename]). "\"");
        readfile($folderName."/".$imageName);
        echo "<script>history.back();</script>";
    }
    else echo file_get_contents($folderName."/".$imageName);
}

?>