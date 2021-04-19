<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
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
          <a class="homebtn" href="home.php"
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
          <a href="original.php"><button class="dropbtn">Original ideas</button></a>
        </div>
      </div>
      <h2 class="welcome1">Share your creative and original ideas! It can be anything!</h2>
      
      <div class="content-popular">
        <div class="photo1"></div>
        <div class="description">
          <h4 id="title1">Title:  these contents will be written by users, so here should have php codes, I'll add them later </h4>
          <h4 id="title2">Introduction:  </h4>
          <h4 id="title1">The idea behind it:  </h4>
        </div>
      </div>
    </div>

 

</body>
</html>