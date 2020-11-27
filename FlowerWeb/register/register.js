var user = $('.ipt')[0]
var yzm = $('.ipt_')[0]
var pwd = $('.pwd')[0]
var btn = $('.res')[0]
var us=false
var yz=false
var up=false

//账号输入框失去焦点事件
var form = $('.res-box')[0]
user.onblur = function(){
    var val = this.value
    var reg = /^1[3456789]\d{9}$/
    if(reg.test(val)){
        us = true
        this.nextElementSibling.innerHTML = '√'
        this.nextElementSibling.style.color = 'green'
    }else{
        us = false
        this.nextElementSibling.innerHTML = '手机号输入错误，请重新输入'
        this.nextElementSibling.style.color = 'red'
        this.focus()
    }
}

//验证码输入框失去焦点事件
yzm.onblur = function (){
    var val = this.value
    var reg = /^\d{6}$/
    if(reg.test(val)){
        yz = true
        this.nextElementSibling.innerHTML = '√'
        this.nextElementSibling.style.color = 'green'
    }else{
        yz=false
        this.nextElementSibling.innerHTML = '请输入正确的六位验证码'
        this.nextElementSibling.style.color = 'red'
        this.focus()
    }
}


//密码框失去焦点事件
pwd.onblur = function(){
    var val = this.value
    var reg = /^[0-9a-zA-Z\d_]{6,16}$/
    if(reg.test(val)){
        up = true
        this.nextElementSibling.innerHTML = '√'
        this.nextElementSibling.style.color = 'green'
    }else{
        up=false
        this.nextElementSibling.innerHTML = '请设置数字字母下划线6-16位密码'
        this.nextElementSibling.style.color = 'red'
        this.focus()
    }
}


//点击注册按钮的点击事件
btn.onclick = function(){
    alert("注册成功")
    // if(!(user && pwd)){
    //     console.log(user,yzm,pwd)
    //     alert('请重新输入')
    //     return
    // }
    location.href='../login/login.html'
    // var u = user.value
    // // var y = yzm.value
    // var p = pwd.value
    // $.ajax({
    //     url:'register.php',
    //     type:'POST',
    //     data:{
    //         user:u,
    //         // yzm:y,
    //         pwd:p
    //     },
    //     cache:false,
    //     success(data){
    //         // alert(data)
    //         if(data == '注册成功') location.href='../login/login.html'
    //     }
    // })
}
