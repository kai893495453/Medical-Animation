function keyblur(dom,rule){
    var patt1 = new RegExp(rule,"g");
    if(!patt1.test(dom.value)){
      dom.nextElementSibling.style.display = "inline";
    }else{
      dom.nextElementSibling.style.display = "none";
    }
  }
  function reValue(dom,otherdom){
    //判断dom与otherdom的值是否相同
    //如果不相同显示提示
    if(dom.value!==otherdom.value){
      dom.nextElementSibling.style.display = "inline";
    }else{
      dom.nextElementSibling.style.display = "none";
    }
  }
  function pwdStrong(dom) {
    //密码强度等级
    //1.弱：全是数字或字母
    //2.中：数字和字母混搭
    //3.强：包含特殊字符
    var patt1 = new RegExp("([0-9]|[a-z]|[A-Z])","g");
    var patt2 = new RegExp("([a-zA-Z0-9]{6,})","g");
    var patt3 = new RegExp("([_!]+)","g");
    if(patt1.test(dom.value)){
      //弱
      document.querySelectorAll(".pwdStrong")[0].setAttribute("class","passwordTips-0 pwdStrong");
      document.querySelectorAll(".pwdStrong")[1].setAttribute("class","passwordTips-1 pwdStrong");
      document.querySelectorAll(".pwdStrong")[2].setAttribute("class","passwordTips-1 pwdStrong");
      if(patt2.test(dom.value)){
        //中
        document.querySelectorAll(".pwdStrong")[1].setAttribute("class","passwordTips-0 pwdStrong");
        document.querySelectorAll(".pwdStrong")[0].setAttribute("class","passwordTips-1 pwdStrong");
        document.querySelectorAll(".pwdStrong")[2].setAttribute("class","passwordTips-1 pwdStrong");
        if(patt3.test(dom.value)){
          //强
          document.querySelectorAll(".pwdStrong")[2].setAttribute("class","passwordTips-0 pwdStrong");
          document.querySelectorAll(".pwdStrong")[1].setAttribute("class","passwordTips-1 pwdStrong");
          document.querySelectorAll(".pwdStrong")[0].setAttribute("class","passwordTips-1 pwdStrong");
        }
      }
    }
  }