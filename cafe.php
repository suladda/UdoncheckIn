<?php
    include('connect.php');
    $sql = "SELECT ID, heading, img, contents FROM travel";
    $sql1 = "SELECT id, heading, img, contents FROM cafe";
    $sql2 = "SELECT id, heading, img, contents FROM shopping";


    session_start();
    if(!isset($_SESSION['username'])){
        $_SESSION['meg'] = "You must login first";
        header('location: login.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>

<html>
<head>
    <title>Web </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body style="background:whitesmoke;">
      <div class="content">
          <!--notfication message --> 
          <?php if(isset($_SESSION['success'])) :?>
            <div class="success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
          <?php endif ?>
          <!-- logged in user information -->
          <?php if(isset($_SESSION['username'])) : ?>
            <?php endif ?>
        </div>

<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: orangered;">
    <a class="navbar-brand" href="index.php">Udon Check-in</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="writeblog1.php">WriteBlog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="myblog.php" tabindex="-1" aria-disabled="true">My Blog</a>
        </li>
      </ul>
    </div>
    <div>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <p style="color: yellow;"> Welcome <strong style="color: yellow;"><?php echo $_SESSION['username']; ?></strong></p>
        </li>
        <li class="nav-item">
          <p><a href="index.php?logout='1'" style="color: white;"> &nbsp; &nbsp; Logout</a></p>
        </li>
      </ul>       
      </div>
  </nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i1.wp.com/www.iurban.in.th/wp-content/uploads/2014/02/rubberduck1.jpg?resize=600%2C400&ssl=1" class="d-block w-100" alt="..." height="350px" width="650px">
    </div>
    <div class="carousel-item">
      <img src="https://paimayang.com/wp-content/uploads/2020/02/%E0%B8%97%E0%B8%B0%E0%B9%80%E0%B8%A5%E0%B8%9A%E0%B8%B1%E0%B8%A7%E0%B9%81%E0%B8%94%E0%B8%87.jpg" class="d-block w-100" alt="..." height="350px" width="650px">
    </div>
    <div class="carousel-item">
      <img src="https://images.thaiza.com/37/37_20140721102119..jpg" class="d-block w-100" alt="..." height="350px" width="650px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div><br><br></div>
  <div class="container marketing" style="width: 60%;
    margin: 0 auto;">
    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

<?php  
  $query1 = mysqli_query($conn, "SELECT * FROM cafe");
  while($result1 = mysqli_fetch_array($query1)){
?>

    <div class="row featurette">
      <div style="text-align: center;">
        <h2 class="featurette-heading" ><?php echo $result1["heading"]?><span class="text-muted"></span></h2><br>
        <div>
        <img src="<?php echo $result1["img"]?>" style="width: 500px; height:300px;">
        </div><br>
        <p class="lead" style="text-align: center; color:grey;"><?php echo $result1["contents"]?></p>
      </div>
    </div>
    <hr class="featurette-divider">

          <?php }?>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

<br><br><br><br><br><br>
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</ul>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; Suladda || Arpirak &middot; <a href="https://www.facebook.com/ked.suladda">contract</a> &middot;</p>
  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</ul>
</body>
</html>