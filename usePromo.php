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
    
           <script>
                 var randomnum = localStorage.getItem("sessionPromo");
           </script>
           <?php 
           $_SESSION['numbertoguess'] = '<script>document.write(randomnum)</script>';
           $session_value = ltrim($_SESSION['numbertoguess']);
        
           ?>
     
    <div class="container">
 
    <h1> Заказ Окна</h1>

      
     <form method="POST" >
              
                <label for="promoCode">Ваш промокод: <?php echo $session_value;  ?> или укажите другой промокод</label>
                <input type="text" class="form-control" id="promoCode" name="promoCode" onclick="checkValueInput()"  />
                <div id="showInputvalue"></div>

                <label for="order_id">Заказ id</label>
                <input type="text" class="form-control" id="order_idInput" name="order_idInput" onclick="orderLength()"   />
                <div id="showInputOrdervalue"></div><br /> 
                 

                <input type="submit" class="btn btn-success" style="float: left;" id="usePromocode" onclick="func()" value="Использовать" /><br /> 
                     
     </form>

     
     

    </div>
    <br /><br /><br />
    
    <div class="container">

      <h1 id="getMess"></h1>
    </div>
    
    





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
         
    
    <script  src="https://code.jquery.com/jquery-1.11.3.min.js"
      integrity="sha256-7LkWEzqTdpEfELxcZZlS6wAx5Ff13zZ83lYO2/ujj7g="
      crossorigin="anonymous">
    </script>
     

    <script src="main.js"></script>
  </body>
</html>