<?php include_once ("login-header.php");

include './components/connect.php';

session_start();

if(isset($_POST['btnlogin'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    if ($name == "admin") {
        $role = "admin";
    }elseif ($name == "rishav") {
        $role = "pub";
    }else {
        $role = "adv";
    }
   $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ? AND role = ?");
   $select_admin->execute([$name, $pass, $role]);
   
   if($select_admin->rowCount() > 0){
      $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
      $_SESSION['admin_id'] = $fetch_admin_id['id'];
    //   print_r($_SESSION['admin_id']);

      header('location:dashboard.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}


?>
    <style>
    .auth-one-bg-position {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    height: 380px;
}

/*.auth-one-bg {
   background-position: center;
    background-size: cover;
    background-image: radial-gradient(rgba(0, 0, 0, 0) 0%, rgb(25 75 255 / 17%) 100%), radial-gradient(rgba(0, 0, 0, 0) 33%, rgb(9 87 255 / 47%) 166%);
}
*/
#video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

#video-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/*.auth-one-bg .bg-overlay {
    background: linear-gradient(to right, rgb(99 41 255 / 6%), rgb(120 247 40 / 18%));
    opacity: 0.9;
}*/

/*.bg-overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    right: 0;
    bottom: 0;
    left: 0;
    top: 0;
    opacity: 0.7;
    background-color: #000;
}*/

.auth-one-bg .shape {
    position: absolute;
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 1;
    pointer-events: none;
}

.auth-one-bg .shape > svg {
    width: 100%;
    height: auto;
    fill: #ecf0fa;
}

.particles-js-canvas-el {
    position: relative;
}

.auth-page-wrapper .auth-page-content {
    padding-bottom: 60px;
    position: relative;
    z-index: 2;
    width: 100%;
}

.login-bg {
    background-color: rgb(255 255 255);
    backdrop-filter: saturate(180%) blur(1px);
    border: 2px solid rgb(0 246 253 / 0%);
    box-shadow: rgb(0 0 0 / 10%) 0px 10px 15px -3px, rgb(0 0 0 / 5%) 0px 4px 6px -2px;
}

.card-body {
    box-shadow: rgb(0 0 0 / 45%) 0px 25px 20px -20px;
}

.form-label {
    font-size: 17px;
    font-family: calibri;
}

body {
    background: #ecf0fa !important;
}
.form-control {
    height: 45px;
}
.form-label {
    font-size: 17px;
    font-family: calibri;
    margin-bottom: 0px;
    font-weight: 600;
}
.form-check {
    position: relative;
    display: flex;
    padding-left: 1.25rem;
    justify-content: space-between;
}
.btn-primary {
    color: #fff;
    background-color: #ba9235;
    border-color: #5e5e5e;
    border-radius: 50px !important;
    font-size: 18px !important;
    text-transform: capitalize !important;
    padding: 10px !important;
}

.form-control, .input-group-addon {
    border-color: #cdcdcd;
}
.p-4 {
    padding: 1.5rem!important;
}
@media only screen and (max-width: 411px) {
  .p-4 {
    padding: 0.5rem!important;
}
}
</style>
<!-- partial:index.partial.html -->
<div class="auth-page-wrapper pt-5">
    <!-- page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div id="video-container">
            <img src="assets/images/website-login-page-background.jpg">
            <!-- <video autoplay="" loop="" muted="">
                <source src="https://prod-streaming-video-msn-com.akamaized.net/1b2c3d49-8071-43f1-ac4e-6b19e8b17c6c/93a75d20-e9e2-4d41-a3ba-3e3fc124fae4.mp4" type="video/mp4" />
            </video> -->
        </div>

        <div class="bg-overlay"></div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
            </svg>
        </div>
        <canvas class="particles-js-canvas-el" width="1349" height="380" style="width: 100%; height: 100%;"></canvas>
    </div>

    <!-- page content -->
    <div class="auth-page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card  login-bg">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="d-inline-block auth-logo">
                                    <img class="brand-dark" src="assets/images/logo.png" width="200px" alt="">
                                </div>
                                <h3 class="text-dark mt-3" style="border-top: 1px solid #cdcdcd;    padding-top: 20px;">Admin Login</h3>
                            </div>

                            <form action="" method="POST">

                                <div class="p-2 mt-3">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input name="name" type="text" id="txtusername" class="form-control" placeholder="Enter username" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password-input">Password</label>
                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input name="pass" type="password" id="txtpassword" class="form-control pe-5 password-input" placeholder="Enter password" />
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </div>

                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="auth-remember-check" />
                                        <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        <a href="#" class="text-muted float-end" style="    color: #a57e09 !important;">Forgot password?</a>
                                    </div> -->

                                    <div class="mt-4">
                                        <input type="submit" name="btnlogin" value="Login" id="btnlogin" class="btn btn-primary w-100" />
                                    </div>
                                    <!--<div class="mt-4">
                                        <p>Don't have an account? <strong><a href="publishers.php" class="text-muted float-end" style="    color: #a57e09 !important;">Signup Now</a></strong></p>
                                    </div>-->
                                </div>

                            </form>

                        </div>
                        <!-- card body -->
                    </div>
                    <!-- card -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- end page content -->
</div>
<!-- partial -->
<?php include_once ("login-footer.php") ?>