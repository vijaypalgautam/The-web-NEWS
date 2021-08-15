<!DOCTYPE html>
<html>
<head>
  <title>The Web News</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<!-- BEGIN wrapper -->
<div id="wrapper">
  <!-- BEGIN header -->
  <div id="header">
    <ul>
      <li class="f"><a href="#">Home</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="page.html">Demo Page</a></li>
      <li><a href="contact.html">Contact Page</a></li>
    </ul>

    <div class="ad468x60"> <a href="#"><img src="images/ad468x60.gif" alt="" /></a> </div>
    <div class="break"></div>
    <ol>
      <li><a href="#">Update Add</a></li>
      <li><a href="Userregistration.php">Create User</a></li>
      <li><a href="Deleteuser.php">Delete User</a></li>
      <li><a href="Logout.php">Logout</a></li>
    
    </ol>
    <div class="break"></div>
  </div>

  <div id="content">

     <?php echo $content; ?>

  </div>
  <!-- END content -->
  <!-- BEGIN sidebar -->
  <div id="sidebar">
    <!-- begin ads -->
    <div class="ads"> <a href="#"><img src="images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="images/ad125x125.jpg" alt="" /></a> <a href="#"><img src="images/ad125x125.jpg" alt="" /></a> </div>
    <!-- end ads -->
    <!-- begin search -->
    <form class="search" action="#">
      <input type="text" name="s" id="s" />
      <button type="submit">Search</button>
    </form>
    <!-- end search -->
    <div class="wrapper">
      <!-- begin popular posts -->
      <h2>Popular Posts</h2>
      <ul>
        <li><a href="#">Make Money Online Creating Websites</a></li>
        <li><a href="#">Top 100 Internet Marketing Tips</a></li>
        <li><a href="#">Tutorial: How to add Videos in your Post</a></li>
        <li><a href="#">Sample Post Unordered List</a></li>
        <li><a href="#">Sample Post Blockquote</a></li>
      </ul>
      <!-- end popular posts -->
      <!-- begin flickr photos -->
      <h2>Flickr Photos</h2>
      <div class="flickr"> <a href="#"><img src="images/_thumb3.jpg" alt="" /></a> <a href="#"><img src="images/_thumb4.jpg" alt="" /></a> <a href="#"><img src="images/_thumb5.jpg" alt="" /></a> <a href="#"><img src="images/_thumb6.jpg" alt="" /></a> <a href="#"><img src="images/_thumb7.jpg" alt="" /></a> <a href="#"><img src="images/_thumb8.jpg" alt="" /></a> </div>
      <!-- end flickr photos -->
      <!-- begin featured video -->
      <h2>Featured Video</h2>
      <div class="video"> <img src="images/_video.jpg" alt="" /> </div>
      <!-- end featured video -->
      <!-- begin tags -->
      <h2>Tags</h2>
      <div class="tags"> </div>
      <!-- end tags -->
      <!-- BEGIN left -->
      <div class="l sbar">
        <!-- begin categories -->
        <h2>Categories</h2>
        <ul>
          <li><a href="#">Entertainment</a></li>
          <li><a href="#">Fashion</a></li>
          <li><a href="#">Internet</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Lifestyle</a></li>
          <li><a href="#">Make Money</a></li>
          <li><a href="#">Online</a></li>
          <li><a href="#">Parenting</a></li>
        </ul>
        <!-- end categories -->
        <!-- begin pages -->
        <h2>Pages</h2>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Archives</a></li>
          <li><a href="#">Links</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
        <!-- end pages -->
      </div>
      <!-- END left -->
      <!-- BEGIN right -->
      <div class="r sbar">
        <!-- begin archives -->
        <h2>Archives</h2>
        <ul>
          <li><a href="#">August 2008</a></li>
          <li><a href="#">July 2008</a></li>
          <li><a href="#">June 2008</a></li>
          <li><a href="#">May 2008</a></li>
          <li><a href="#">April 2008</a></li>
          <li><a href="#">March 2008</a></li>
        </ul>
        <!-- end archives -->
        <!-- begin blogroll -->
        <h2>Blogroll</h2>
        <ul>
          <li><a href="#">Carlos</a></li>
          <li><a href="#">Digital Point Forum</a></li>
          <li><a href="#">Eric's Photo Gallery</a></li>
          <li><a href="#">Fashion Trends</a></li>
          <li><a href="#">Google Scoreboard</a></li>
          <li><a href="#">Marketing Forum</a></li>
        </ul>
        <!-- end blogroll -->
        <!-- begin meta -->
        <h2>Meta</h2>
        <ul>
          <li><a href="#">Login</a></li>
        </ul>
        <!-- end meta -->
      </div>
      <!-- END right -->
    </div>
  </div>
  <!-- END sidebar -->
  <!-- BEGIN footer -->
  <div id="footer">
    
  </div>
  <!-- END footer -->
</div>
<!-- END wrapper -->
</body>
</html>
