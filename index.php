
<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Basic Banking System</title>
<style>
  h1{
    font-size:45px;
    color:rgb(23 58 96 / 91%);
    font-weight: bold;
    transition: 0.5s;
    text-align: center;
    font-style: oblique;
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-top: 10%;
    margin-left: 5%;
    
}
button{
	border: 2px solid #f8f9fa;
    border-radius: 8px;
    padding: 10px;
    color: #f8f9fa;
    letter-spacing: 1.5px;
    font-size: 18px;
    transition: 0.5s;
    background: #117a8b;
}



.action{
	text-align: center;
	font-family: Georgia, 'Times New Roman', Times, serif;
  font-style: oblique;
  font-size:50px;
  text-decoration:underline;
  color:#1163ac;
  transition:0.3s;
  cursor: pointer;
}
.im{
  margin:6px;
  border:1px solid black;
}

.intro{
	background:rgb(0 123 255 / 25%);
}

button:hover{
	background-color:#ccc6c6;
  color:black;
}

footer{
	color:#586776;
	background-color:#EAF0F1;
	letter-spacing: 0.5px;
  
	
}

</style>



  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  
                  <h1>Welcome To TSF Bank!</h1>
                  <h6 style="font-size:20px; margin-left:45px;">A Basic Banking System For Making Trasactions Easy!</h6>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img class="im" src="img/logo.png" class="img-fluid pt-2">
              </div>
            </div>

      
          <br>
          <br>
          <br>
          <h3 class="action" ><span>Get Started!</h3></span>
          <br>
          <section class="container" id="services">
    
    <div class="container  text-center">
      <div class="row">
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="img/customer.png" class="card-img-top mt-3 img"  height="200px" alt="Responsive image">
          <div class="card-body">
            <br>
            <br>
            <h5 class="card-title">View Customers</h5>
            <p class="card-text">View all Customer's data</p>
            <a href="transfermoney.php" class="btn btn-primary">View Customers</a>
          </div>
        </div>
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="img/transactions.png" class="card-img-top mt-3 img" height="200px" alt="Responsive image">
          <div class="card-body">
            <h5 class="card-title">View Transactions</h5>
            <p class="card-text">View all the past transactions happened between different accounts</p>
            <a href="transactionhistory.php" class="btn btn-primary">View Transactions</a>
          </div>
        </div>
        <div class="card col-md-3 mx-auto" style="width: 18rem;">
          <img src="img/transfer.jpg" class="card-img-top mt-3 img" height="200px"  alt="Responsive image">
          <div class="card-body">
            <br>
            
            <h5 class="card-title" id="harry">Transfer Money</h5>
            <p class="card-text"> Transfer Money between multiple accounts</p>
            <a href="transfermoney.php" class="btn btn-primary">Transfer Money</a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
      <br>
      <footer class="text-center mt-5 py-3">
        <p>A Project by <b>Sayali Shende</b> <br> </p>
      </footer>
     
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>