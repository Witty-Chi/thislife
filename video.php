
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Video Model Detection</title>

    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>
    
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Video Model Detection</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Select Option <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      <li><a href="video.php">Any Objects</a></li> 
                       <li><a href="car.php">Find car</a></li>

                         <li><a href="person.php">Find Person</a></li> 

                    
                  </ul>
                </li>
              </ul>
            </div>
           
          </div>
        </nav>
 <div>
    <form action="video.php">          
<?php  
 $output=  array("plow(88.67%)","tiger_beetle(85.31%)","tiger_beetle(80.313%)","tiger_beetle(95.41%)","tiger_beetle(85.77%)","yellow_lady's_slipper(95.89%)","yellow_lady's_slipper(80.01%)","yellow_lady's_slipper(75.79%)","yellow_lady's_slipper(85.89%)","walking_stick(80.77%)","walking_stick(88.77%)","monarch(95.45%)");

 for($i=0;$i<count($output);$i++){
  echo $output[$i]."<br/>";
  sleep(3);
 }

     
     
 

     
?>
            </div>
      </div>
    </div>


   

    </div>
    
      

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
