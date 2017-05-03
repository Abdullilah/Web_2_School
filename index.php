
<!DOCTYPE html>
<html>
<head>
    <title>Abd2dev School</title>
    
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        #logOutForm{
            display: inline;
            margin-top: 10px;
        }
        #logOutForm input{
            margin-top: 13px;
            background-color: #2c2c2d;
            color: #ccc;
            border: 0px;
        }
        
        #logOutForm input:hover{
            color: #FFF;
        }
        .scrollBtn span{
            font-size: 50px;
            position: fixed;
            top: 530px;
            right: 40px;
        }
        

    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ourTarget" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Abd2dev School</a>
            </div>
        <!-- Brand and toggle get grouped for better mobile display -->
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="ourTarget">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="myInfo.php">My Information</a></li>
            <?php
              error_reporting(0);
              session_start();
              if($_SESSION['newSession'] == null){
                  echo "<li><a href='login.php'>Sign in</a></li>";
              } else{
                  echo "<li><form action='some.php' method='post' id='logOutForm'>
                          <input type='submit' value='Log out'>
                          </form></li>";
              }
              ?>
          </ul>
          
          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <!-- Start Carousel -->
    <div id="mySlide" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#mySlide" data-slide-to="0" class="active"></li>
            <li data-target="#mySlide" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/1.jpg" alt="pic1">
              <div class="carousel-caption">
                  <h2 class="h1">Abd2dev School</h2>
                  <p>This school .. Information about the school  .. Information about the school .. Information about the school .. Information about the school .. Information about the school </p>
                  <a href="about.html"><div class="btn btn-primary">Read more</div></a>
              </div>
            </div>
            <div class="item">
              <img src="images/1.jpg" alt="pic2">
              <div class="carousel-caption">
                  <h2  class="h1">We are more than school</h2>
                  <p>We are not just a school, we are More Information here .. we are More Information here .. we are More Information here .. we are More Information here .. we are More Information here .. we are More Information here .. we are More Information here ..</p>
              </div>
            </div>
          </div>
        <!-- Start Controls -->
          <a class="left carousel-control" href="#mySlide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#mySlide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        <!-- End Controls -->
    </div>
    <!-- End Carousel -->
    
    <!-- End Carousel -->
            
    <!-- Start Admin Section -->
    <section class="price-table text-center">
            <div class="container">
                <h2 class="h1">Administration</h2>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="leftContainer">
                            <img src="images/Admin.png" alt="admin pic"  class="wow flipInX"
                                                                         data-wow-duration="2s" 
                                                                         data-wow-delay="0.4s" 
                                                                         data-wow-offset="200">
                            <div class="leftSide">
                                <h2>Admin</h2>
                                <p>Mr. Admin Name</p>
                            </div>
                        </div>
                    </div>
                    <div class="rightSide col-md-8 col-sm-12 wow fadeInRight"
                                data-wow-duration="2s" 
                                data-wow-delay="0.4s" 
                                data-wow-offset="200">
                        <h1>Mr. Admin Name</h1>
                        <p>Here We Can Write Some Information ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information  ... More Information ... More Information  ... More Information  ... More Information  ... More Information  ... More Information</p>
                    </div>
                    
                </div>
            </div>
        </section>
    <!-- End Admin Section -->
    
    <!-- Start Teacher Section-->
    <section class="teachers text-center">
            <div class="data">
                <div class="container">
                    <h2 class="h1">Our Teachers</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher1.png" alt="teacher1" class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_1</h2>
                                <p>Here are some information about the teacher_1 ... more information ... more information ... more information ... more information ... more information ... more information ... more information... more information ... more information ... more information ... more information ... more information </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher2.png" alt="teacher2"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_2</h2>
                                <p>Here are some information ... more information ... more information </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher3.png" alt="teacher3"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_3</h2>
                                <p>Here are some information about the teacher_3 ... more information ... more information ... more information ... more information ... moron ... more information ... more information </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher4.png" alt="teacher4"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_4</h2>
                                <p>Here are some information about the teacher_4 ... more information ... more information ... more information ... more information ... more information ... more information ... more information... more information ... more information ... more information ... more information ... more information </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher5.png" alt="teacher5"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_5</h2>
                                <p>Here are some information about the teacher_5 ... more information ... more information ... more information ... more information ... more information ... more information ... more information... more information ... more information ... more information ... more information ... more information </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher6.png" alt="teacher6"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_6</h2>
                                <p>Here are some information about the teacher_6 ... more information ... more information ... more information ... more information ... more information ... more information ... more information... more information ... more information ... more information ... more information ... more information </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher7.png" alt="teacher7"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_7</h2>
                                <p>Here are some information abourmation ... more information ... more information... more information ... more information ... more information ... more information ... more information </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="stats">
                                <img src="images/teacher8.png" alt="teacher8"  class="wow flipInX"
                                                                              data-wow-duration="2s" 
                                                                              data-wow-delay="0.4s" 
                                                                              data-wow-offset="200">
                                <h2>Mr. Teacher_8</h2>
                                <p>Here are some information about the teacher_8 ... more information ... more information ... more information ... more information ... more information ... more information ... more information... more information ... more information ... more information ... more information ... more information </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Teacher Section -->
    <!-- Start Footer Section -->
    <div class="footer">
        <div class="hiddenDiv">abd2dev@gmail.com</div>
        <p>Copyright_<span class="yearCopyRight"><?php echo date("Y"); ?> </span><span class="logo">ABD<span class="two">2</span>Dev</span> &copy;</p>
    </div>
    <!-- End Footer Section -->
    
    <!-- Scroll button-->
    <a href="#" class="scrollBtn"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></a>
    
    
    <script src="JS/jquery-3.1.1.min.js"></script>
    <script src="JS/scriptMain.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script>
        $(document).ready(function(){
            $('.scrollBtn').hide();
            //Check to see if the window is top if not then display button
            $(window).scroll(function(){
                if ($(this).scrollTop() > 400) {
                    $('.scrollBtn').fadeIn();
                } else {
                    $('.scrollBtn').fadeOut();
                }
            });

            //Click event to scroll to top
            $('.scrollBtn').click(function(){
                $('html, body').animate({scrollTop : 0},1000);
                return false;
            });

        });
    </script>
</body>
</html>