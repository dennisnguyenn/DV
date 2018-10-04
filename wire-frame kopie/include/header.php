<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 19-09-18
 * Time: 09:21
 */
?>
<header>
    <nav class="navbar navbar-inverse pmd-navbar navbar-fixed-top pmd-z-depth" style="background-color:#FFFFFF; border-color:#FFFFFF">
        <div class="container-fluid" style="background-color:white;">
            <!-- Sidebar Toggle Button-->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="javascript:void(0);" data-target="basicSidebar" data-placement="left" data-position="fixed" is-open="false" is-open-width="1000px" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle "><i class="material-icons md-light" style="color:#A9A9A9">menu</i></a>
                <a class="navbar-brand" href="index.php">Watchy</a>
            </div>

            <!-- Navbar Center icon -->
            <div class="pmd-navbar-icon pull-right" style=" display: block;margin-left: auto;margin-right: auto;width: 55%;">
                <input type="text" placeholder="zoeken" name="search">
                <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect"><i class="material-icons pmd-sm md-light">search</i></a>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <section id="pmd-main">
                <!-- Left sidebar -->
                <aside id="basicSidebar" class="pmd-sidebar sidebar-default pmd-z-depth pmd-sidebar-slide-push .pmd-sidebar-open" role="navigation">
                    <ul class="nav pmd-sidebar-nav">
                        <!-- My Account -->
                        <li class="dropdown pmd-dropdown pmd-user-info">
                            <a aria-expanded="false" data-toggle="dropdown" data-sidebar="true" class="btn-user dropdown-toggle media" href="javascript:void(0);">
                                <div class="media-left">
                                    <img width="40" height="40" alt="avatar" src="http://propeller.in/assets/images/avatar-icon-40x40.png">
                                </div>
                                <div class="media-body media-middle">User</div>
                                <div class="media-right media-middle"><i class="material-icons pmd-sm">more_vert</i></div>
                            </a>
                            <ul class="dropdown-menu">
                                <li> <a class="pmd-ripple-effect" href="javascript:void(0);" tabindex="-1"><i class="material-icons media-left media-middle">person</i> <span class="media-body">View Profile</span></a></li>
                                <li> <a class="pmd-ripple-effect" href="javascript:void(0);" tabindex="-1"><i class="material-icons media-left media-middle">settings</i> <span class="media-body">Settings</span></a></li>
                                <li> <a class="pmd-ripple-effect" href="login/login.php" tabindex="-1"><i class="material-icons media-left media-middle">history</i> <span class="media-body">Logout</span></a></li>
                            </ul>
                        </li>
                        <li> <a class="pmd-ripple-effect" href="index.php"><i class="material-icons media-left media-middle" style="color: #A9A9A9;" >home</i> <span class="media-body" style="color: black;">Home</span></a> </li>
                        <li> <a class="pmd-ripple-effect" href="javascript:void(0);"><i class="material-icons media-left media-middle" style="color: #A9A9A9;">whatshot</i> <span class="media-body" style="color: black;">Trending</span></a> </li>
                        <li> <a class="pmd-ripple-effect" href="javascript:void(0);"><i class="material-icons media-left media-middle" style="color: #A9A9A9;">more</i> <span class="media-body" style="color: black;">Abonnenmenten</span></a> </li>
                    </ul>
                    <hr>
                    <ul class="nav-subscription">
                        <li> <a class="watchy-a-bibliotheek-style">bibliotheek</a></li>
                    </ul>

                    <ul class="nav pmd-sidebar-nav">
                        <li> <a class="pmd-ripple-effect" href="javascript:void(0);"><i class="material-icons media-left media-middle" style="color: #A9A9A9;" >restore</i> <span class="media-body" style="color: black;">Geschiedenis</span></a> </li>
                        <li> <a class="pmd-ripple-effect" href="javascript:void(0);"><i class="material-icons media-left media-middle" style="color: #A9A9A9;">schedule</i> <span class="media-body" style="color: black;">Later bekijken</span></a> </li>
                        <li> <a class="pmd-ripple-effect" href="javascript:void(0);"><i class="material-icons media-left media-middle" style="color: #A9A9A9;">thumb_up</i> <span class="media-body" style="color: black;">Gelikte video's</span></a> </li>
                    </ul>
            <hr>
                    <div id="copyright"><hr>© 2018 Watchy, AO, een bedrijf van ROC Flevoland</div>
        </aside>
    </section>
</header>
<div class="pmd-sidebar-overlay"></div>

