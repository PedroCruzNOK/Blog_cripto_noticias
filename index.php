<?php 
  
 
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blockchain & Criptomonedas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blockchain & Criptomonedas noticias forever and ever </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <?php 
            foreach ($blogPosts as $blogPost) {
                echo '<div class="blog-post">';
                  echo '<h2>'. $blogPost['title'] .'</h2>';
                  echo '<p>jan 1, 2020 by <a href="">Alex</a></p>';
                  echo '<div class="blog-post-image">';
                    echo '<img src="images/prueba2.jpg" alt="">';
                  echo '</div>';
                  echo '<div class="blog-post-content">';
                    echo $blogPost['content'];
                  echo '</div>';
                echo '</div>';
            }
           ?>
        </div>
        <div class="col-md-4">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <footer>
            Ese es el footer
            <br>
            <a href="admin/index.php">Admin Panel</a>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>
