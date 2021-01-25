<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="utf-8">  
    <title>Login Page</title> 
<style>
body{
    margin: 0;
    padding: 0;
    background-image: url('images/background.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    font-family: sans-serif;
}

.login-container{
    width: 370px;
    height: 400px;
    top: 50%;
    left: 45%;
    position: absolute;
    background: #000;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    color: #fff;
    padding: 40px 20px;
}

.login-container img{
    width: 100px;
    height: 100px;
    position: absolute;
    left: calc(50% - 50px);
    border-radius: 50%;
    top: -50px;
}

.login-container h1{
    text-align: center;
    font-size: 20px;
}

.login-container label{
    display: block;
}

.login-container div{
    margin-bottom: 20px;
}

.login-container input[type="text"], input[type="password"]{
    width: 100%;
    border: none;
    outline: none;
    border-bottom: 1px solid #ffff;
    background: transparent;
    color: #ffff;
    height: 40px;
}

.login-container input[type="submit"]{
    width: 100%;
    border: none;
    outline: none;
    height: 40px;
    background-image: linear-gradient(to right,#F26FC9, #8772EF);
    color: #ffff;
    
}
.login-container input[type="submit"]:hover{
    cursor: pointer;
    box-shadow: 1px 1px 10px #696969;
}
a{
    display: block;
    text-align: right;
    text-decoration: none;
    color: #fff;
    font-size: 12px;
    margin-top: 10px;
}

a:hover{
    color: #d3d3d3;
    
}
</style>
</head>  
  <body>
   <div class="login-container">
        <?php echo $this->session->flashdata('message'); ?>
       <form action="<?php echo base_url();?>Login/login_action" method="post">
           <h1>LOGIN</h1>
           <div>
               <label>Username</label>
               <input type="text" name="username" placeholder="Enter your username here" value="">
           </div>
           <div>
               <label>Password</label>
               <input type="password" name="password" placeholder="Enter your password here" value="">
           </div>
           <input type="submit" name="login" value="LOGIN">
         
       </form>
   </div>
   
</body>  
</html>  