<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Portfolio | Peter Acs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Peter Acs | Front-end Developer">
    <meta name="keywords" content="HTML,CSS,jQuery,JavaScript,web development,frontend development,web developer,frontend developer,responsive web design,performance,junior web developer, junior front end developer">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/queries.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
        <header>
            <nav>
                <div class="row">
                    <div class="logo">
                        <a href="http://www.developeter.com" class="js--white">developeter</a>
                    </div>
                    <div>
                        <ul class="nav-bar">
                            <li><a href="#" class="js--about-nav js--white">About</a></li>
                            <li><a href="#" class="js--portfolio-nav js--white">Portfolio</a></li>
                            <li><a href="#" class="js--contact-nav js--white">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="top">
                <h1 class="typer">Hello, I'm Peter.</h1>
                <h2>A front end developer, creating responsive websites.</h2>
                <ul class="intro-list">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Performance</li>
                </ul>
                <a href="#" class="button js--scroll-to-portfolio js--white" id="portfolio-button">View portfolio<br>
                <i class="ion-chevron-down"></i></a>
            </div>

        </header>
        
        <section class="about js--section-about">
            <div class="row">
                <h2>about me</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-4 profile-pic-div">
                    <img src="img/profile.png" alt="Profile picture" id="profile">
                </div>
                <div class="col span-3-of-4 biography">
                   <p style="margin-bottom: 15px;">I'm Peter Acs, a junior front-end developer based in St Albans, UK. I enjoy facing and solving problems, trial my limits and develop my coding skills. I tend to spend days on challenges like <a href="https://www.codewars.com/dashboard" target="_blank">Codewars</a>, or <a href="https://www.hackerrank.com/dashboard" target="_blank">HackerRank</a>. When I'm not coding, you'll probably find me on the tennis court or playing board games.</p>
                   <p>In 2016, with years of different working experiences behind my back, I decided I'd become a web developer. After some research I've found <a class="link" href="https://www.codecademy.com/learn" target="_blank">Codecademy&nbsp;Pro</a>, <a class="link" href="https://www.udemy.com/courses/" target="_blank">Udemy</a> and <a class="link" href="https://www.freecodecamp.com/" target="_blank">FreeCodeCamp</a> where my journey started. I develop fast interactive websites, using the latest technologies and techniques to reduce page load time. By now, I can say, I have basic knowledge of the following techniques under my belt, but there is still a lot to learn.</p>
                   
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-2">
                       <ul class="skills">
                           <li><img src="img/html5.png" alt="HTML logo"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                           <li><img src="img/css3.png" alt="CSS logo"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                           <li><img src="img/bootstrap.png" alt="Twitter Bootstrap logo"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                           <li><img src="img/javascript.png" alt="JavaScript logo"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-half"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                       </ul>
                </div>
                    <div class="col span-1-of-2">
                      <ul class="skills">
                           <li><img src="img/jquery.png" alt="jQuery logo"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                           <li><img src="img/wordpress.png" alt="WordPress logo"><i class="ion-ios-star"></i><i class="ion-ios-star"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                           <li><img src="img/git.png" alt="Git logo"><i class="ion-ios-star"></i><i class="ion-ios-star-half"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                           <li><img src="img/github.png" alt="GitHub logo"><i class="ion-ios-star"></i><i class="ion-ios-star-half"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i><i class="ion-ios-star-outline"></i></li>
                       </ul>
                       
                    </div>
            </div>
        </section>
        
        <section class="portfolio js--section-portfolio" id="portfolio">
           <div class="row">
               <h2>portfolio</h2>
           </div>
            <div class="row">
                <div class="col span-1-of-2 portolio-img">
                           <a href="myprojects/RollTheDice/index.html" target="_blank"><img src="img/roll-the-dice.png" alt="Roll The Dice"></a>
                </div>
                <div class="col span-1-of-2 portolio-img">
                           <a href="myprojects/Omnifood/index.html" target="_blank"><img src="img/omnifood.png" alt="Omnifood"></a>
                </div>
            </div>
            <div class="row">
                <div class="col span-1-of-2 portolio-img">
                           <a href="myprojects/CodePlayer/index.html" target="_blank"><img src="img/codeplayer.png" alt="Codeplayer"></a>
                    </div>
                <div class="col span-1-of-2">
                           
                </div>       
            </div>
        </section>

        <section class="contact js--section-contact">
            <div class="row">
                <h2>contact me</h2>
            </div>
            <div class="row" id="form">
               <div class="col span-1-of-2">
                        <ul class="social">
                          <li><a href="https://www.facebook.com/developeter/" target="_blank"><img src="img/facebook.png" alt="Facebook logo">Like me on Facebook</a></li>
                          <li><a href="https://twitter.com/mracspeter" target="_blank"><img src="img/twitter.png" alt="Twiter logo">Follow me on Twitter</a></li>
                          <li><a href="https://www.linkedin.com/in/mracspeter/" target="_blank"><img src="img/linkedin.png" alt="LinkedIn logo">Connect on LinkedIn</a></li>
                          <li><a href="https://github.com/devel0peter" target="_blank"><img src="img/github_small.png" alt="GitHub logo">Check my GitHub repo</a></li>
                        </ul>
                </div>
                <div class="col span-1-of-2">
                       <form method="post" action="mailer.php" class="contact-form">
                            <div class="name">
                                <p>Your name</p>
                                <input type="text" name="name" id="name" placeholder="" required>
                            </div>
                            <div class="email">
                                <p>Your email</p>
                                <input type="email" name="email" id="email" placeholder="" required>
                            </div>
                            <div class="msg">
                                 <p>Your message</p>
                                 <textarea name="message" placeholder="" id="msg"></textarea>
                             </div>
                             <div>
                                 <input type="submit" name="submit" id="submit" value="Send email">
                             </div>
                       </form>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                      
                    <?php
                        if(isset($_GET['success']) && $_GET['success'] == 1) {
                            echo "<div class=\"form-messages success\">Thank you! Your email has been sent.</div>";
                        }

                        if(isset($_GET['success']) && $_GET['success'] == -1) {
                            echo "<div class=\"form-messages error\">Oops! Something went wrong, please try again.</div>";
                        }
                    ?>
                       
                </div>
            </div>

        </section>
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#" class="js--white">Home</a></li>
                        <li><a href="#" class="js--portfolio-nav js--white">Portfolio</a></li>
                        <li><a href="#" class="js--about-nav js--white">About</a></li>
                        <li><a href="#" class="js--contact-nav js--white">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col span-1-of-2 fb-like-button">
                    <div class="fb-like" data-href="https://www.facebook.com/developeter/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                </div>
            </div>
            <div class="row">
                <p>Copyright &copy; 2017 by Peter Acs.</p>
            </div>
        </footer>
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/main.js"></script>
  </body>
</html>