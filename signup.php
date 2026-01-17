<?php
// Simple PHP handling (optional)
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    echo "<script>alert('Signup Successful!');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
        *{
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            margin:0;
            height:100vh;
            background: linear-gradient(135deg,#9F9F9F,#ff9b86);
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .card{
            background: rgba(255,255,255,0.35);
            backdrop-filter: blur(15px);
            padding:40px;
            width:700px;
            border-radius:20px;
            display:flex;
            justify-content:space-between;
        }

        .left{
            width:45%;
        }

        .right{
            width:45%;
            text-align:center;
        }

        h2{
            margin-bottom:25px;
        }

        input{
            width:100%;
            padding:12px 18px;
            border:none;
            border-radius:25px;
            margin-bottom:15px;
            outline:none;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:25px;
            background:#0b0f2b;
            color:white;
            font-size:16px;
            cursor:pointer;
        }

        .social{
            border:1px solid #555;
            background:transparent;
            margin-top:10px;
        }

        a{
            text-decoration:none;
            color:#000;
            font-weight:bold;
        }

        .or{
            margin:15px 0;
        }
    </style>
</head>

<body>

<div class="card">

    <div class="left">
        <h2>Sign Up</h2>

        <form method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>

           
        </form>
    </div>

    <div class="right">
        <button name="signup">Sign Up</button>
        <p>Already have an account? <a href="#">Log in</a></p>

        <div class="or">Or</div>

        <div class="social-login">
          <p class="muted">or continue with</p>

          <button class="social-btn google" id="btnGoogle">
            <img src="https://img.icons8.com/color/48/google-logo.png" alt="Google"> Login with Google
          </button>
        <div class="social-login">
          

          <button class="social-btn facebook" id="btnFacebook">
            <img src="https://img.icons8.com/color/48/facebook-logo.png" alt="Google"> Login with Facebook
          </button>
    </div>

</div>
<style>
    /* SOCIAL BUTTONS */
  .social-login{margin-top:18px}
  .social-btn{width:100%;padding:11px;border-radius:8px;margin-top:10px;display:flex;align-items:center;gap:12px;justify-content:center;font-weight:700;cursor:pointer;border:none}
  .social-btn img{width:22px;height:22px}
  .google{background:#fff;color:#111;border:1px solid #e6e6e6}
  .outlook{background:#2F5BB7;color:#fff}
  .apple{background:#000;color:#fff}
  </style>
</body>
</html>
