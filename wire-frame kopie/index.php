<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 18-09-18
 * Time: 10:50
 */
?>
<?php require 'include/head.php' ?>
<?php require 'include/header.php' ?>

<?php

session_start();

if(isset($_SESSION['username'])) {
    echo '<h3>Login Succes, Welcome - '.$_SESSION["username"].' </h3>';
}

?>
<!-- Start Content -->
<body>
<div class="container-fluid">
    <div class="pmd-content custom-pmd-content" id="content">
        <h2>Aanbevolen</h2>
        <ul class="list-unstyled video-list-thumbs row">
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="watchy-video.php" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 uur geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
        </ul>
        <ul class="list-unstyled video-list-thumbs row">
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
        </ul>
        <hr>
        <h2>Koken - onderwerp</h2>
        <ul class="list-unstyled video-list-thumbs row">
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
            <li class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                <a href="javascript:void(0)" title="Lorem ipsum">
                    <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing.</h2>
                    <span class="uploader">Lorem Ipsum</span>
                    <span class="views">21k weergaven</span>
                    <span class="upload-date">1 maand geleden</span>
                    <span class="duration">03:15</span>
                </a>
            </li>
        </ul>
        <hr>
    </div>
    <?php require 'include/script-link.php' ?>
</body>
</html>