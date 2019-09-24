<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8">
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>谋刻职业教育在线测评与学习平台</title>

    <link rel="stylesheet" href="/css/course.css"/>
    <link rel="stylesheet" href="/css/register-login.css"/>
    <script src="/js/jquery-1.8.0.min.js"></script>
    <link rel="stylesheet" href="/css/tab.css" media="screen">
    <script src="/js/jquery.tabs.js"></script>
    <script src="/js/mine.js"></script>
    <!-- InstanceEndEditable -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->

</head>

<body>

<div class="head" id="fixed">
    <div class="nav">
        <span class="navimg"><a href="index.html"><img border="0" src="/images/logo.png"></a></span>
        <ul class="nag">
            <li><a href="/index/courselist" class="link1 current">课程</a></li>
            <li><a href="/index/articlelist" class="link1">资讯</a></li>
            <li><a href="/index/teacherlist" class="link1">讲师</a></li>
            <li><a href="/index/exam_index" class="link1" target="_blank">题库</a></li>
            <li><a href="/index/askarea" class="link1" target="_blank">问答</a></li>

        </ul>
        <span class="massage">
            <!--<span class="select">
        	<a href="#" class="sort">课程</a>
        	<input type="text" value="关键字"/>
            <a href="#" class="sellink"></a>
            <span class="sortext">
            	<p>课程</p>
                <p>题库</p>
                <p>讲师</p>
            </span>
        </span>-->
            <!--未登录-->
        	<span class="exambtn_lore">
                 <a class="tkbtn tklog" href="/index/user/login">登录</a>
                 <a class="tkbtn tkreg" href="/index/user/register">注册</a>
            </span>
            <!--登录后-->
            <!--<div class="logined">
                <a href="mycourse.html"  onMouseOver="logmine()" style="width:70px" class="link2 he ico" target="_blank">sherley</a>
                <span id="lne" style="display:none" onMouseOut="logclose()" onMouseOver="logmine()">
                    <span style="background:#fff;">
                        <a href="mycourse.html" style="width:70px; display:block;" class="link2 he ico" target="_blank">sherley</a>
                    </span>
                    <div class="clearh"></div>
                    <ul class="logmine" >
                        <li><a class="link1" href="#">我的课程</a></li>
                        <li><a class="link1" href="#">我的题库</a></li>
                        <li><a class="link1" href="#">我的问答</a></li>
                        <li><a class="link1" href="#">退出</a></li>
                    </ul>
                </span>
            </div>-->

        </span>
    </div>
</div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(/images/13.jpg) right center no-repeat #fff">
    <h2>注册</h2>
    <form>
        <div>
            <p class="formrow"><label class="control-label" for="register_email">邮箱地址</label>
                <input type="text" id="email"></p>
            <span class="text-danger">请输入QQ邮箱地址</span>
        </div>
        <div>
            <p class="formrow"><label class="control-label" for="register_email">昵称</label>
                <input type="text" id="name"></p>
            <span class="text-danger">该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字</span>
        </div>
        <div>
            <p class="formrow"><label class="control-label" for="register_email">密码</label>
                <input type="password" id="pwd"></p>
            <span class="text-danger">5-20位英文、数字、符号，区分大小写</span>
        </div>
        <div>
            <p class="formrow"><label class="control-label" for="register_email">确认密码</label>
                <input type="password" id="pwd2"></p>
            <span class="text-danger">再输入一次密码</span>
        </div>
        <div class="loginbtn reg">
            <input type="button" class="uploadbtn ub1" value="注册" id="btn">
        </div>

    </form>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
<div class="foot">
    <div class="fcontainer">
        <div class="fwxwb">
            <div class="fwxwb_1">
                <span>关注微信</span><img width="95" alt="" src="/images/num.png">
            </div>
            <div>
                <span>关注微博</span><img width="95" alt="" src="/images/wb.png">
            </div>
        </div>
        <div class="fmenu">
            <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">优秀讲师</a> | <a href="#">帮助中心</a> | <a href="#">意见反馈</a> | <a href="#">加入我们</a></p>
        </div>
        <div class="copyright">
            <div><a href="/">谋刻网</a>所有&nbsp;晋ICP备12006957号-9</div>
        </div>
    </div>
</div>
<!--右侧浮动-->
<div class="rmbar">
	<span class="barico qq" style="position:relative">
	<div  class="showqq">
	   <p>官方客服QQ:<br>335049335</p>
	</div>
	</span>
    <span class="barico em" style="position:relative">
	  <img src="/images/num.png" width="75" class="showem">
	</span>
    <span class="barico wb" style="position:relative">
	  <img src="/images/wb.png" width="75" class="showwb">
	</span>
    <span class="barico top" id="top">置顶</span>
</div>
</body>

<!-- InstanceEnd --></html>
<script>
    $('#btn').click(function(){
        var email=$('#email').val();
        var name=$('#name').val();
        var pwd=$('#pwd').val();
        var pwd2=$('#pwd2').val();

        if(email==''){
            alert('邮箱不可以为空');
            return false;
        }else{
            var emailReg= /^[1-9]\d{7,10}@qq\.com$/;
            if(!emailReg.test(email)){
                alert('请输入正确的qq邮箱');
                return false;
            }

        }

        if(name==''){
            alert('用户名不能为空');
            return false;
        }else{
           var nameReg=/^([\u4e00-\u9fa5]){2,7}$/;
           var nameReg2=/^[a-zA-Z]{2,14}$/;
           if(!nameReg.test(name) && !nameReg2.test(name)){
               alert('用户名2-7个中文或2-14个英文组成');
               return false;
           }
        }

        if(pwd==''){
            alert('密码不可以为空');
            return false;
        }else{
            //5-20位英文、数字、符号，区分大小写
            var pwdReg=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{5,20}$/;
            if(!pwdReg.test(pwd)){
                alert('密码由5-20位英文、数字、符号组成');
                return false;
            }
        }

        if(pwd2==''){
            alert('密码2不可以为空');
            return false;
        }else if(pwd2!==pwd){
            alert('两次密码不一致');
            return false;
        }

        //发送ajax请求
        $.ajax({
            url:'/index/user/register_do',
            type:'post',
            data:{email:email,name:name,pwd:pwd,pwd2:pwd2},
            success:function(res){
                if(res.code==200){
                    alert(res.message);
                    location.href="/index/user/login";
                }else{
                    alert(res.message);
                    return false;
                }
            },
            dataType:'json'
        })

    })
</script>