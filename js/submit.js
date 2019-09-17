var mainResult = 1;  //全局变量，用于最终判断能否提交

function submit(){
    result();
    if(mainResult){
        var confirmAgain = confirm("一经提交，不可修改！您确定要提交吗？");
        if(confirmAgain == true){
            pack();  //Json打包数据
            var url= "php/index.php";//与后台index.php连接

            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }else{
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            if(xmlhttp){
                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                        alert(xmlhttp.responseText);
                    }
                };
                xmlhttp.open("POST",url,true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send(team);
            }else{
                alert("Your browser does not support XMLHTTP.");
            }
        }
    }else{
        alert("亲亲，您填写的信息有误哦，这边建议您仔细核对后再提交呢。")
    }
}

function result(){
    var nameErr = document.getElementById('nameErr').innerHTML;
    var classesErr = document.getElementById("classesErr").innerHTML;
    var phoneErr = document.getElementById('phoneErr').innerHTML;
    var prefer1Err = document.getElementById('prefer1Err').innerHTML;
    var introductionErr = document.getElementById('introductionErr').innerHTML;
    var hobbyErr = document.getElementById("hobbyErr").innerHTML;
    var regulateErr = document.getElementById("regulateErr").innerHTML;

    if(nameErr=="√" && classesErr=="√" && phoneErr=="√" && prefer1Err=="√" && introductionErr=="√" && hobbyErr=="√" && regulateErr=="√"){
        mainResult=1;
    }else{
        mainResult=0;
    }
    console.log(mainResult);
}