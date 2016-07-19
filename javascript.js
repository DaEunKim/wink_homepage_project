var stepNo = 1;
var processNo = 1;
var memberNo=1;

function member_mo(){
    if(!document.modifyform.pw.value){
        alert('비밀번호를 입력하세요');
        document.modifyform.pw.focus();
    }else{
        document.modifyform.action = "member_modify_pwchk.php";
        document.modifyform.gogo.value = "1";

        document.modifyform.submit();
    }
}
function member_le(){
    if(!document.modifyform.pw.value){
        alert('비밀번호를 입력하세요');
        document.modifyform.pw.focus();
    }else{
        document.modifyform.action = "member_modify_pwchk.php";

        document.modifyform.gogo.value = "2";
        document.modifyform.submit();
    }
}



//Dropdown active function
$(function()
{
    $(".dropdown-menu").on('click', 'li a', function()
    {
        if($(this).text()!="기타")
        {
            $('#projectType').hide();
        }
        $('#projectType').val($(this).text());
        $(".btn:first-child").html($(this).text()+'<span class="caret"></span>');
    });
});
//append_list
var start=0;
var list=5;
function append_list() {
    $.post("super887.cafe24.com/act/main_content.php",{start:start,list:list},function (data) {
        $("#appendbox").append(data);
        start+=list;

    });

}


//로그인 함수
function login()
{
    /*Ajax*/
    $.post("login.php",{
        loginid:$('#email').val(),
        loginpwd:$('#pwd').val(),
    },function(e)
    {
        if(e=="1")
        {
            location.href = 'index.php';
        }
        else alert(e);
    });
    return false;
}

//comment
function dcomment()
{
    /*Ajax*/
    $.post("comment.php",{
        comment:$('#inputComment').val(),
    },function(e)
    {
        if(e=="1")
        {
            location.href = 'index.php';
        }
        else alert(e);
    });
    return false;
}



//가입 함수
function register()
{
//var a=1;
    /*Ajax*/
    $.post("register_check.php",{
        emailCheck:1,
        nicknameCheck:1,
        email:$('#inputEmail').val(),
        name:$('#inputNickname').val(),
        pass:$('#inputPass').val(),
        repass:$('#inputRepass').val(),
        major:$('#inputMajor').val(),
        student_no:$('#inputStudent_no').val(),

    },function(e)
    {
        if(e=="1")
        {
            alert("회원가입이 완료되었습니다.");
            location.href = 'index.php';
        }
        else alert(e);
    });
    return false;
}
/* 댓글
 function comment()
 {

 $.post("comment.php",{
 comment:$('#inputComment').val()

 },function(e)
 {
 if(e=="1")
 {

 }
 else alert(e);
 });
 return false;
 }*/

//프로젝트 유형 직접 입력시 텍스트박스 표시
function registerTypeView()
{
    $('#projectType').val("").show();
}

//과정 추가 함수
function addProcess()
{
    //$_POST[step][1]~
    var txt=$('#projectStepName').val();
    if(txt=="") return false;
    else
    {
        $('#projectProcessList').append('<li class="list-group-item" id="step'+stepNo+'"><span class="badge pull-left">'+
            processNo+'단계</span> &nbsp;'+txt+' <input type="hidden" name="step[]" value="'+txt+'" /><input type="button" class="pull-right" style="width:25px; height:25px; font-size:10px; border-radius:5px; background-color:white; border:1px solid #888888;" onclick="removeProcess('+
            stepNo+');" value="ㅡ" /></li>');
        stepNo++;
        processNo++;
        $('#projectStepName').val("");
    }
}

//멤버 체크 함수
function addMember()
{
//var a=1;
    var txt=$('#memberName').val();
    if(txt=="") return false;
    /*Ajax*/
    else
    {
        $.post("member_exist_check.php",{
            name:$('#memberName').val(),
        },function(e)
        {
            if(e=="1")  //멤버가 존재하면
            {
                $('#projectMemberList').append('<li class="list-group-item" id="member'+memberNo+'">'+
                    '&nbsp;'+txt+' <input type="hidden" name="members[]" value="'+txt+'" /><input type="button" class="pull-right" style="width:25px; height:25px; font-size:10px; border-radius:5px; background-color:white; border:1px solid #888888;" onclick="removeMember('+
                    memberNo+');" value="ㅡ" /></li>');
                memberNo++;
                $('#memberName').val("");
            }
            else
            {
                $('#addMemberBtn').tooltip({"trigger":"hover","title":txt+"님은 회원이 아닙니다."}).tooltip("show");
                $('#addMemberBtn').mouseleave(function(){$(this).tooltip("destroy");});
            }
        });
    }
    return false;
}

//단계 제거 함수
function removeProcess(no)
{
    $("#step"+no).remove();

    var p = 1;

    $('#projectProcessList').each(function ()
    {
        var list = $(this).find ('li span');

        $(list).each(function ()
        {
            $(this).text(p+"단계");
            p++;
        });
    });

    processNo = p;
}
//멤버 제거 함수
function removeMember(no)
{
    $("#member"+no).remove();
}

//공방 생성 함수
function createWorkshop()
{
    $.post("check_create_workshop.php",{
        "name":$('#prjName').val(),
        "description":$('#prjDescription').val(),
        "type":$('#projectType').val(),
        "step":$("#projectProcessList li input[name='step\[\]'").serialize(),
        "member":$("#projectMemberList li input[name='members\[\]'").serialize(),
        "toDate":$('#toDate').val(),
        "fromDate":$('#fromDate').val()
    },function(e){
        if(e=="1")
        {
            alert("공방 생성이 완료되었습니다.");
        }
        else
        {
            alert(e);return false;
        }
    });
    return false;
}

/*window.onload = function(){

 $(document).ready();

 $();*/


$(function()
{
    //이메일 중복검사
    $('#inputEmail').focusout(function()
    {
        if($(this).val()=="")
        {
            $('#inputEmail').css("border","1px solid silver");
            return;
        }
        $.post("register_check.php",{
            emailCheck:1,
            nicknameCheck:0,
            email:$(this).val()
        },function(e)
        {
            if(e=="1")
            {
                $('#inputEmail').css("border","1px solid green");
                $('#emailResult').html("");
            }
            else
            {
                $('#inputEmail').css("border","1px solid red");
                $('#emailResult').html(e);
            }
        });
    });

    //닉네임 중복검사
    $('#inputNickname').focusout(function()
    {
        if($(this).val()=="")
        {
            $('#inputNickname').css("border","1px solid silver");
            return;
        }
        $.post("register_check.php",{
            emailCheck:0,
            nicknameCheck:1,
            name:$(this).val()
        },function(e)
        {
            if(e=="1")
            {
                $('#inputNickname').css("border","1px solid green");
                $('#nicknameResult').html("");
            }
            else
            {
                $('#inputNickname').css("border","1px solid red");
                $('#nicknameResult').html(e);
            }
        });
    });

    //비밀번호 검사
    $('#inputRepass').focusout(function()
    {
        var pass1 = $('#inputPass').val();
        var pass2 = $('#inputRepass').val();

        if(pass1=="" || pass2=="" )
        {
            $('#inputPass').css("border","1px solid silver");
            $('#inputRepass').css("border","1px solid silver");
            return;
        }
        else
        {
            if(pass1==pass2)
            {
                $('#inputPass').css("border","1px solid green");
                $('#inputRepass').css("border","1px solid green");

            }
            else
            {
                $('#inputPass').css("border","1px solid red");
                $('#inputRepass').css("border","1px solid red");
            }
        }
    });

});

