<!-- 2. Сделал форму:

2.1 Верстаете, без функционала
2.2 Все поля должны быть атрибутами, которые позволят не отправлять форму, если она не соответствует тому, что внес пользователь. Для текстовых, ограничение по символам, для чисел, установка минимального значения
2.3 Выпадающий список NAME OF CARD должен быть реализован, через datalist
2.4 Выпадающий список STATE PROVINCE должен быть реализован, через select
2.5. EXPIRY DATE — поле с типом дата
2.6. Визуальная часть должна быть приблизительна похожа на то, что я нарисовал -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ_19</title>
    <link rel="stylesheet" href="style/main.css">
</head>

<body>
    <div class="container">
        <form class="form" action="" method="post">
            <section class="payment-details">
                <div class="container">
                    <h3 class="title">PAYMENT DETAILS</h3>
                    <div></div>
                </div>
            </section>

            <section class="billing-address">
                <h3 class="title">BILLING ADDRESS</h3>
            </section>
            <button class="btn" type="submit" name="submit">PAY</button>
        </form>
    </div>
</body>
</html>








<div class="parent">
  <form class="form" action="" method="post">

    <!-- PAYMENT DETAILS   -->
    <section class="payment-details">
      <h3 class="title">PAYMENT DETAILS</h2>
      <div class="box">

        <!-- NAME OF CARD -->
        <div class="form__datalist">
            <input 
            require 
            type="text" 
            id="card" 
            name="usercard" 
            list="cardname" 
            placeholder="NMAE OF CARD"
            />
        
            <datalist id="cardname">
              <option>Visa</option>
              <option>Mastercard</option>
              <option>Ametican Express</option>
              <option>Revolute</option>
            </datalist>
        </div>

        <!-- CARD NUMBER -->
        <div class="payment-details__cardnumber">
            <input 
            class="form__input"
            required 
            type="number" 
            id="cardnum" 
            name="cardnumber" 
            placeholder="CARD NUMBER"
            value="<?php if(strlen($cardnum) !== 16) echo 'error'; ?>"
            />
        </div>

        <!-- EXPIRE DATE -->
        <div class="payment-details__expiredate">
            <input 
            required
            type="date" 
            id="date" 
            name="expiredate" 
            min="2023-04-13"
            />
        </div>

        <!-- CVV -->
        <div class="payment-details__cvv">
            <input 
            required 
            type="password" 
            id="cvv" name="cardcvc" 
            placeholder="CVV" 
            min="3" 
            max="3"
            />
        </div>
      </div>
    </section> 

    <!-- BILLING ADDRESS -->
    <section class="billing-address">
      <h3 class="title">BILLING ADDRESS</h3>
      <div class="box">

        <!-- NMAE ON CARD -->
        <div class="billing-address__nameoncard">
            <input 
            required 
            type="text" 
            id="nameoncard" 
            name="nameoncard" 
            placeholder="NMAE ON CARD">
        </div>

        <!-- STATE PROVINCE -->
        <div class="billing-address__state-province">
            <select required id="country" name="state-province">
              <option value="" disabled selected hidden>STATE PROVINCE</option>
              <option value="lv">Latvia</option>
              <option value="ru">Russia</option>
              <option value="pl">Poland</option>
              <option value="de">Germany</option>
            </select>      
        </div>

        <!-- CITY -->
        <div class="billing-address__city"> 
            <input 
            required 
            type="text" 
            id="city" 
            name="city" 
            placeholder="CITY"
            />
        </div>

        <!-- ZIP CODE -->
        <div class="billing-address__zipcode">
            <input 
            required 
            type="text" 
            id="zip" 
            name="zipcode" 
            placeholder="ZIP CODE"
            />
        </div>
      </div>
    </section>

    <!-- PAY $888 -->
    <button class="btn-pay" type="submit" name="pay">PAY $888</button>

  </form>
  
</div> 




