<!DOCTYPE html>
<html>
	<head>
          <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
    	   <script src="https://use.fontawesome.com/6f31503715.js"></script>
	        <title></title>
	        <meta charset="utf-8">
	</head>
		<body>
          <header>
      <!-- debut logo -->
           <div class="container-fluid red">
            <div class="container">
              <img src="img/4.png" alt="logo">
            </div>
           </div>
      <!-- fin de logo -->

       <!-- debut de menu -->
       <?php require_once 'include/nav.php' ?>
       <!-- fin de menu -->
          </header>

          <section1 id="formation">
            <?php require_once 'include/techno.php' ?>
          </section1>
          <section2 id="avenir">
            <?php require_once 'include/avenir.php' ?>
          </section2>

          <section3>
             <?php require_once 'include/carousel.php' ?>
          </section3>

          <section4>
          <?php require_once 'include/equipe.php' ?>
          </section4>  
          <section5>
             <?php require_once 'include/map.php'; ?>
          </section5>
            <section6>
             <?php require_once 'include/formulaire.php'; ?>

          </section6>
        <footer>
         <?php require_once 'include/footer.php'; ?>
        </footer>
      <script src="js/popper.min.js" type="text/JavaScript"></script>
      <script src="js/jquery-3.2.1.min.js"></script>
         <script type="text/javascript" src="js/formulaire.js"></script>
         <script src="js/bootstrap.min.js"></script>
    </body>
</html>