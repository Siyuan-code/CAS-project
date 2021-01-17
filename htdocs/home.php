<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Mall of Youth</title>
    <link rel="stylesheet" href="style.css?rnd=224" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="/fontawesome-free-5.15.1-web/css/all.css" />
  </head>
  <body>
    <!-- The very top header -->
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
          <a href="#"><button class="dropbtn">Blog</button></a>
          <div class="dropdown-content">
            <a href="#">Nouvelles idées</a>
            <a href="#">Inspirational ideas</a>
            <a href="#">Study tips</a>
          </div>
        </div>
        <div class="dropdown1">
          <a href="stockphoto.php"><button class="dropbtn1">Stock photos</button></a>
          <div class="dropdown-content1">
            <a href="#">Nature</a>
            <a href="#">People</a>
            <a href="#">Building</a>
          </div>
        </div>
        <div class="dropdown2">
          <a href="#"><button class="dropbtn2">Art paints</button></a>
          <div class="dropdown-content2">
            <a href="#">Modern</a>
            <a href="#">Contemporary</a>
            <a href="#">Classical</a>
          </div>
      </div>
        <div class="first">
          <div class="intro"><h1>Welcome to The Mall of Youth !</h1>
            <br>
            <p class="paragraph">The Mall of Youth is a platform where teenagers can open their own shop and display their own products while earning the Y dollars, the currency in this website.</p>
          </div>
          <div class="logo">Logo</div>
        </div>
        
        <div class="second">
          <div class="video"><video src="/video/Q21 log equations (1) (1).mov" width="854px" height="480px" controls ></video>
          </div>
          <div class="text"><p class="Video-Descript">Video Description</p></div>
        </div>
        <div class="blog">
          <h1 class="intro-blog">Introduction to Our blog page</h1>
          <p class="blog1">The blog in The mall of Youth is different from a normal blog. Here, you can share your opinions, and get Y dollars from your posts. </p>
        </div>
        <div class="stock-photos">
          <h1 class="intro-photos">Introduction to Our Stock photos page</h1>
          <p class="photos1">This is the stock photos page</p>
        </div>
         <div class="art-paints">
          <h1 class="intro-art">Introduction to Our Art Paints page</h1>
          <p class="art1">This is the art paints page</p>
        </div>
        <div class="end-page">
            <p class="thead">About us</p>
          <ul class="end-list">
            <li>Terms and Condition</li>
            <li>Email: siyuan.r_daa@gemsdaa.net</li>
            <li>Telegram number: 050-3424753</li>
            <li>If you cannot find us, you can go to DAA High School Library to find us during lunch time.</li>
          </ul>
        </div> 
    </div>
  </body>
</html>