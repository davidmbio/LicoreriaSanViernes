<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SanViernes- AdminLogin -</title>
    <link rel="stylesheet" href="../../../web/css/login-admin.css" type="text/css" />
    <script src="../../../web/js/jquery.js"/>
    
    <script language="javascript" type="text/javascript">	
	function Logear(){
		var str = $("#FLogin").serialize();
		$.ajax({
			url: '../model/Accesso.php',
			data: str,
			type: 'POST',
			success: function(data){
                            if(data != ""){
                                if(data==1)
                                    Accedido();
                                else
                                    alert(data);
                                }
			}
		});
	};
        
        function Accedido() {
            location.href='index.php';
        } 
        setTimeout ("Accedido()", 20000);
    </script>


</head>
<body class="login">
    <div class="loginbox radius">
    <h2 style="color:#FFF; text-align:center">Licoreria San-Viernes</h2>
            <div class="loginboxinner radius">        
            <div class="loginform">
                    <form method="post" id="FLogin" >
                    <p>
                        <label for="username" class="bebas">Usuario:</label>
                        <input type="text" id="username" name="username" value="" class="radius2" />
                    </p>
                    <p>
                        <label for="password" class="bebas">Contrase&ntilde;a</label>
                        <input type="password" id="password" name="password"  class="radius2" />
                    </p>
                    <p>
                        <button class="radius title" name="client_login">Login</button>
                    </p>
                    <p>
                        <button class="radius title" name="client_login">Cancel</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
