	function $(id) {
	    return document.getElementById(id);
	}

	function check() {
		var password = $("password").value;
        var pwd = $("pwd").value;
        
        if(password == "") {
            alert("密码不能为空");
            $("password").focus();
            return false;
        }
        if(password.length < 6) {
            alert("密码长度必须为6-16位");
            $("password").focus();
            return false;
        }
        if(pwd != password) {
            alert("您两次输入的密码不一致！");
            $("pwd").focus();
            return false;
        }
	}