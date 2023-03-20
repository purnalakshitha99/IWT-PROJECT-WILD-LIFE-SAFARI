<?php session_start(); ?>
<?php require_once 'connection.php' ?>
<?php

//checking if a user is logged in;
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Css/home_page.css">
  <script src="https://kit.fontawesome.com/b4fcd87383.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b4fcd87383.js" crossorigin="anonymous"></script>
  <title>Home Page</title>
</head>

<body>
  <div class="nav-bar">
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="">
        <label class="logo">Ceylon Wild Safari</label>
        <ul>
          <li><a class="active" href="homepage.php">Home</a></li>
          <li><a href="user_view_package.php">Packages</a></li>
          <li><a class="icon" href="login.php">Login&nbsp;&nbsp;<i class="fa-solid fa-circle-user"></i></a></li>
          <li><a class="icon" href="logout.php">Log Out&nbsp;&nbsp;<i class="fa-solid fa-circle-user"></i></a></li>
        </ul>
    </nav>
  </div>
  <div id="slider">
    <figure>
      <img src="../Images/image slid/A-Perfect-Holiday-Filled-with-Nature2.jpg" alt>
      <img src="../Images/image slid/Bird-watching-tour-Sri-Lanka-9-nights.jpg" alt>
      <img src="../Images/image slid/birding-tours-sri-lanka-highest-number-of-endemic-birds-reccored-in-the-world.jpg" alt>
      <img src="../Images/image slid/Maduru-Oya-National-Park.jpg" alt>
      <img src="../Images/image slid/sloth-bears-in-sri-lanka.jpg" alt>
    </figure>
  </div>

  <div class="text">
    <h1>CEYLON WILD LIFE SAFARI</h1>
  </div>

  <div class="box">

    <div class="imgbox">
      <a href="https://rb.gy/9atbmu"><img src="../Images/sri-lanka-travel-map-max (6).jpg" alt></a>
    </div>

    <div class="content">
      <p>

        Ceylon wild safaris is a subtle mix of simple living and luxury
        hidden away in the buffer zone jungles of the yala national park.
        The setup is straightforward on first glance, yet spend a couple
        of nights here and you will realize that there is much more than
        meets the eye. The campsite spans across 2.5 acres, although Ceylon
        wild safaris’ actual land extent is around 18 acres. A venture initiated
        by a group of individuals who are truly passionate about wildlife conservation,
        Ceylon wild safaris runs on solar power as it strives towards sustainable tourism.
        <br><br>
        Safari is an adventure ride that gives an the opportunity to explore the unexplored trails and un-ruined natural
        horizons of desert, country side, and not to forget, the forests. It’s a common thing to visit a new country,
        meet new people and new explore new places. But have you ever wondered getting close to the natural habitat,
        animals and the surroundings? Ceylon wildlife Safari allows you do just that. It is also a way to understand the
        beauty of the eco system which comes in a package of fun filled outback adventure sports, forest walks and
        sightseeing. In fact if you are an ardent nature enthusiast, this is indeed the best way to explore the
        uncovered trails of natural echelon that forms taking different forms in different parts of Sri Lanka. Exploring
        colossal wild life in the pearl of indian ocean is an adventure beyond imagination, a hunt that will take you
        closer to the greater spaces of nature.<br><br>

        So! Come and indulge into the best safari tour of Sri Lankan wildlife, the only way to explore the untamed lives
        of the voracious world. Hire a jeep or sit back on an elephant, the experience will never be quite the same for
        the various reserves in the country are the places that will give you the cherishing experience of becoming one
        with nature.






      </p>
    </div>

  </div>


  <div class="text2">
    <h3>VISIT OUR PHOTO GALLERY <a href="my_profile_user.php">My profile</a></h3>
  </div>

  <div class="main-image-container">
    <div class="container">
      <div class="cards">
        <div class="card-img">
          <img src="../Images/resort-sunset.webp" alt="resort">
        </div>
        <div class="card-body">
          <h2>Hotels</h2>
          <p>We recommend that you choose from one of our recommended Tented Safari Camp..</p>
        </div>
        <div class="card-footer">
          <button><a href="hotel gallery.php">see more</a></button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cards">
        <div class="card-img">
          <img src="../Images/WilpattuNationalPark-April2014_(3).jpg" alt="wilpaththu">
        </div>
        <div class="card-body">
          <h2>National parks</h2>
          <p>Sri Lanka has no less than 22 national parks. The parks are very popular among tourists..</p>
        </div>
        <div class="card-footer">
          <button><a href="national parks.php">see more</a></button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cards">
        <div class="card-img">
          <img src="../Images/Minneriya-National-Park-Jeep-1-e1494839292409.jpg" alt="jeep">
        </div>
        <div class="card-body">
          <h2>People</h2>
          <p>our guides were knowledgeable, funny and easy to get along with.<br>.</p>
        </div>
        <div class="card-footer">
          <button><a href="peoples.php">see more</a></button>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cards">
        <div class="card-img">
          <img src="../Images/wildlife-10-sri-lanka.jpg" alt="Animals">
        </div>
        <div class="card-body">
          <h2>Animals</h2>
          <p>Sri Lanka's Big Five. leopard, elephant, sloth bear, blue whale,
            and sperm whale – are known as the country's great wildlife attractions.</p>
        </div>
        <div class="card-footer">
          <button><a href="Animals.php">see more</a></button>
        </div>
      </div>

    </div>
  </div>
  <footer>
    <div class="footer-content">
      <h3>Ceylon Wild Life Safaris</h3>
      <p>Raj Template is a blog website where you will find great tutorials on web design and development. Here each
        tutorial is beautifully described step by step with the required source code.</p>
      <ul class="socials">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>copyright &copy; <a href="#">Ceylon Wild Life Safaris</a> </p>
      <div class="footer-menu">
        <ul class="f-menu">
          <li><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Contact</a></li>
          <li><a href="">Blog</a></li>
        </ul>
      </div>
    </div>

  </footer>
</body>

</html>

<?php mysqli_close($link); ?>



<!-- 
<div class="appname">Ceylon Wild Safari</div>
    <div class="logged_in">Welcome <?php echo $_SESSION['role'] ?> <?php echo $_SESSION['first_name'] ?><a
        href="logout.php">Log
        Out</a>
    </div> -->