<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--

        OLIVIA HYLAND, 2020
        
        Hi! Thank you for taking the time to view my website. If you would like to get in touch you can email me directly on 1oliviahyland@gmal.com

        -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-169801365-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-169801365-1');
        </script>
        <!--META-->
        <meta charset="utf-8">
        <meta name="author" content="Olivia Hyland"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Olivia Hyland, Junior Front end Web Developer who uses a create approach to building modern, clean, functional mobile first responsive websites using HTML, CSS and JavaScript"/>
        <!--FONTS-->
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@100;200;300;400;600&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet"/>
        <!--STYLES-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="images/favicon.png"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <!--SCRIPTS-->
        <script
            src="https://code.jquery.com/jquery-3.5.0.js"
            integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
            crossorigin="anonymous"></script>
        <script src="scripts/scripts.js"></script>
        <!--TITLE-->
        <title>Olivia Hyland | Junior Front End Web developer - Dublin Ireland</title>
    </head>
    <body>
        <!--HEADER start-->
        <header id="header">
  
            <h1 id="top"><a href="index.php#home">Olivia <span>Hyland</span></a></h1>

            <!--MOBILE MENU start-->
            <div id="mobile-menu">
                <div id="bar1"></div>
				<div id="bar2"></div>
				<div id="bar3"></div>
            </div>
            <!--MOBILE MENU end-->

        </header>
        <!--HEADER end-->

        <!--NAVBAR start-->
        <div id="navbar">

            <!--NAV start-->
            <nav>
                <ul>
                    <li><a href="#home-sec">Home</a></li>
                    <li><a href="#portfolio-sec">Portfolio</a></li>
                    <li><a href="#about-sec">About</a></li>
                    <li><a href="https://oliviahyland.com/blog/">Blog</a></li>
                    <li><a href="#contact-sec">Contact</a></li>
                </ul>
            </nav>
            <!--NAV end-->

            <!--ICONS WRAPPER start-->
            <div class="icons-wrapper">
                <a href="https://github.com/ohyland"><img class="icon" width="20" src="images/icons/github.svg" alt="Github"/></a>
                <a href="https://www.linkedin.com/in/olivia-hyland-79775317b"><img class="icon" width="20" src="images/icons/linkedin.svg" alt="Linkedin"/></a>
                <a href="mailto:1oliviahyland@gmail.com"><img class="icon" width="20" src="images/icons/email.svg" alt="email"/></a>
            </div>
            <!--ICONS WRAPPER end-->
            
        </div>
        <!--NAVBAR end-->

        <!-- BACK TO TOP LINK start-->
        <a id="backToTop" href="#top">
            <img src="images/icons/arrow.svg" alt="back to top"/>
        </a>
        <!-- BACK TO TOP LINK end-->

        <!--MAIN CONTENT start-->
        <main>
            
            <!--HOME START-->
            <div id="home-sec">
                <p class="intro-greeting">Hi, I’m <a href="#about-sec">Olivia</a>,<br/>front-end web developer</p>
                <p class="location"><img class="icon" width="20" src="images/icons/globe.svg" alt=""/>Dublin, Ireland</p>

                <a class="button" href="#portfolio-sec">Portfolio</a>
                <a class="scroll-arrow" href="#portfolio-sec"><img class="icon" src="images/icons/arrow-down.svg" alt="portfolio section"/></a>

            </div>
            <!--HOME END-->
            
            <!--PORTFOLIO SECTION START-->
            <section id="portfolio-sec">

                <h2>Portfolio</h2>
                <p>Recent Projects I have worked on.</p>
                
                <!--CAFE BEAN PROJECT start-->
                <section class="project-container">
                    <a href="cafebean.html">
                        <div class="overlay">
                            <img src="images/portfolio/cafebean-logo.png" alt="">
                            <h3>cafe bean website</h3>
                            <p>Case Study<p>
                        </div>
                    </a>
                </section>
                <!--CAFE BEAN PROJECT  end-->

                <!--FTC PROJECT start-->
                <section class="project-container">
                    <a href="ftcwebdev.html">
                        <div class="overlay">
                            <img src="images/portfolio/ftc-webdev.png" alt="">
                            <h3>Web Developer Course website</h3>
                            <p>Case Study<p>
                        </div>
                    </a>
                </section>
                <!--FTC PROJECT end-->

                <!--LINK TO GITHUB start-->
                <a class="button" href="https://github.com/ohyland"><img class="icon" width="20" src="images/icons/github.svg" alt="">github for more</a>
                <!--LINK TO GITHUB end-->

            </section>
            <!--PORTFOLIO SECTION END-->

            <!--ABOUT SECTION START-->
            <section id="about-sec">

                <h2>About Me</h2>

                <!--IMG WRAPPER start-->
                <div class="about-image-wrapper">
                    <img src="images/olivia-hyland.jpg" alt="Olivia Hyland, Front-End Web Developer"/>
                </div>
                <!--IMG WRAPPER end-->

                <!--BACKGROUND SEC start-->
                <section class="background-wrapper">
                    <h3>My Background</h3>
                    <p>Hi, I’m <span>Olivia</span>, a budding front end web developer, concentrating on developing <span>mobile-first</span>, <span>fully responsive interfaces</span>.</p>
                    <p>I enjoy the full process of planning, designing and developing websites from start to finish while always keeping the end user in mind.</p>
                    <!--DOWNLOAD CV start-->
                    <a class="button" href="olivia-hyland-cv.pdf" download><img class="icon" width="20" src="images/icons/pdf.svg" alt="">Download CV</a>
                    <!--DOWNLOAD CV end-->
                </section>
                <!--BACKGROUND SEC end-->

                <!--SKILLS SEC start-->
                <section class="skills">

                    <h3>Skills</h3>
                    <p>I can take designs and mock-ups, and create modern, clean, mobile first responsive, functional interfaces using <span>HTML, CSS</span> and <span>JavaScript.</span></p>
                    <p>I have experience in <span>jQuery</span>, <span>Angular</span>, <span>React</span> and <span>WordPress</span>.</p>

                    <!--LANGUAGE ICONS WRAPPER start-->
                    <div class="icons-wrapper">
                        <img class="icon" width="20" src="images/icons/html5.svg" alt=""/>
                        <img class="icon" width="20" src="images/icons/css3.svg" alt=""/>
                        <img class="icon" width="20" src="images/icons/javascript.svg" alt=""/>
                    </div>
                    <!-- LANGUAGE ICONS WRAPPER end-->

                    <p>I have an understanding of <span>wireframes</span>, sitemaps and overall <span>project planning</span>. I've also gained experience in <span>time management</span> skills and the ability to <span>communicate within a team</span> while effectively <span>meeting deadlines.</span></p>

                </section>
                <!--SKILLS SEC end-->

                <!--EDUCA & INTERESTS WRAPPER start-->
                <div>

                    <!--EDUCATION SEC start-->
                    <section class="educa">
                        <h3>Education</h3>
                        <p>Currently, I am studying front end web development as a traineeship. In 2018 I graduated with BA Hons Degree in Art & Design from IADT (Dun Laoghaire Institute of Art, Design + Technology).</p>
                        <p>If you want to find out more <a href="olivia-hyland-cv.pdf" target="_blank" title="">take a look at my CV</a></p>

                    </section>
                    <!--EDUCATION SEC end-->

                    <!--INTERESTS SEC start-->
                    <section>
                        <h3>Interests</h3>
                        <p>When I’m away from the computer I’m happiest when <span>drinking coffee</span>, <span>sketching </span> and <span>travelling</span></p>
                    </section>
                    <!--INTERESTS SEC end-->

                </div>
                <!--EDUCA & INTERESTS WRAPPER end-->

            </section>
            <!--ABOUT SECTION END-->

            <!--CONTACT SECTION start-->
            <section id="contact-sec">

                <h2>Contact</h2>
                <p>Have a question? Get in touch!</p>

                
                <!--FORM start-->
                <div id="form">
                
                	<?php
    				//init variables
    				$cf = array();  //cf=contact form
    				$sr = false;  	//sr=server response
    				if(isset($_SESSION['cf_returndata'])) {
    					$cf = $_SESSION['cf_returndata'];  //set cf to equal session to save typing $_SESSION… every time we want to access this data
    					$sr = true;  //will be checking sr to see if form has been posted
    				}
    			?>
			
                <!--FORM start-->
                <form id="contactform" method="post" action="send_email.php">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required="" />
                    <label for="email" >Email *</label>
                    <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" required="required" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$" required />
                    <label for="message" >Message *</label>
                    <textarea name="message" id="message" cols="30" rows="10"  required=""><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                    <input class="button" value="submit" type="submit" />
                </form>
                <!--FORM end-->

        		<ul id="errors" class="error <?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
        				<li><strong>There were some problems with your form submission:</strong></li>
        				<?php
        					if(isset($cf['errors']) && count($cf['errors']) > 0) :
        					foreach($cf['errors'] as $error) :
        				?>
        				<li><?php echo $error ?></li>
        				<?php
        					endforeach;
        					endif;
        				?>
        		</ul>


                <p id="success" class="success <?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Your message has been sent!</p>
                
                <?php unset($_SESSION['cf_returndata']); ?>
                
                </div>
                <!--FORM end-->

                <!--SOCIAL LINKS start-->
                <ul>
                    <li><a href="https://github.com/ohyland"><img class="icon"  src="images/icons/github.svg" alt="github"/>Github</a></li>
                    <li><a href="https://www.linkedin.com/in/olivia-hyland-79775317b"><img class="icon"  src="images/icons/linkedin.svg" alt="linkedin"/>LinkedIn</a></li>
                    <li><a href="mailto:1oliviahyland@gmail.com"><img class="icon"  src="images/icons/email.svg" alt="email"/>1oliviahyland@gmail.com</a></li>
                </ul>
                <!--SOCIAL LINKS end-->


            </section>
            <!--CONTACT SECTION end-->

        </main>
        <!--MAIN CONTENT end-->

        <!--FOOTER start-->
        <footer>
            <small>&copy; Olivia Hyland 2020</small>
        </footer>
        <!--FOOTER end-->

    </body>

</html>