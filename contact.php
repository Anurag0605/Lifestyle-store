<?php
 
 include './include/common.php';

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Lifestyle store|| Contact Us</title>
    <style>
       
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{

             width: 100%;
            height: 100%;
            
             background-image: url('https://storage-asset.msi.com/template/images/contact_us/kv-contact-us-xs.jpg') ; 
            
            
            background-size: cover;
            background-attachment: fixed; 
           
            display: flex; 
             flex-direction: column;
           
           
        }
        .para{
            width: 65%;
            position: relative;
            margin-left: 3rem;
        }
        .mh{
            width: 65%;
            margin-left: 3rem;
            border-bottom: 4px solid black;
            

        }
        .maincontact{
            width: 65%;
            margin-left: 2rem;
            display: flex; 
             flex-direction: column;
             min-height: 100vh;
            padding: 2rem;
        }
        .btn{
            
            width: 7rem;
        margin: auto;
            margin-top: 2.5rem;
            
        }
        .footer{
            display: flex;
            flex-direction: row ;
            width: 100%;
            background-color: rgb(36, 34, 34);
            color: rgb(239, 248, 248);
            flex-wrap: nowrap;
            margin-top:2rem;
            
        
        }
        .info{
            display: block;
            width: 33%;
            flex-wrap: nowrap;
            font-size: 0.8rem;
           
        }
        .acc{
            display: block;
            width: 33%;
            flex-wrap: nowrap;
            font-size: 0.8rem;
           
        }
        .cont{
            display: block;
            width: 33%;
            flex-wrap: nowrap;
            font-size: 0.8rem;
           
        }
        a{
            display: block;
            text-decoration: none;
            color: white;
            font-size: 0.8rem;
        }
        @media (max-width: 450px) {
            .footer{
                visibility: hidden;
            }
        }
        nav{
            height: 4rem;
        }
        .nav-item{
           
            color: red;
        }
        .nav-item{
          justify-content: center;
          align-items: center;
         
          font-size: 1.2rem;

        }
        .navbar-brand{
          font-size: 1.5rem;
        }

    </style>
    
  </head>
  <body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Lifestyle store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign up</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More!!
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="about.php">About us</a></li>
            <li><a class="dropdown-item active" href="contact.php">Contact Us</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="products.php">Products</a></li>
          </ul>
        </li>
        
      </ul>
   
    </div>
  </div>
</nav>
 
    
    <h2 class="mh">Live Support!!</h2>
   
    <p class="para">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi officia explicabo dolores ipsa quisquam placeat, asperiores quibusdam! Eligendi repellat numquam incidunt sapiente animi, vero odio, minima aut itaque aperiam, nobis quisquam temporibus veritatis officia rerum deserunt quia dolorum! Voluptas reiciendis excepturi eius laboriosam nemo tempora, temporibus commodi recusandae suscipit omnis et doloribus quam autem?</p>
    <div class="maincontact">
        <h2> CONTACT US</h2>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Email-id</label>
            <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter your e mail">
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 5.5rem"></textarea>
            <label for="floatingTextarea2">Your query</label>
          </div>
          <button type="button" class="btn btn-info">Submit</button>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->


    
    <footer>
        <div class="footer">
            <div class="info">
                <h5>Information</h5>
                <a href="about.html"> About us</a>
                <a href="contact.html"> Contact us</a>
            </div>
            <div class="acc">
                <h5>My account</h5>
                <a href="Login.php">Log in</a>
                <a href="signup.php">Signup</a>
            </div>
            <div class="cont">
                <h5>Contact us</h5>
               <p> contact: +91 9136228224</p>
               
            </div>
        </div>
    </footer>
  </body>
</html>