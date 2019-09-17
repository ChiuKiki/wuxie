//json打包数据
function pack(){
    var name = document.getElementById("name").value;
    var classes = document.getElementById("classes").value;
    var phone = document.getElementById("phone").value;
    var prefer1 = document.getElementById("prefer1").value;
    var prefer2 = document.getElementById("prefer2").value;
    var introduction = document.getElementById("introduction").value;
    var hobby = document.getElementById("hobby").value;
    var regulate = document.getElementById("regulate").value;
    var team_json ={
        "name":name,
        "classes":classes,
        "phone":phone,
        "prefer1":prefer1,
        "prefer2":prefer2,
        "introduction":introduction,
        "hobby":hobby,
        "regulate":regulate
    };
 team = JSON.stringify(team_json);
console.log(team);
}