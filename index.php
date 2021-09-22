<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Article FRUCTCODE.COM. How to send html-form with Ajax.</title>
  <meta name="description" content="Article FRUCTCODE.COM. How to send ajax form.">
  <meta name="author" content="fructcode.com">

  <script src="https://kit.fontawesome.com/a5580451e1.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>

</head>
<style>
  body
  {
      padding: 50px;
      background: url(img/index.jpg)  no-repeat;
      background-size: 100%;
  }
  .form 
  {
      height: 100%;
      text-align: center;
      padding: 50px 0;
  }
  
.form_block
{
    display: flex;
    background: #fff;
    justify-content: space-around;
    clip-path: polygon(30% 0%, 100% 0, 80% 100%, 0% 100%);
    background: linear-gradient(90deg, rgba(252,252,252,0.006039915966386533) 1%, rgba(255,255,255,0.8603816526610644) 39%);
}
  .form_input
  {
      padding: 10px 0 10px 254px ;
      font-size: 17px;width: 50%;
      background: none ;
      margin-right: -32px;
      color: darkgray;
      border: 1px solid #fff ;
      border-right: none;
      clip-path: polygon(30% 0%, 100% 0, 100% 100%, 0% 100%);

  }
  .form_input:active,  :focus {
    outline: 0;
    outline-offset: 0;
    background: none ;
}
.input_button
{  
    border: 2px solid rgb(231, 227, 227) ;
    padding: 10px ;
    width: 50%;
    font-size: 17px;
    color: #fff;
    margin-left: 16px;
    background: red;
    clip-path: polygon(30% 0%, 100% 0, 60% 100%, 0% 100%);
}

.input_button:active
{
    border: 2px solid rgb(231, 227, 227) ;

}
#result_form
{
  position: absolute;
  width: 60%;
}
#btn
{
  
  background: red;
  color: #fff;
  border:none;
  font-size: 20px
}
#btn:active
{
  border:none;
}
@media (min-width: 768px) and (max-width: 1024px)
{
    
    .form_input
    {
        padding: 10px 0 10px 179px ;

    }
}
@media (min-device-width: 568px) and (max-device-width: 768px)
{
        
    .input_button
    {
        clip-path:none;
        padding: 10px;
    }
    .form_input
    {
        clip-path:none;
        
        padding: 10px;
    }
    .form_block
    {
        justify-content: space-between;
        clip-path:none;
    }


}

@media (min-device-width: 320px) and (max-device-width: 568px)
{
        
    .input_button
    {
        clip-path:none;
        padding: 10px;
    }
    .form_input
    {
        clip-path:none;
        
        padding: 10px;
    }
    .form_block
    {
        justify-content: space-between;
        clip-path:none;
    }
}



</style>

<body>
    <form method="post" id="ajax_form" action=""  class="form">  
      <div class="form_block" id="fro"> 
        <input type="text" name="name" placeholder="Номер" class="form_input" />
       <div class="input_button"> <input type="button" id="btn" value="Заказать"  />  <i class="fas fa-cart-arrow-down"></i></div>
      </dix>
    </form>
    <div id="result_form" ></div> 
</body>
</html>