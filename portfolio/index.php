<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style/style.css">
      <!-- Link to add icons from FontAwsome -->
      <script src="https://kit.fontawesome.com/6590b37f3f.js" crossorigin="anonymous"></script>
      <!-- SEO tags -->
      <meta name="description" content="Explore a portfolio of innovative design, web and software development projects. Skilled developer specializing in creating responsive websites, applications, and interactive solutions.">
      <meta name="robots" content="index, follow">
      <meta name="keywords" content="home, portfolio, projects, mobile, web development, software development, expertise, solutions, Roodly Jean Paul, haitian developer, haitian website">
      <title>Home</title>
  </head>
  <body>
    <header>
      <div class="my-picture">
        <a href="multimedia/image/my_pic.jpg"><img width="30px" height="30px" src="multimedia/image/my_pic.webp" alt="my-picture"></a>
        <div>
          <h1 class="title">roodly jean paul</h1>
        </div>
      </div>
      
      <nav role="navigation">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
          <li class="active-page">
            <a href="index.php" >Home</a>
          </li>
          <li>
            <a href="controller/portfolio_control.php">Portfolio</a>
          </li>
          <li>
            <a href="controller/gallery_control.php">Gallery</a>
          </li>
          <li>
            <a href="content/about.php">About</a>
          </li>      
          <li id="mode">
            <i class="fa-solid fa-moon"></i>
          </li>
          <!-- change theme mode light/dark -->
          <script src="script\js\change_mode.js"></script>
        </ul>
      </nav>
    </header>
    <main class="home-main">
      <section class="first-section">
        <img class="bg-image" src="" alt="cube background">
        <!-- update image when theme change -->
        <script src="script\js\change_background.js"></script>

        <div class="texte">
          <h2>Hello!</h2>
          <p>
            Welcome to my portfolio. I am a skilled developer experienced in various languages and frameworks. I deliver high-quality solutions to exceed expectations. Let's discuss your project today!
          </p>
          <div class="boutton">
            <a href="mailto:roodlyjeanpaul@gmail.com">contact me</a>
          </div>
        </div>
      </section> 

      <section class="second-section">
        <div class="title-group">
          <h2 class="title">SKILLS AND ABILITIES</h2>
          <span class="trait"></span>
        </div>
        
        <div class="cards">
          <div class="card">
            <div class="part-1">
              <div class="image">
                <img src="multimedia/image/biblio-tech.webp" alt="user interface of the app biblio-tech" width="100%">
              </div>
              <div class="text-legend">
                <h4>Programming</h4>
                <p>
                  I have experience in algorithm design and an intermediate level of proficiency in the Java programming language. I am skilled in web development languages such as HTML, CSS, JavaScript, PHP, and SQL, and possess a good understanding of certain frameworks including Swing, Bootstrap, and Symphony. Additionally, I have basic knowledge in other programming languages such as Python and C.<br>
                  <span class="logiciel">Android studio, Visual studio code, MySQL, Pycharm</span> 
                </p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="part-1">
              <div class="image">
                <img src="multimedia/image/alien-world.webp" alt="alien world" width="100%" loading="lazy">
              </div>
              <div class="text-legend">
                <h4>Designing</h4>
                <p>
                  I possess an intermediate level of proficiency in graphic design, specializing in UI/UX design, creating logos, branding materials, flyers, business cards, and more. Additionally, I have experience in 3D content creation and web design. Although I am a beginner in video editing and photo/image retouching, I am eager to learn and improve my skills in these areas.<br>
                  <span class="logiciel">Figma, Adobe illustrator, Adobe photoshop, Blender, Premiere pro</span> 
                </p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="part-1">
              <div class="image">
                <img src="multimedia/image/data-analytics.webp" alt="image to illustrate data analytics" width="100%" loading="lazy">
              </div>
              <div class="text-legend">
                <h4>Data Analytics</h4>
                <p>
                  I am skilled in data analytics, with expertise in statistical analysis, data modeling, and data visualization using tools like Python, R, SQL, Excel, Tableau and Power BI. I also have knowledge of machine learning algorithms and predictive analytics. My attention to detail and problem-solving abilities allow me to find meaningful insights in complex data sets and communicate them effectively to stakeholders.<br>
                  <span class="logiciel">Tableau, Google analytics, Power BI, Lookers</span> 
                </p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="part-1">
              <div class="image">
                <img src="multimedia/image/it-support-01.webp" alt="image to illustrate it support" width="100%" loading="lazy">
              </div>
              <div class="text-legend">
                <h4>IT Support</h4>
                <p>
                  I am an experienced IT support professional with expertise in hardware and software troubleshooting, network maintenance, and user support. Proficient in Windows, Linux and MacOS operating systems, and skilled in remote support tools. With a strong attention to detail and a passion for customer service, I am committed to delivering efficient and effective IT solutions to ensure the smooth operation of any organization technology infrastructure.<br>
                  <span class="logiciel">Packet tracer, TeamViewer, Windows, Linux, MacOS, Zoom</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="skills-category">
          <h3 class="title">Others</h3>
          <div class="skills">
            <ul>
              <li>Project management</li>
              <li>Community manager</li>
              <li>Database administration</li>
              <li>Networking</li>
            </ul>
          </div>
        </div>
      </section> 

      <section class="third-section">
        <div class="header-slider">
          <div class="title-group">
            <h2 class="title">GALLERY</h2>
            <span class="trait"></span>
          </div>
          <div class="s-button">
            <a href="controller/gallery_control.php">show more</a>
          </div>
        </div>
        <!-- Slideshow container -->
        <div class="slideshow-container">
        
          <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="multimedia/image/cidc-branding.webp" style="width:100%" loading="lazy">
            <div class="text">Logo CIDC</div>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="multimedia/image/portfolio_website.webp" style="width:100%" loading="lazy">
            <div class="text">Portfolio website</div>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="multimedia/image/alien-space.webp" style="width:100%" loading="lazy">
            <div class="text">Another world</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="multimedia/image/space_road.webp" style="width:100%" loading="lazy">
            <div class="text">Alien portal</div>
          </div>
        
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
        </div>
        <script src="script/js/slider.js"></script>
      </section>
      
      <section class="fourth-section">
        <div class="title-group">
          <h2 class="title">ABOUT</h2>
          <span class="trait"></span>
        </div>
        
        <div class="about">
          <div class="personal-image">
            <img src="multimedia/image/my_pic.webp" alt="roodly_jean_paul" loading="lazy">
          </div>
          <div class="text-part">
            <div class="about_me_short">
              <p>
                <span>Hello!</span><br>My name is Roodly JEAN PAUL, and I am a highly motivated computer science student with a strong focus on software engineering. I have developed expertise in a range of related fields, including data analytics, IT support, and networking.
              </p>
            </div>
            <div class="boutton">
              <a href="content/about.php">Get in touch</a>
            </div>
          </div>
        </div>
      </section>
    </main>
    
    <?php 
      require "content/re_used_php_code/footer.html";
    ?>
  </body>
</html>