<html>
<head>
    <title>project</title>
</head>
<style>
    h1
    { text-align:center;
      font-size:40px;
    }
    h2{
        padding-left: 0pt;
        font-size: 25px;
    }
    h3{
        padding-right: 0pt;
        font-size: 25px;
    }
    .box1
    {   display: inline-block; 
        background:blanchedalmond;
        width: 500px;
        height: 200px;
        margin-left: 80pt;
        padding-left: 50pt;
    }
    .box2
    {   display:inline-block;
        background:blanchedalmond;
        width: 450px;
        height: 200px;
        float: right;
 
    }
</style>
    <body style="background-color:blanchedalmond">
        <br>
        <h1>ATTENDENCE SYSTEM</h1>
<br>
<div>
    <div id="inline" class="box1">
        <br><br>
        <h2>ADMIN LOGIN</h2>
        
        <form method="post" action="admin_check.php">
        Admin id <input type="text" name="id">
        <br><br>
        Password<input type="password" name="pass">
        <br><br>
        <input type="submit" name="insert" value="SIGN IN"></form>
    </div>
    <div class="box2">
           <br><br>
           <h3>EMPLOYEE LOGIN</h3>
            Employee id<input type="text" name="id">
            <br><br> 
            Password &nbsp;&nbsp;&nbsp;<input type="password" name="pass">
            <br><br>
            <input type="submit" name="insert" value="SIGN IN">
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="new_employee.php">Create Account?</a>
            
    </div>
 </div>   
    </body>
</html>