<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="Stylesheet" type="text/css" href="https://mdbootstrap.com/img/Photos/Others/imhttps://www.google.com/search?q=audi&rlz=1C1CHBF_enUS1033US1033&sxsrf=ALiCzsbJO0s3qVNoF6MvNatoE1_hlfiaNQ:1670830472657&source=lnms&tbm=isch&sa=X&ved=2ahUKEwilt7XGyPP7AhUmnXIEHWu7BLgQ_AUoAXoECAEQAw&biw=1280&bih=569&dpr=1.5#imgrc=x99zHpBA-8jeSMages/76.jpg">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script>
                const onClick = () => {
                    console.log("Console")
                    let val = document.getElementById('queryVal');
                    console.log(val.value);
                    var a = document.getElementById('clickLink'); //or grab it by tagname etc
                    a.href = val.value+".php";
                }
             </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>   
<body>
  <!--Main Navigation-->
  <header>
  <centre><h1> OLA CABS </h1></centre>
  <centre><a href="renting.php"
                  role="button">Reserve</a></centre>
            <br>
            <br>
            <label> querys: </label> 
            <select id="queryVal" onchange="onClick()">
               <option value="query1"> QUERY1 </option> 
               <option value="query2"> QUERY2 </option>
             </select>
             <!-- <button CLASS="CLICK"><a href="querry.html">Click Me</a></button> -->
             <button><a href="query1.php" id="clickLink">Click Me</a></button>
             <br>
             <br>
            <div id="column4">
                <a class="nav-link" rel="nofollow" href = "index.php" target="_blank">logout</a>
            </div>
        <!--<div class="collapse navbar-collapse" id="navbarExample01">
            <ul  class="navbar-nav me-auto mb-2 mb-lg-0">
                <li id="column1"class="nav-item active">
                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" rel="nofollow" href = "renting.php"
                target="_blank">rent a car</a>
                </li> 
                <li id="column2" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        queries</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="query1.php">query1</a>
                            <a class="dropdown-item" href="query2.php">query2</a>
                    </div>
                <li id="column3" class="nav-item">
                        <a class="nav-link" rel="nofollow" href = "index.php" target="_blank">logout</a>
                </li>
            </ul>
          
        </div> -->
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Carousel wrapper -->
   <!-- <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">-->
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
        <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
      </ol> -->

      <!-- Inner -->
      <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white text-center">
                <h1 class="mb-3">book your cabs</h1>
               
                
              </div>
              
            </div>
            
          </div>
         
        </div>
        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
            <div class="d-flex justify-content-center align-items-center h-100">
              
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="mask" style="
                background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                );
              ">
            
            </div>
          </div>
        </div>
      </div>
      <!-- Inner -->

      <!-- Controls -->
      
    </div>
    <!-- Carousel wrapper -->
  </header>
</body>
</html>