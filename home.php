<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our School </title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="ICON" href="img/sikk.png">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    <style>
      body {
        background-image: url(img/bpj.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        

      }

      footer {
        bottom: 0;
      }
    </style>
</head>
<body>
         <!-- nabvar -->
<div class="">
<nav class="navbar navbar-expand-lg bg-transparent">
      <div class="container-fluid row">
        <a class="navbar-brand col-6" href="#">
          <img src="img/sikk.png" width="80px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-6" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active px-4" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-4" href="about.php">About</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link mx-4" href="contact.php">Contact</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link mx-4" href="register.php">Register</a>
            </li> 
                
            <li class="nav-item">
              <a class="nav-link mx-4" href="login.php">Login</a>
            </li>
          
           
          </ul>

          </form>
        </div>
      </div>
    </nav>
    <div class="" id="main">
      <h1 style="margin-top: 90px; text-align:center; margin-bottom: 0px; font-family: Verdana, Geneva, Tahoma, sans-serif; font-weight: bold;">Inspiring Minds, Transforming Lives</h1>
      <h4 class="text-primary" style="text-align:center; margin-top: 0px; font-weight: bold;">Your future began here</h4>
       

        
     
   
    </div>    
</section>
</div>


<!-- footer -->
<div class="text-light" style="background-color: #1484b1;">
              </div>
              <footer style="text-align: center; padding: 20px; background-color: #f8f8f8; font-size: 14px; margin-top: 400px; position: relative;">
    <p>&copy; <span id="year"></span> Your Company Name. All rights reserved.</p>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

              
 


</body>
</html>