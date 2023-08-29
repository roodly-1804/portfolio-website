<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/portfolio_style.css">
        <script src="https://kit.fontawesome.com/6590b37f3f.js" crossorigin="anonymous"></script>
        <!-- SEO tags -->
        <title>Portfolio</title>
        <meta name="description" content="Browse through my diverse portfolio of web and software development projects. Gain insights into my expertise, skills, and the innovative solutions I've crafted for various clients and industries.">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="portfolio, projects, web development, software development, expertise, solutions, roodly jean paul, haitian developer, haitian website">
    </head>
    <body>

    </body><header>
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
          <li class="active-page">
            <a href="portfolio.html">Portfolio</a>
          </li>
          <li>
            <a href="gallery_control.php">Gallery</a>
          </li>
          <li>
            <a href="../content/about.php" class="active-page">About</a>
          </li>  
          <li id="mode">
            <i class="fa-solid fa-moon"></i>
          </li>    
          <script src="..\script\js\change_mode.js"></script>
        </ul>
      </nav>
    </header>
    <main class="portfolio-main">
        <section class="programming_projects">
            <div class="title-group">
                <h2 class="title">SOFTWARE</h2>
                <span class="trait"></span>
            </div>
            <?php
              for($i = 0; $i < count($projectTab); $i++) 
              {
                if($projectTab[$i]['type']=='Programmation')
                {
                    echo '<div class="programming_project">';
                      echo '<div class="project_image">';
                        echo '<img src="'.$projectTab[$i]['image_link'].'" alt="'.$projectTab[$i]['image_alt'].'">';
                      echo '</div>';
                      echo '<div class="project_description">';
                        echo '<h2>'.$projectTab[$i]['name'].'</h2>';
                        echo '<h3>'.$projectTab[$i]['short_description'].'</h3>';
                        echo '<p>'.$projectTab[$i]['long_description'].'</p>';
                        echo '<p class="technology-list">';
                        $projectTechTab = getTechnology($projectTab[$i]['idproject']);
                        for($j = 0; $j < count($projectTab); $j++) {
                            echo '<span>'.$projectTechTab[$j]['name'].'&nbsp;</span>';
                        }
                        echo '</p>';
                        echo '<br/>';
                        echo '<p class="status">'.$projectTab[$i]['status'].'</p>';
                      echo '</div>';
                    echo '</div>';
                }
              }
            ?>
        </section>
        <section class="illustration_projects">
            <div class="title-group">
                <h2 class="title">ILLUSTRATION</h2>
                <span class="trait"></span>
            </div>
            <?php
              for($i = 0; $i < count($projectTab); $i++) 
              {
                if($projectTab[$i]['type']=='Illustration')
                {
                    echo '<div class="illustration_project">';
                      echo '<div class="project_image">';
                        echo '<img src="'.$projectTab[$i]['image_link'].'" alt="'.$projectTab[$i]['image_alt'].'">';
                      echo '</div>';
                      echo '<div class="project_description">';
                        echo '<h2>'.$projectTab[$i]['name'].'</h2>';
                        echo '<h3>'.$projectTab[$i]['short_description'].'</h3>';
                        echo '<p>'.$projectTab[$i]['long_description'].'</p>';
                        echo '<p class="technology-list">';
                        $projectTechTab = getTechnology($projectTab[$i]['idproject']);
                        for($j = 0; $j < count($projectTab); $j++) {
                            echo '<span>'.$projectTechTab[$j]['name'].'&nbsp;</span>';
                        }
                        echo '</p>';
                        echo '<br/>';
                        echo '<p class="status">'.$projectTab[$i]['status'].'</p>';
                      echo '</div>';
                    echo '</div>';
                }
              }
            ?>
        </section>
        <section class="ddd_projects">
            <div class="title-group">
                <h2 class="title">3D DESIGN</h2>
                <span class="trait"></span>
            </div>
            <?php
              for($i = 0; $i < count($projectTab); $i++) 
              {
                if($projectTab[$i]['type']=='3D')
                {
                    echo '<div class="ddd_project">';
                      echo '<div class="project_image">';
                        echo '<img src="'.$projectTab[$i]['image_link'].'" alt="'.$projectTab[$i]['image_alt'].'">';
                      echo '</div>';
                      echo '<div class="project_description">';
                        echo '<h2>'.$projectTab[$i]['name'].'</h2>';
                        echo '<h3>'.$projectTab[$i]['short_description'].'</h3>';
                        echo '<p>'.$projectTab[$i]['long_description'].'</p>';
                        echo '<p class="technology-list">';
                        $projectTechTab = getTechnology($projectTab[$i]['idproject']);
                        for($j = 0; $j < count($projectTab); $j++) {
                            echo '<span class="infobulle">'.$projectTechTab[$j]['name'].'<span class="tooltip">'.$projectTechTab[$j]['description'].'</span> &nbsp;</span>';
                        }
                        echo '</p>';
                        echo '<br/>';
                        echo '<p class="status">'.$projectTab[$i]['status'].'</p>';
                      echo '</div>';
                    echo '</div>';
                }
              }
            ?>
        </section>
    </main>
    <!-- Adding the footer -->
    <?php 
      require "re_used_php_code/footer.html";
    ?>
</html>