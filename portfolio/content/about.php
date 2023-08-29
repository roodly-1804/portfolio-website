<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../style/style.css">
      <link rel="stylesheet" href="../style/about_style.css">
      <script src="https://kit.fontawesome.com/6590b37f3f.js" crossorigin="anonymous"></script>
      <!-- SEO tags -->
      <meta name="description" content="Passionate developer with a strong expertise in web and software development. Explore my journey, skills, and commitment to creating efficient and creative digital solutions.">
      <meta name="robots" content="index, follow">
      <meta name="keywords" content="developer, resume, portfolio, web development, software development, skills, digital solutions, about me, roodly jean paul, haitian developer, haitian website">
      <title>About</title>
  </head>
  <body>
    <header>
      <div class="my-picture">
        <a href="../multimedia/image/my_pic.jpg"><img width="30px" height="30px" src="../multimedia/image/my_pic.webp" alt="my-picture"></a>
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
          <li>
            <a href="../index.php">Home</a>
          </li>
          <li>
            <a href="../controller/portfolio_control.php">Portfolio</a>
          </li>
          <li>
            <a href="../controller/gallery_control.php">Gallery</a>
          </li>
          <li class="active-page">
            <a href="about.php">About</a>
          </li>  
          <li id="mode">
            <i class="fa-solid fa-moon"></i>
          </li>    
          <script src="..\script\js\change_mode.js"></script>
        </ul>
      </nav>
    </header>
    <main class="about-main">
      <div class="frame">
        <div class="about-first">
          <div class="personal-image">
            <img src="../multimedia/image/my_pic.webp" alt="photo de roodly jean paul" >
          </div>
          <div class="text-part">
            <div class="about_me">
              <div class="part">
                <h1>WHO AM I?</h1>
                <p>
                  Hello, my name is Roodly JEAN PAUL, i was born in January 2<sup>nd</sup> 1999 in Port-au-Prince, Haiti. I passed all school period in College Canape-Vert. I was the top scorer twice in official exams at my school. Then it was time for me to start university, i had always loved computer science so i started to learn it in College Universitaire de Roumanie. That's when i started to understand how big and wonderful this field was.
                </p>
                <div class="boutton">
                  <a href="../multimedia/document/cv_roodly_jean_paul.pdf">my resume</a>
                </div>
              </div>

              <div class="part">
                <h1>WHAT CAN I DO?</h1>
                <p>
                  I am a highly motivated computer science student with a strong focus on software engineering. I have developed expertise in a range of related fields, including data analytics, IT support, and networking. With a deep understanding of computer systems, algorithms and programming languages, I have acquired the technical skills necessary to develop innovative solutions to complex problems. My passion for technology, combined with my versatility and adaptability, allows me to excel in a variety of settings. As a proactive and collaborative team player, I am always eager to contribute my skills and knowledge to help organizations achieve their objectives.
                </p> 
                <div class="boutton">
                  <a href="../controller/portfolio_control.php">see my projects</a>
                </div>
              </div>
              <div class="part">
                <h1>WHY CHOOSE ME?</h1>
                <p>
                  If you are here you are probably considering me for your IT, development, data analytics, or design needs. <br>
                  As a highly skilled and experienced professional in these fields, I bring a unique combination of technical expertise and creative problem-solving to every project. Whether you need a website developed from scratch, data analyzed for insights, or a design that captures your brand's essence, I am committed to delivering exceptional results that exceed your expectations. With a passion for innovation and a dedication to excellence, I am confident that I can help you achieve your goals and take your business to new heights.<br> 
                  So why choose me? Because I am the proven choice for quality, reliability, and results.
                </p> 
                <div class="boutton">
                  <a href="mailto:jeanpaulroodly@gmail.com">contact me</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Adding the footer -->
    <?php 
      require "re_used_php_code/footer.html";
    ?>
  </body>
</html>