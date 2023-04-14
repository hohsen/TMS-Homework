<!-- 2. Сделал форму:

2.1 Верстаете, без функционала
2.2 Все поля должны быть атрибутами, которые позволят не отправлять форму, если она не соответствует тому, что внес пользователь. Для текстовых, ограничение по символам, для чисел, установка минимального значения
2.3 Выпадающий список NAME OF CARD должен быть реализован, через datalist
2.4 Выпадающий список STATE PROVINCE должен быть реализован, через select
2.5. EXPIRY DATE — поле с типом дата
2.6. Визуальная часть должна быть приблизительна похожа на то, что я нарисовал -->

<div class="container">
  
  <form class="form" action="" method="post">

    <!-- PAYMENT DETAILS -->
    <section class="form__container">
      <h3 class="title">PAYMENT DETAILS</h2>

        <!-- NAME OF CARD -->
        <div class="form__datalist">
            <input 
            class="form__input"
            required 
            type="text" 
            id="card" 
            name="usercard" 
            list="cardname" 
            placeholder="NMAE OF CARD"
            />
        
            <datalist id="cardname">
              <option class="form__datalist_item">Visa</option>
              <option class="form__datalist_item">Mastercard</option>
              <option class="form__datalist_item">Ametican Express</option>
              <option class="form__datalist_item">Revolute</option>
            </datalist>
        </div>

      <div class="box">
        <!-- CARD NUMBER -->
        <div class="box__item">
            <input 
            class="form__input"
            required 
            type="number" 
            id="cardnum" 
            name="cardnumber" 
            placeholder="CARD NUMBER"
            />
        </div>
        <!-- EXPIRE DATE -->
        <div class="box__item">
            <input 
            class="form__input"
            required
            type="text" 
            id="date" 
            name="expiredate" 
            placeholder="EXPIRE DATE" 
            onfocus="(this.type='date')" 
            onblur="(this.type='text')" 
            min="2023-04-13"
            />
        </div>
        <!-- CVV -->
        <div class="box__item">
            <input 
            class="form__input"
            required 
            type="password" 
            id="cvv" name="cardcvc" 
            placeholder="CVV" 
            minlength="3"
            maxlength="3"
            pattern="[0-9]*"
            />
        </div>
      </div>
    </section> 

    <!-- BILLING ADDRESS -->
    <section class="form__container">
      <h3 class="title">BILLING ADDRESS</h3>

      <div class="box">
        <!-- NMAE ON CARD -->
        <div class="box__item">
            <input 
            class="form__input"
            required 
            type="text" 
            id="nameoncard" 
            name="nameoncard" 
            placeholder="NMAE ON CARD"
            />
        </div>
        <!-- CITY -->
        <div class="box__item"> 
            <input 
            class="form__input"
            required 
            type="text" 
            id="city" 
            name="city" 
            placeholder="CITY"
            />
        </div>
      </div>

      <div class="box">
        <!-- STATE PROVINCE -->
        <div class="box__item">
            <select class="form__dropdown" required id="country" name="country">
              <option class="form__dropdown_item" value="" disabled selected hidden>COUNTRY</option>
              <option class="form__dropdown_item" value="lv">Latvia</option>
              <option class="form__dropdown_item" value="ru">Russia</option>
              <option class="form__dropdown_item" value="pl">Poland</option>
              <option class="form__dropdown_item" value="de">Germany</option>
            </select>      
        </div>
        <!-- ZIP CODE -->
        <div class="box__item">
            <input 
            class="form__input"
            required 
            type="text" 
            id="zip" 
            name="zipcode" 
            placeholder="ZIP CODE"
            />
        </div>
      </div>
    </section>

    <!-- PAY -->
    <div class="btn">
      <button class="btn-submit" type="submit" name="pay">PAY</button>
    </div>
  </form>
</div>




<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
  }

  .container{
    display: flex;
    height: 100%;
    justify-content: center;
    align-items: center;
  }

  .form{
    width: 70%;
  }

  .title{
    font-size: 24px;
    text-transform: uppercase;
    margin-bottom: 20px;
  }

  .form__container{
    margin-bottom: 50px;
  }

  .form__datalist{
    width: 100%;
    font-size: 16px;
  }

  .form__dropdown{
    width: 100%;
    font-size: 16px;
    padding: 10px 0 9px 0;
    border-bottom: 1px solid #000;
    color: #636c72;
  }

  .form__dropdown_item:not(:first-of-type) {
    color: #000;
  }

  .form__input{
    padding: 10px 0 10px 4px;
    width: 100%;
    font-size: 16px; 
    border-bottom: 1px solid #000;
  }

  .form__datalist_item{
    width: 100%;
    font-size: 16px;
    line-height: 140%;
    padding: 5px 0;
  }

  .form__dropdown_item{
    width: 100%;
    font-size: 16px;
    line-height: 140%;
    padding: 5px 0;
  }

  .box{
    display: flex;
    gap: 30px;
    justify-content: space-between;

  }

  .box__item{
    flex: 1;
  }

  .btn{
    display: flex;
    justify-content: flex-end;
  }

  .btn-submit{
    font-size: 20px;
    border-radius: 8px;
    padding: 15px 150px;
    background-color: #000;
    color: #fff;
    cursor: pointer;
  }
</style>