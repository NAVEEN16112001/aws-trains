<html>
    <head>
        <title> paymene tab</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
        <style>
            * {
    box-sizing: border-box;
}
 
body,
html {
    height: 100%;
    min-height: 100%;
}
 
body {
    font-family: 'Roboto',
    sans-serif;
    margin: 0;
    background-color: #e7e7e7;
}
.credit-card {
    width: 360px;
    height: 400px;
    margin: 60px auto 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #fff;
    box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}
.form-header {
    height: 60px;
    padding: 20px 30px 0;
    border-bottom: 1px solid #e1e8ee;
}
 
.form-body {
    height: 340px;
    padding: 30px 30px 20px;
}
.title {
    font-size: 18px;
    margin: 0;
    color: #5e6977;
}
.card-number,
.cvv-input input,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.cvv-details,
.cvv-input input,
.month select,
.year select {
    opacity: .7;
    color: #86939e;
}
.card-number {
    width: 100%;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
}
.month select,
.year select {
    width: 145px;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: url('caret.png') no-repeat;
    background-position: 85% 50%;
    -moz-appearance: none;
    -webkit-appearance: none;
}
 
.month select {
    float: left;
}
 
.year select {
    float: right;
}
.cvv-input input {
    float: left;
    width: 145px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: #fff;
}
 
.cvv-details {
    font-size: 12px;
    font-weight: 300;
    line-height: 16px;
    float: right;
    margin-bottom: 20px;
}
 
.cvv-details p {
    margin-top: 6px;
}
.paypal-btn,
.proceed-btn {
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    border-color: transparent;
    border-radius: 6px;
}
 
.proceed-btn {
    margin-bottom: 10px;
    background: #7dc855;
}
 
.paypal-btn a,
.proceed-btn a {
    text-decoration: none;
}
 
.proceed-btn a {
    color: #fff;
}
 
.paypal-btn a {
    color: rgba(242, 242, 242, .7);
}
 
.paypal-btn {
    padding-right: 95px;
    background: url('paypal-logo.svg') no-repeat 65% 56% #009cde;
}
#topclass{
    background-color:rgb(255, 173, 20);
    width:100%;
    height:150px;
    position: relative;
}
#topclass img{
    height:120px;
    width:auto;
    margin-left: 70px;
    position: absolute;
    bottom:20px;
}
#headtext{
    text-align: center;
    color:white;
    width:auto;
    margin-left:50px;
    font-size: 110%;
    font-weight: bolder;
    word-spacing: 10px;
}
#p1{
    font-size: 150%;
    font-weight: bolder;
}
.content1 {
    margin:auto;
}
.content2{
    background-color: lightyellow;
    margin-top:4%;
    padding: 10px;
}
.content2 nav nav-pills{
    margin-top: 7%;
}
.nav nav-pills{
     padding: 10px;
}
.active1{
    margin-left:3%;
    display: inline;
    border:20px;
    background-size: cover;
}
.active1 a{
    margin-top: 10%;
    background-color: yellowgreen;
    color: black;
    border-radius: 10px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 150%;
    font-weight: bolder;
    padding: 20px;
    margin-left: 2%;
}
.details h3{
    margin-left: 5%;
    font-size: 30px;
    text-align:center;
    line-height: 90px;
    border: 5px solid black;
    margin-left: 20%;
    margin-right: 20%;
}
.dk{
    text-decoration: none;
    background-color: brown;
    color:white;
    padding:6px;
}
        </style>
    </head>
    <body>
          
        <form class="credit-card" method="post" action="payment2.html">
            <div class="form-header">
              <h4 class="title">Credit/debit card detail</h4>
            </div>
           
            <div class="form-body">
                card Number:
              <!-- Card Number -->
              <input type="text" class="card-number" placeholder="Card Number ****"> 
           
              <!-- Date Field -->
              <div class="date-field">
                <div class="month">
                  <select name="Month">
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                  </select>
                </div>
                <div class="year">
                  <select name="Year">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                  </select>
                </div>
              </div>
           
              <!-- Card Verification Field -->
              <div class="card-verification">
                <div class="cvv-input">
                  <input type="text" placeholder="cvv">
                </div>
                <div class="cvv-details">
                  <p>3 or 4 digits usually found <br> on the signature strip</p>
                </div>
              </div>
           
              <!-- Buttons -->
              <button type="submit" name="submit" class="proceed-btn"><a href="msg.php">Proceed</a></button>
              <button type="submit" class="paypal-btn"><a href="">Pay With(soon will update)</a></button>
            </div>
          </form>
          <div class="dk">
          <h2><a href="reser.php"> GO TO BACK PAGE </a></h2>
              <h2><a href="index.php"> GO TO MAIN PAGE </a></h2>
          </div>
    </body>
</html>