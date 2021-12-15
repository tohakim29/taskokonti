<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags 50.42 -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Code</title>
  </head>



  <body>
      <!-- --------------------------------------------->     
      <!-- --------------Generate a promocode button---->
      <!-- --------------------------------------------->
       <div class="container">
        <div class="alert alert-primary" >
                <h1>Получите ваш промокод</h1><br>
        </div>
                      <br><br>
                      <div class="container">
                        <button type="submit" class="btn btn-success btn-decrease " id="codePromoButton" >Сгенерировать</button>
                      </div>

                      <br><br>
                      
                    
                      <h4 id="value"></h4> 
                      <h4 id="valueSecond"></h4>
                      <br><br>
       </div>       
       <br /><br /><br /><br /><br /><br />
      <!-- --------------------------------------------->     
      <!-- ------end-----Generate a promocode----------->
      <!-- --------------------------------------------->




      <!-- --------------------------------------------->
      <!-----------------Show a LIST of all promocodes--> 
      <!-- --------------------------------------------->
       <div class="container">
        <div class="alert alert-primary" role="alert">
             Список Всех Промокодов
        </div>


          <?php 
          include "db.php";
          $sql = "SELECT * FROM table_promo ORDER BY `id` DESC";       
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);

          
                      do{
                                       if($row["date_used"] === NULL ){
                                              $row["date_used"]= 'код не использован'; 
                                        }else{ 
                                              $row["date_used"];
                                        }


                                       $diff= ( strtotime( $row["date_used"]) - strtotime($row["date_created"]))/60/60/24;                                       
                                       $diff= ceil($diff);
                                       if($diff >= 0){
                                        $diff ;
                                       }else{
                                        $diff= 'код не использован';
                                       } 
                                       
                                                        
                                        echo '<div class="container mt-5">
                                                <div class="row post-list ">
                                                <div class="card" style="width:103rem">
                                                        <div class="card-body">
                                                    
                                                        <h4 class="card-title">Номер промокода :   '.$row["promo_num"].' </h4>
                                                        <p class="cart-text">Дата создания :  '.$row["date_created"].'</p>
                                                        <p class="cart-text">Дата использования :  '.$row["date_used"].'</p> 
                                                        <p class="cart-text">разница  дней :  '.$diff.' </p>
                                                        </div>
                                                    </div>
                                                </div>                                              
                                              </div>
                                            ';                           
                      }while ($row = mysqli_fetch_array($result));        

          ?>

       </div>
      <!-- --------------------------------------------->     
      <!-- ------end-----Show a LIST of all promocodes-->
      <!-- --------------------------------------------->
 
   
 








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script  src="https://code.jquery.com/jquery-1.11.3.min.js"
      integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
      crossorigin="anonymous">
    </script>
   

    <script src="main.js"></script>
  </body>
</html>: