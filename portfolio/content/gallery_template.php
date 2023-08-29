<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="stylesheet" href="../style/gallery_style.css">
        <script src="https://kit.fontawesome.com/6590b37f3f.js" crossorigin="anonymous"></script>
        <!-- SEO tags -->
        <meta name="description" content="Explore a gallery of my latest creations in web and software development. Discover innovative projects, creative designs, and cutting-edge solutions that highlight my skills and expertise.">
        <meta name="robots" content="index, follow">
        <meta name="keywords" content="portfolio, gallery, 3D art, application, web development, software development, projects, designs, roodly jean paul, haitian developer, haitian website">
        <title>Gallery</title>
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
          <li>
            <a href="portfolio_control.php">Portfolio</a>
          </li>
          <li class="active-page">
            <a href="gallery_control.php" class="active-page">Gallery</a>
          </li>
          <li>
            <a href="../content/about.php">About</a>
          </li>   
          <li id="mode">
            <i class="fa-solid fa-moon"></i>
          </li>   
          <script src="..\script\js\change_mode.js"></script>
        </ul>
      </nav>
    </header>
    <main class="gallery-main">
        <section class="gallery-first">
          <div class="title-group">
              <h2 class="title">GALLERY</h2>
              <span class="trait"></span>
          </div>
          <script>
            function groupeItem(item) 
            {
              window.location.href = "../controller/gallery_control.php?type=" + item;
            }
          </script>

          <div class="list-group">
            <div class="g-dropdown">
              <div class="header-drop">
                <button class="dropdown-button"><?php if(isset($_GET['type'])){echo strtoupper($_GET['type']);}else {echo "Groupe";} ?> </button>
                <i class="fa-solid fa-caret-down" id="image-group"></i>
              </div>
              
              <div class="g-dropdown-content">
                <button onclick="groupeItem('all')">ALL</button>
                <button onclick="groupeItem('application')">APPLICATION</button>
                <button onclick="groupeItem('3d')">3D</button>
                <button onclick="groupeItem('illustration')">ILLUSTRATION</button>
              </div>
            </div>            
          </div>
          
          <div class="images">
            <div class="image">
            <?php
              if(count($imageTab)!=0)
              {
                for($i=0; $i<count($imageTab); $i++)
                {
                  // small image
                  echo '<img class="myImg" src="'.$imageTab[$i]['image_min_link'].'" alt="'.$imageTab[$i]['image_min_alt'].'">';
                  // The Modal 
                  echo '<div id="myModal" class="modal">';
                    // The Close Button
                    echo '<span class="close">&times;</span>';
                    // Modal Content (The Image) 
                    echo '<img class="modal-content" id="img" class="img01">';
                    // Modal Caption (Image Text)
                    echo '<div id="caption">';
                      echo '<h3 id="imgTitle">'.$imageTab[$i]['image_name'].'</h3>';
                      echo '<p id="imgDesc">'.$imageTab[$i]['image_description'].'</p>';
                      echo '<a id="imgLink" href="'.$imageTab[$i]['image_link'].'" download><button>Telecharger</button></a>';
                    echo '</div>';
                  echo '</div>';
                }
                echo '<script src="../script/js/modal.js"></script>';              
              }
              else
              {
                echo '<p class="empty_search">Aucune image!</p>';
              }
            ?>
            </div>
          </div>
        </section>
    </main>
    <!-- Adding the footer -->
    <?php 
      require "re_used_php_code/footer.html";
    ?>
</html>