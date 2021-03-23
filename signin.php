<?php
    session_start();
    include_once('functions.php');
    $userdata = new DB_con();

    if(isset($_POST['login'])){
        $uname = $_POST['username'];
       $password = md5($_POST['password']);

       $result = $userdata->signin($uname, $password);
       $num = mysqli_fetch_array($result);
       
       if($num > 0){
           $_SESSION['id'] = $num['id'];
           $_SESSION['fname'] = $num['fullname'];
           $_SESSION['uname'] = $num['username'];
           echo "<script>alert('Login Successful!');</script>";
           echo "<script>window.location.href='welcome.php'</script>";
       }
       else {
        echo "<script>alert('Something went wrong Please try again');</script>";
        echo "<script>window.location.href='signin.php'</script>";
       }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TechPlayground</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
  h1{
    color: black;
  }
  h2{
    color: #1E8449;
  }
  body{
  margin: 0;
   width: 100vw;
   height: 100vh;
  padding: 0;
  font-family: 'Kanit', sans-serif;
  background-size: cover;
}
.footer{
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: black;
  text-align: center;
}
</style>
</head>
<body >
</style>
    <title>Techplayground</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://techplayground.space/">TechPlayground</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">เกี่ยวกับ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Update..</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="signin.php">เข้าสู่ระบบ</a>
      </li>
    </ul>
  </div>
</nav>
  </br>
  </br>
  <div class="container">
        <h1 class="mt-5"> Login Page</h1>
        <hr>
            <form method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">ชื่อผู้ใช้</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <span id="usernameavailable"></span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" name="login" class="btn btn-success" value="Submit">เข้าสู่ระบบ</button>
                <a href="register.php" class="btn btn-primary">สมัครสมาชิก</a>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


</body>
</html>
