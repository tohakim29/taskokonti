<?php
session_start();
include "db.php";
/////////////////////////////////////////
/////////////////////////////////////////
//Look main.js all posts come from main.js
/////////////////////////////////////////
/////////////////////////////////////////

if(isset($_POST["promoPost"])){     //category comes from main.js function(cat) tut 7
    $number  = $_POST["promoPost"]; 
    $expired = 0;  //0 is not expired 1 is expired

    $sql = "INSERT INTO `table_promo`( `promo_num`, `expired`, `date_created`) 
    VALUES ('$number','$expired', NOW()   )";
    if(mysqli_query($con,$sql)){
        echo "
              <div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'> </a><b>Промокод создан...!</b>
              </div>
              <br><br>

              <div class='container'>
              <a href='usePromo.php' > 
                <button type='submit' class='btn btn-primary' id='codePromoButton'>Использовать</button>
              </a>
              </div>
               
              ";
     }
     
}


if(isset($_POST["eventPosting"])){     //category comes from main.js function(cat) tut 7
  $eventPosting  = trim($_POST["eventPosting"]) ; 
  $sql = "SELECT * FROM table_promo WHERE promo_num ='$eventPosting'  ";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result);

  if(mysqli_num_rows($result) == 1 && $row['expired'] == 0 ){    
               echo "<h4 style='color:red'>Промокод подтвержден в базе </h4>";
  }elseif(mysqli_num_rows($result) == 1   && $row['expired'] == 1){        
              echo "<h4>Промокод использован c заказом id: {$row['order_id']}</h4>";
  }else{
           echo "<h4>Промокод не найден! Получите промокод
                    <a href='index.php'> Здесь</a>
                </h4>
                ";
  }
}



if(isset($_POST["go"])){     //category comes from main.js function(cat) tut 7
  if(isset($_POST["promoCode"]) and isset($_POST["order_idInput"]) ){   
    $promo_num  =  $_POST["promoCode"];
    $order_id   =  $_POST["order_idInput"];
    $expired    = 1; 

    $sql_query = "SELECT * FROM `table_promo` WHERE promo_num = '$promo_num'";
    $result = mysqli_query($con, $sql_query);
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1 && $row['expired'] == 1 ){    
                               echo "<h4 style='color:red'>Промокод был уже использован. Получите новый! <a href='index.php'> Здесь</a>  </h4>";
    }elseif(mysqli_num_rows($result) == 1   && $row['expired'] == 0){ 

                              $sql = "UPDATE `table_promo` SET 
                              `expired`='$expired', `order_id`='$order_id',  `date_used`=NOW() WHERE promo_num ='$promo_num'";
                              if(mysqli_query($con,$sql)){
                                  echo "
                                        <div class='alert alert-success'>
                                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>  </a><b>Ваш Промокод успешно использован!</b>
                                        </div>
                                        <br><br>

                                        
                                        
                                        ";
                              }
                       
        }

                         
  }
}



