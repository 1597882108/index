var user = $('.ipt')[0]
var pwd = $('.ipt-mm')[0]
var lgBtn = $('.res')[0]
lgBtn.onclick = function(){
    var u = user.value
    var p = pwd.value
    $.ajax({
        url:'./login.php',
        type:'POST',
        data:{
            user:u,
            pwd:p
        },
        cache:false,
        success(data){
            // alert(data)
            if(data == '登陆成功'){
                location.href = '../index/index.html'
                document.cookie = 'a =' + u
                console.log(document.cookie.a)
            }
        }
    })
}
