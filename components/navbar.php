<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="../css/login.css">
<header>
        <a href="#" class="logo">
            <img src="../home/img/PM-transparent green-logo.png" alt="Pawfect Match Logo" class="Logo" width="125" height="125">
            <span class="brand-name">Pawfect Match</span>
        </a>
       
        <ul class="navbar">
            <li><a href="../home/index.php">Home</a></li>
            <li><a href="../about/ourstory.php">Our Story</a></li>
            <li><a href="../gallery/petlist.php">Meet Your Furbaby</a></li>
            <li><a href="../article/article.php">Help</a></li>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                Sign up
                <div class="arrow-wrapper">
                    <div class="arrow"></div>
                </div>
            </button>
        </ul>

        <div class="bx bx-menu" id="menu-icon"></div>
        <div><?php require_once '../forms/signup.php'?></div>
</header>