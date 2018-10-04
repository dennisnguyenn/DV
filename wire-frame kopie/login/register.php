<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 24-09-18
 * Time: 10:34
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 19-09-18
 * Time: 21:19
 */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container-fluid">
    <div class="row mh-100vh">
        <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
            <div class="m-auto w-lg-75 w-xl-50">
                <h2 data-aos="fade-down" data-aos-duration="500" data-aos-once="true" class="text-info font-weight-light mb-5"><i class="fa fa-weixin"></i>Watchy</h2>
                <form method="post">
                    <div class="form-group" data-aos="fade-down" data-aos-duration="500" data-aos-delay="100" data-aos-once="true">
                        <label class="text-secondary">Email</label>
                        <input class="form-control" type="text" name="email" required="" inputmode="email">
                    </div>
                    <div class="form-group" data-aos="fade-down" data-aos-duration="500"
                         data-aos-delay="200" data-aos-once="true">
                        <label class="text-secondary">Password</label>
                        <input class="form-control" type="password" name="password" required="">
                    </div>
                    <button class="btn btn-info mt-2" type="submit" name="login" value="Login"
                            data-aos="fade-down " data-aos-duration="500" data-aos-delay="300" data-aos-once="true">Log In</button>
                </form>
                <p
                    data-aos="fade-down" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="mt-3 mb-0"><a href="#" class="text-info small">Forgot your email or password?</a></p>
            </div>
        </div>
        <div class="col-lg-6 d-flex align-items-end" data-aos="fade-left" data-aos-duration="500" data-aos-delay="300" data-aos-once="true" id="bg-block" style="background-image:url(&quot;assets/img/login-side-header.jpg&quot;);background-size:cover;background-position:center center;"></div>
    </div>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-animation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>
