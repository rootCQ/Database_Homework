	function $(id) {
	    return document.getElementById(id);
	}
	
	function check() {
		var password = $("password").value;
		
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
	}