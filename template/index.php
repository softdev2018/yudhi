<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Template Website Bootstrap</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 element dan media queris -->

    <!-- Custom CSS -->
    <link href="assets/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <!-- Bagian Header -->
      <div class="row">
        <div class="col-md-12 header" id="site-header">
          <!-- Isi Header -->
          <header>
            <h1 class="title-site">Belajar Bootstrap</h1>
            <p class="description">Belajar Membuat Template Website Dengan Bootstrap</p>
          </header>
          <nav class="menus">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Portofolio</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- End Bagian Header -->

      <!-- Bagian Wrapper 2 Kolom -->
      <div class="row">
        <div class="col-md-8 articles" id="site-content">
          <!-- Isi content -->
        <article class="posts">
          <h2 class="title-post"></h2>
          <div class="meta-post">
              <span><em class="glyphicon glyphicon-user"></em>Goodhel</span>
              <span><em class="glyphicon glyphicon-time"></em>30 Januari 2018</span>
          </div>
          <div class="content">
              <p>Ketika mimpu yang begitu indah tak pernah terwujud ya sudahlah</p>
              <p>Jangan pernah menyesali apapun yang kamu lakukan</p>
          </div>
        </article>
        </div>
        <div class="col-md-4 sidebar" id="site-sidebar">
          <!-- Isi sidebar -->
          <aside class="widgets">
            <h3 class="widget-title">Lastest Post</h3>
            <ul>
              <li><a href="#">Post 1</a></li>
              <li><a href="#">Post 2</a></li>
              <li><a href="#">Post 3</a></li>
              <li><a href="#">Post 4</a></li>
            </ul>
          </aside>
        </div>
      </div>
      <!-- End Wrapper -->

      <!-- Bagian footer -->
      <div class="row">
        <div class="col-md-12 footer" id="site-footer">
      <!-- Isi footer -->
          <footer class="copyright text-center"><p>&copy; 2018 Goodhel.com</p></footer>
        </div>
      </div>
      <!-- End footer -->
      </div>

    <!-- Happy Code-->

    <!-- jQuery online menggunakan CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- jQuery lokal -->
    <script src="assets/jquery/jquery.min.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/custom.js"></script>
  </body>
</html>
