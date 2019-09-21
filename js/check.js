//检查姓名是否正确
function checkName(str){
    var checkName = /^[\u4E00-\u9FA5\uF900-\uFA2D]+$/;
    var result = checkName.test(str);
    var nameErr = document.getElementById("nameErr");
    if(result == false){
        document.getElementById("nameErr").innerHTML = "请输入中文名！";
        nameErr.setAttribute("class","error");
        mainResult = 0;
    }else{
        document.getElementById("nameErr").innerHTML = "√";
        nameErr.setAttribute("class","pass");
    }
}

//检查性别是否正确
function checkGender(str){
    var checkGender = /^男$|^女$/;
    var result = checkGender.test(str);
    var genderErr = document.getElementById("genderErr");
    if(result == false){
        document.getElementById("genderErr").innerHTML = "性别不对哦！";
        genderErr.setAttribute("class","error");
        mainResult = 0;
    }else{
        document.getElementById("genderErr").innerHTML = "√";
        genderErr.setAttribute("class","pass");
    }
}

//检查班级是否为空
function checkClass(str){
    var checkClass = /\S/;
    var result = checkClass.test(str);
    var classesErr = document.getElementById("classesErr");
    if(result == false){
        document.getElementById("classesErr").innerHTML = "请输入班级！";
        classesErr.setAttribute("class","error");
        mainResult = 0;
    }else{
        document.getElementById("classesErr").innerHTML = "√";
        classesErr.setAttribute("class","pass");
    }
}

//检查手机号是否正确(11位数字&开头第一位是1&第二位是3~9)
function checkPhone(str){
    var checkphone = /^1([3-9])[0-9]{9}$/;
    var result = checkphone.test(str);
    var phoneErr = document.getElementById("phoneErr");
    if(result == false){
        document.getElementById("phoneErr").innerHTML = "手机号错误！";
        phoneErr.setAttribute("class","error");
        mainResult = 0;
    }else{
        document.getElementById("phoneErr").innerHTML = "√";
        phoneErr.setAttribute("class","pass");
    }
}

//检查第一志愿是否已选
function checkPrefer1(str) {
    var prefer1 = document.getElementById("prefer1");
    var prefer1Err = document.getElementById("prefer1Err");
    var value = prefer1.value;
    if(value){
        document.getElementById("prefer1Err").innerHTML = "√";
        prefer1Err.setAttribute("class","pass");
    }else{
        document.getElementById("prefer1Err").innerHTML = "请选择一个部门！";
        prefer1Err.setAttribute("class","error");
        mainResult = 0;
    }
}

//检查服从调剂是否已选
function checkRegulate(str) {
    var regulate = document.getElementById("regulate");
    var regulateErr = document.getElementById("regulateErr");
    var value = regulate.value;
    if(value){
        document.getElementById("regulateErr").innerHTML = "√";
        regulateErr.setAttribute("class","pass");
    }else{
        document.getElementById("regulateErr").innerHTML = "这个必选哦！";
        regulateErr.setAttribute("class","error");
        mainResult = 0;
    }
}

//检查自我介绍是否为空
function checkIntroduction(str){
    var checkIntroduction = /\S/;
    var result = checkIntroduction.test(str);
    var introductionErr = document.getElementById("introductionErr");
    console.log(str);
    if(result == false){
        document.getElementById("introductionErr").innerHTML = "请填写自我介绍！";
        introductionErr.setAttribute("class","error");
        mainResult = 0;
    }else{
        document.getElementById("introductionErr").innerHTML = "√";
        introductionErr.setAttribute("class","pass");
    }
}

//检查个人特长是否为空
function checkHobby(str){
    var checkHobby = /\S/;
    var result = checkHobby.test(str);
    var hobbyErr = document.getElementById("hobbyErr");
    if(result == false){
        document.getElementById("hobbyErr").innerHTML = "请填写个人特长！";
        hobbyErr.setAttribute("class","error");
        mainResult = 0;
    }else{
        document.getElementById("hobbyErr").innerHTML = "√";
        hobbyErr.setAttribute("class","pass");
    }
}

