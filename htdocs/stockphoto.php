<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?rnd=222" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="/fontawesome-free-5.15.1-web/css/all.css" />
    <title>The Mall of Youth</title>
</head>
<body>
        <div id="main">
      <div class="header">
        <!-- The title -->
        <h1>The Mall of Youth</h1>
      </div>
      <!-- The search bar -->
      <form class="search" action="index.php" method="POST">
        <input type="text" placeholder="Search" name="search" />
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

        <!-- The Logout button -->
        <a href="homepage.php"><button class="logoutbtn">Logout</button></a>

    </div>
    <!-- The end of the very top header -->

    <!-- Start of the hided side menu -->
    <div id="mySide-menu" class="side-menu">
      <a href="#"><h3 id="mall">The Mall of Youth</h3></a>
      <!-- The header of the side menu -->
      <ul>
        <li>
          <!-- Click the menu icon in the side menu and the side menu will close -->
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
            <i id="menu" class="fas fa-bars"></i>
            <!--The menu icon-->
          </a>
        </li>

        <li>
          <a class="homebtn" href="homepage.html"
            ><i id="home-in" class="fas fa-home"></i>home</a
          >
          <!--The home button-->
        </li>
      </ul>
    </div>
    <!-- End of the hided side menu -->

    <!-- The visible menu at the side -->
    <div class="shop" id="myShop">
      <button>
        <i id="menu" class="fas fa-bars" onclick="openNav()"></i>
      </button>
      <!--The menu icon that opens the hided side menu-->
      <a href="home.php">
      <button>
        <i id="home" class="fas fa-home"><p class="t-home">home</p></i>
      </button>
      </a>
      <!--The home icon-->
      <button>
        <i id="setting" class="fas fa-cog"><p class="t-setting">setting</p></i>
      </button>
    </div>
    <!-- The end of the visible menu at the side -->

    <!-- Start of the Main content -->
    <div id="myMain-content" class="main-content">
      <div class="subpages">
        <div class="dropdown">
          <button class="dropbtn">Blog</button>
          <div class="dropdown-content">
            <a href="#">Nouvelles idées</a>
            <a href="#">Inspirational ideas</a>
            <a href="#">Study tips</a>
          </div>
        </div>
        <div class="dropdown1">
          <button class="dropbtn1">Stock photos</button>
          <div class="dropdown-content1">
            <a href="#">Nature</a>
            <a href="#">People</a>
            <a href="#">Building</a>
          </div>
        </div>
        <div class="dropdown2">
          <button class="dropbtn2">Art paints</button>
          <div class="dropdown-content2">
            <a href="#">Modern</a>
            <a href="#">Contemporary</a>
            <a href="#">Classical</a>
          </div>
      </div>

      <!-- The photos content -->
      <div class="photos"></div>
      <div class="photos"></div>
</body>
</html>