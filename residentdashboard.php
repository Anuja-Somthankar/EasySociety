
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <style>
       #cover{
        background: #222 url("images/apt3.jpg") center center no-repeat;
       }
       #about{
        background: url("images/bgimage1.jpg") center center no-repeat;
       }
     </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- Custom CSS -->
    
    <link rel="stylesheet" href="css/styles.css">
    
  </head>
  <body>
   <nav class="navbar navbar-dark navbar-fixed-top bg-inverse navbar-full" id="nav-main" style="background-color: black">
        <a class="navbar-brand" href="#">
   <!--     <img src="images/img5.jpg" width="80" height="35" class="d-inline-block align-top" alt=""></a> -->
        <a href="#" class="navbar-brand">EasySociety</a>
        <ul class="nav navbar-nav navbar-right" style="float: right;padding:0px 20px">
            <li class="nav-item">
                <a class="nav-link" href="#what-we-do">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href= "contact.php" >Committee</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team-member">Developers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-success-outline" data-toggle="modal" data-target="#logoutModal">Logout</button>
            </li>
        </ul>
      
    </nav>

                            <?php
                            session_start();
                            if($_SESSION["valid"] == true)
                            {
                                $name = $_SESSION["name"];
                                $username = $_SESSION["username"];
                            }
                            ?>
      
    
   <section id="cover">
       <div id="cover-caption">
           <div class="container" style="color:beige">
               <div class="col-sm-10 col-sm-offset-1">
                   <h1><div class="display-3">Welcome to Easy Society</div></h1>
                   <p>EasySociety is all about easing the life of a society resident by connecting them to their society and their workflow.
                           A Web-App that digitalize and revolutionalize the traditional way of housing.</p>
                           <form action="#" class="form-inline">
                            <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" class="form-control form-control-lg" placeholder="<?php echo $name;?>">
                            <input type="text" class="form-control form-control-lg" placeholder="<?php echo $username; ?>">
                            </div>   
                            <button type="submit" class="btn btn-success btn-lg">Welcome User</button>
                           </form>
                           <br>
                           <a href="#what-we-do" class="btn btn-secondary-outline btn-sn" role="button">&darr;</a>
                           
               </div>
           </div>
       </div>
   </section>
    
    <section id="what-we-do">
         <div class="section-content">
             <div class="container">
                 <h2>SERVICES</h2>
                 <br>
             <div class="row">
                     <div class="col-sm-12">
                         <div class="card-group">
                             <div class="card">
                                 <div class="card-block">
                                     <h4 class="card-title">View Announcements</h4>
                                     <h6 class="card-subtitle"></h6>
                                 </div>
                                 <img src="images/announcement.jpg" style="height:67%;width:100%" alt="a chalkboard">
                                 <div class="card-block">
                                     <a href="login"><button type="button" class="btn btn-success-outline">learn more</button></a>
                                 </div>
                             </div>

                             <div class="card">
                                 <div class="card-block">
                                     <h4 class="card-title">Share Grievences</h4>
                                     <h6 class="card-subtitle"></h6>
                                 </div>
                                 <img src="images/grievance.jpg" style="height:34%" alt="working on a laptop">
                                 <div class="card-block">

                                     <a href="login"><button type="button" class="btn btn-success-outline">learn more</button></a>
                                 </div>
                             </div>

                             <div class="card">
                              <div class="card-block">
                                  <h4 class="card-title">Know Your Visitors</h4>
                                  <h6 class="card-subtitle"></h6>
                              </div>
                              <img src="images/visitor.jpg" style="height:38%" alt="working on a laptop">
                              <div class="card-block">

                                  <a href="login"><button type="button" class="btn btn-success-outline">learn more</button></a>
                              </div>
                             </div>

                             <div class="card">
                                 <div class="card-block">
                                     <h4 class="card-title">Manage Maintanance</h4>
                                     <h6 class="card-subtitle"></h6>
                                 </div>
                                 <img src="images/maintenance.jpg" style="height: 47%" alt="fingers typing on a keyboard">
                                 <div class="card-block">
                                    
                                    <a href="login"><button type="button" class="btn btn-success-outline">learn more</button></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    
    
    
    
    <section id="about">
        <div class="section-content1">
            <div class="container">
                <div class="col-md-5">
                    <div class="about-text">
                        <h3>About EasySociety</h3>
                        <p class="lead">EASYSOCIETY is a Web-App that acts as a platform between the residents of a society and the activities
                          and working of the society by providing them the services through which they can keep track of important activities and announcements,
                          keeping track of visitors ,online access of the society bills and the complete freedom to share their 
                          grievances & ideas at anytime and from anywhere.</p>
                        <p>EasySociety is all about easing the life of a society resident by connecting them to their society and their workflow.
                          A Web-App that digitalize and revolutionalize the traditional way of housing.</p>
                        
                        <h5>Follow me on the web</h5>
                        <a href="" class="btn btn-sm btn-secondary-outline">twitter</a>
                        <a href="" class="btn btn-sm btn-secondary-outline">facebook</a>
                        <a href="" class="btn btn-sm btn-secondary-outline">youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="team-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center" style="text-align: center">
          <h2>Meet Our Developers Team</h2>
          <p>We as a dedicated team working hard to provide you the help in your crucial moments.<br></p>
          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container" >
            <div class="pm-staff-profile-image-wrapper text-center" style="padding-left: 50px">
              <div class="pm-staff-profile-image">
                <img src="images/M3.jpg" style="height:280px;width: 250px" alt=""class="img-thumbnail img-circle">
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Harsh Singh</p>
              <p class="pm-staff-profile-title">Member of Developer Team</p>

              <p class="pm-staff-profile-bio">The think tank, he takes care about the IDEA and Front End of EasySociety. A person who is always present with innovative ideas ensuring productivity of the platform. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center" style="padding-left: 50px">
              <div class="pm-staff-profile-image">
                <img src="images/M0.jpg" style="height:280px;width: 250px" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Akash Singh</p>
              <p class="pm-staff-profile-title">Member of Developer Team</p>

              <p class="pm-staff-profile-bio">The wise technical guy to rely on, he has contributed on Front-end as well as Backend logic building and the connectivity establishment in the development of EasySociety. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center" style="padding-left: 50px">
              <div class="pm-staff-profile-image">
                <img src="images/M2.jpg" style="height:280px;width: 250px" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Anuja Somathankar</p>
              <p class="pm-staff-profile-title">Member of Developer Team</p>

              <p class="pm-staff-profile-bio">A Tech-freak and a developer ,he takes care about the login validatiion and authentication oriented part of EasySociety and also generated the important test-cases.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    
    <footer id="footer" class="footer">
    <div class="container text-center">
      <h3>Connnect us!</h3>
      <!-- End newsletter-form -->
      <ul class="social-links" >
        <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
        <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
      </ul>
      <h3>Developer Contact Details</h3><div class="social-links1"></div><br>
      <div class="col-lg-3 col-md-3 col-sm-3 " style="text-align: center;width:30%" >
          <h4>Akash Singh</h4><hr>
          <p style align="center">Phone:+91 7276087434
          <br>M@il ID:akashsingh13201@gmail.com</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3" style="text-align: center;width:40%" >
          <h4>Harsh Singh</h4>
          <hr>
          <p style align="center">Phone:+91 8390313364
          <br>M@il ID:harshsatishsingh1174@gmail.com</p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3" style="text-align: center;width:30%">
          <h4>Anuja Somathankar</h4><hr>
          <p style align="center">Phone:+91 8976233112
          <br>M@il ID:anujasom@gmail.com</p>
      </div>
    </div>
  </footer>



    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

      <!-- Modal -->
  <div class="modal fade" id="logoutModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Ready to Leave?</h4>
        </div>
        <div class="modal-body">
          <p>Select "Logout" below if you are ready to end your current session.</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logoutcontrol.php">Logout</a>
        </div>
      </div>
      
    </div>
  </div>

  </body>
</html>













