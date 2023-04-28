<html>
    <head>
        <title> user login and registration </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="Stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


</head> 

<body>
    <h2> Login</h2>
<form name="loginform" action="validation.php" method="post">       
Username:<input name="userID" type="text"  autocomplete="off" /><br/><br/>
Password:<input name="pass" type="password" autocomplete="off" />


<br/>
<br/>
<input name="" type="submit" value="login" />
</form autocomplete="off" >

 <h2> register here</h2>

<form action="registration.php" method="post">
                    
                        <label>username</label>
                        <input type= "text" name="user" class="for-control" required><br/><br/>
                        <label>name</label>
                        <input type= "text" name="name" class="for-control" required><br/><br/>
                        <label>address</label>
                        <input type= "text" name="address" class="for-control" required><br/><br/>
                        <label>licenseno</label>
                        <input type= "int" name="licenseno" class="for-control" required><br/><br/>
                    <label>password</label>
                    <input type= "password" name="password" class="for-control" required><br/><br/>
                    <buttom type="submit" class="btn btn-primary"> register </button> 
                </form>

</body>

</html>        
