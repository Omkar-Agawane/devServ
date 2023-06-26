<header>
    <?php  require '../server/config.php'; ?>
  <nav class="navbar  visible-xs bg-dark">
        <div class="container">
            <div class="flexB_custom ">
                <a class="navbar-brand" href="#">
                    <img src="https://teafweb.com/BrandingRes/logoWordmark.png" alt="logo wordmark"
                        width="100px"><span class="text-light"> &nbsp;Inside</span>
                </a>
                <div class="flex_custom">""
                    <a href="" class="link_custom cc" id="name"><span class="cc" id="name">Omkar Agawane</span></a><span  class="text-light cc" id="r">Hokage</span>&nbsp;
                    <span class="text-light hover" id="logout" onclick="logout()" > |&nbsp;  Logout</span>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg  bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-5">

                    <li class="nav-item">
                        <a class="nav-link" href="#">Branding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Marketing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Managment
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://tguide.live/cms/log"
                                target="_blank">Tguide.live</a>
                            <a class="dropdown-item" href="./nofiticationBlog.php">Notification-tguide</a>
                            <a class="dropdown-item disabled" href="#">Disabled</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
