<header>
    <nav>
        <div class="nav-bar">
                <div class="mobile header-mobile-search">
                    <li class=" " onclick="mobMenu('menu')">☰</li>

                    <form method="POST" action="./search.php" class="search-bar-mobile">
                        <div class="search-mobile">
                            <input type="text" name="search" placeholder="Search" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>

                </div>
                <a href="./" style="color:white">
                <img src="./assets/images/tguideLogo.png" width="100px" alt="tguide logo">  </a>
            <div class="desktop">
            <form method="POST" action="./search.php" class="search-bar">
                <div class="search">
                    <input type="text" name="search" placeholder="Search" >
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                </form>
            </div>
        </div>
    </nav>
    <?php require_once 'connect.php';?>
    <?php require 'catFetch.php';?>
    <div class="nav-cat mobile">
        <div class="nav-cat-bar ">
            <div id="menu"  class="hide">
                <ul><small>Business Topics</small></ul>
                <?php
                 $temp = $cat_len; while($temp > 0){ ?>

                    <ul class="hover3">
                        <li > # <a  class="hover3" href="./category.php?category=<?php echo $cat[$temp-1];?>"><?php echo $cat[$temp-1];?></a> </li>
                    </ul>
                    <?php $temp--;}?>
                    <br>
                    <ul>
                    <hr class="hr">
                    </ul>


                    <ul><small>Professional Help</small></ul>
                    <ul><p>Get a website</p></ul>
                    <ul><p>Get a app</p></ul>
                    <ul><p>Get a webtool</p></ul>
                    <ul><p>Get a logo</p></ul>
                    <ul><p>Get Social Media marketing Help</p></ul>
            </div>
        </div>
    </div>
    <div class="nav-cat desktop">
        <div class="nav-cat-bar ">
                <?php  $temp2 = $catlen;
                while($temp2 > 0){ ?>
                    <a class=""  href="./category.php?category=<?php echo $category_name[$temp2-1];?>"><p ><strong> #<?php echo $category_name[$temp2-1];?> </strong></p></a>

                    <?php $temp2--;}?>
        </div>
    </div>


</header>
