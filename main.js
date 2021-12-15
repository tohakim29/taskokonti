///Look index.php////////////////////////////////////////////////////////////////////////
///button, Generates a promocode  index.php and create random numbers for promo///////////////////////////////
///////////////////////////////////////////////////////////////////////////
const value = document.querySelector("#value");
const btn   = document.querySelector("#codePromoButton");

btn.addEventListener('click', function () {
                //////random promo code generate 
            var arr = [];
            while(arr.length < 16){
                var randNum = Math.floor(Math.random() * 10) ;
                arr.push(randNum);
            }

            let promoNumber = "";
            for (let x in arr) {
                promoNumber += arr[x]; 
            }   

            console.log(promoNumber);
            value.innerHTML = promoNumber;
            
            //promo number storing in session as sessionPromo
            localStorage.setItem('sessionPromo', promoNumber);
            
            
            
            ////// 
                
            
            /////сохраняем в базу данных через ajax.
            $.ajax({
                    url    : "actionAjax.php",
                    method :  "POST",           
                    data   :  {promoPost: promoNumber},                 
                    success: function(data){
                            $("#valueSecond").html(data);                               
                    }                                              
                });
            /////     
 
});


////Look usePromo.php///////////////////////////////////////////////////////////////////////
////////// Check, promocode in database if exists//////////////
///////////////////////////////////////////////////////////////////////////   
function checkValueInput() {
                const promoCodeInput = document.querySelector('#promoCode');
                const showInputvalue = document.querySelector('#showInputvalue');

                promoCodeInput.addEventListener( 'input', function(event){
                        let eventTargetValue = event.target.value
                        //showInputvalue.textContent =  eventTargetValue;
                
                            $.ajax({
                                url    : "actionAjax.php",
                                method :  "POST",
                                
                                data   :  {eventPosting: eventTargetValue},                 
                                success: function(data){
                                    $("#showInputvalue").html(data);    
                                                    
                                }                                              
                            });






                });
}   

///Look usePromo.php////////////////////////////////////////////////////////////////////////
///////////// Check, check order_id for 6 numbers//////////////
///////////////////////////////////////////////////////////////////////////
function orderLength() {
        
        const order_idInput = document.querySelector('#order_idInput');
        const showInputOrdervalue = document.querySelector('#showInputOrdervalue');

    order_idInput.addEventListener('input', function (event) {      
        const eventTargetValue = event.target.value;
        
            if( eventTargetValue.length !== 6 ){
                showInputOrdervalue.textContent = "id заказа должен содержать 6 цифр";
            }else{
                showInputOrdervalue.textContent = "";
                
            }

           
    })


}
///Look usePromo.php////////////////////////////////////////////////////////////////////////
//////////////// click Promocode button, Database update and store all values//////
///////////////////////////////////////////////////////////////////////////


function func() {
    
    const usePromocode = document.querySelector("#usePromocode");
    const getMess = document.querySelector("#getMess");
   
   
        
        var promoCode   = $("#promoCode").val();        
        var order_idInput  = $("#order_idInput").val();

        
        $.ajax({
            url    : "actionAjax.php",
            method :  "POST",   
            cache: false,     
            data   :    {go : 1, promoCode: promoCode , order_idInput: order_idInput   },                 
            success: function(data){
               
                   
                        $("#getMess").html(data);  
                        $("#usePromocode").delay(1000).fadeOut(800); 
                    
                
                          
            }                                              
        });
                        
  
  
    
}
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
   
   


