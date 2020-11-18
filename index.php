<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Movie Planet</title>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>
<body>
        <h1 clas="jumbotron">Find Your Pokemon</h1>
        <form id="pokeform">
            <div class="text">
                Pokemon ID: <select id ="pokeNum" name="pokeNum">
                                <option>Select One</option>
                            </select><br>
                <input type ="submit"  value ="Look Up" class="btn btn-outline-primary">
            </div>
            
        </form>
        
        <div class ="text">
            Your pokemon is...
        </div>
        <div id ="sprites" style="text-align:center">
            
        </div>
        <div id ="name" class="text">
        </div>
         <div id ="type" class ="text"> 
        </div>
        <section id="carousel">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="poke-image" class="d-block w-100" src="img/poke0.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke1.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke2.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke3.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke4.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke5.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke6.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke8.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke11.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke12.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke13.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke14.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke15.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke16.png" alt="poke-profile">
                    </div>
                    <div class="carousel-item">
                        <img class="poke-image" class="d-block w-100" src="img/poke17.png" alt="poke-profile">
                    </div>
                    <!--<div class="carousel-item">-->
                    <!--    <img class="poke-image" src="img/poke18.png" alt="poke-profile">-->
                    <!--</div>-->
                    <!--<div class="carousel-item">-->
                    <!--    <img class="poke-image" src="img/poke19.png" alt="poke-profile">-->
                    <!--</div>-->
                    <!--<div class="carousel-item">-->
                    <!--    <img class="poke-image" src="img/poke20.png" alt="poke-profile">-->
                    <!--</div>-->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
    </div>
    </section>
        <footer>
            <p class="footer">CST 336 Internet Programming. 2020&copy; Singh</p><br/>
        </footer>
        
        
        <!--JS files-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/master.js"></script>
    </body>
     
  
</html>