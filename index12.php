<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="shortcut icon" href="#">
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet"  href="./style1.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>cart</title>
  </head>
  <body class="" >
      <?php
      session_start();
      if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }
    //   include 'component.php';
    error_reporting(0);
    // header("location:javascript://history.go(-1)");


  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }


      
      ?>

      <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg r3 " id="nav"> 
                        <div >
                            <i class="fab fa-amazon fs-5 ms-3 text-light"><span class="mt-5">mazon</span></i>
                
                        </div>
                                <div class="">
                                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon top-bar"></span>   
                                    <span class="toggler-icon middle-bar"></span>   
                                    <span class="toggler-icon bottom-bar"></span>   
        
                                  </button>
                                </div>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link " href="#"></i><span class=" text-light">hello</span><br><i class="fas fa-map-marker text-light "></i><span class="text-light"> Select your address</span></a>
                                </li>
                                <ul>
                                    <div class="search_wrap search_wrap_3">
                                        <div class="search_box">
                                            <input type="text" class="input" placeholder="search...">
                                            <div class="btn btn_common">
                                                <i class="fas fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                                <li class="nav-item ms-3">
                                    <a class="nav-link text-light"><span cl>hello,Sign in</span><br><span class="fs-5">Account&Lists</span></a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a class="nav-link text-light"><span>Return</span><br><span class="fs-5">&Orders</span></a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link text-light"><i class="fab fa-opencart fs-1"></i><span>cart</span></a>
                                </li>
                                <li class="nav-item">
                              <p type="button" class="text-light" onclick="myFunction2()" >logout</p>
                            </li> 
                            <script>
                            function myFunction2() {
                  location. href = "logout1.php";
                }
                </script>
                                
                    
                            </ul>
                        </div>
                    
                    </nav>

        
                </div>
            </div>
        </div>
      </section>   
      
      <section>
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="r1">
                        <nav class="navbar  ">
                            <div class="r31">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="toggler-icon top-bar"></span>   
                                  <span class="toggler-icon middle-bar"></span>   
                                  <span class="toggler-icon bottom-bar"></span>   
      
                                </button>
                              </div>
                        <div class="collapse navbar-collapse r31" id="navbarNav1">
                          <ul class="navbar nav ">
                          <li class="nav-item  ">
                              <a class="nav-link text-light" href="#">Mobiles</a>
                            </li>
                            <li class="nav-item  ">
                              <a class="nav-link text-light" href="#">Best Sellers</a>
                            </li> 
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Electronics</a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Coustomer Service</a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Fashion</a>
                            </li>
                            <div class="dropdown ">
                              <button class="btn  dropdown-toggle  text-light"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Prime
                              </button>
                              <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                  <img src="./IN-Prime-PIN-TryPrime-MultiBen-Apr18-400x400._CB442254244_.jpg">
                              </ul>
                            </div>
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Home&Kitchen</a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Today's Deal</a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Amazon pay</a>
                            </li>
                            <li class="nav-item ">
                              <a class="nav-link text-light" href="#">Computers</a>
                            </li>
                            <li class="nav-item  ">
                              <a class="nav-link text-light" href="#">Books</a>
                            </li>
                            <li class="nav-item  me-5">
                              <a class="nav-link text-light" href="#">New releses</a>
                            </li>
                          </ul>
                          </div>
                          <div class="r32">
                            <ul class="navbar nav ">
                            <li class="nav-item  ">
                                <a class="nav-link text-light" href="#">Mobiles</a>
                              </li>
                              <li class="nav-item  ">
                                <a class="nav-link text-light" href="#">Best Sellers</a>
                              </li> 
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Electronics</a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Coustomer Service</a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Fashion</a>
                              </li>
                              <div class="dropdown ">
                                <button class="btn  dropdown-toggle  text-light"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  Prime
                                </button>
                                <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                    <img src="./IN-Prime-PIN-TryPrime-MultiBen-Apr18-400x400._CB442254244_.jpg">
                                </ul>
                              </div>
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Home&Kitchen</a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Today's Deal</a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Amazon pay</a>
                              </li>
                              <li class="nav-item ">
                                <a class="nav-link text-light" href="#">Computers</a>
                              </li>
                              <li class="nav-item  ">
                                <a class="nav-link text-light" href="#">Books</a>
                              </li>
                              <li class="nav-item  me-5">
                                <a class="nav-link text-light" href="#">New releses</a>
                              </li>
                            </ul>
                            </div>
                            </div>
                        </div>
                        </nav>
                        </div>
                  </div>
              </div>
          </div>
      </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<section>

    <div class="container-fluid">
        <div class="row">
            <div class="">
                <div class="shopping-cart">
                    <h3>Mycart</h3>
                    <hr>
                    <?php
include 'config.php';
$sql="SELECT * FROM product1";
$results=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($results))
{ 
    // $total=0;



?>
                    
                        <?php
                        if(isset($_SESSION['cart'])){
                        $product_id= array_column($_SESSION['cart'],'product_id');
                        foreach($product_id as $id){
                            if($row['id']==$id)
                            {      $total= $total+ $row['product_price'];

                        ?>
                            <form action="index12.php?action=remove&id=<?php echo $row['id']?>" method="post" class="cart-items">
                    <div class="border rounded ">
                        <div class="r32">
                        <div class="container ">
                        <div class="row bg-white">
                            <div class="col-lg-3 pl-0">
                                <img src=<?php echo $row['product_image']?> alt="Image1" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <h5 class="pt-2"><?php echo $row['product_name']?></h5>
                                <h2><?php echo $row['id']?></h2>
                                <small class="text-secondary">Seller: dailytuition</small>
                                <h5 class="pt-2"><?php echo $row['product_price']?><input type="hidden" class="iprice" value="<?php echo $row['product_price']?>"></input> </h5>
                                <!-- <button type="submit" class="btn btn-warning">Save for Later</button> -->
                                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>
                            </div>
                            <div class="col-lg-3 py-5">
                              <td><input class="iquantity" onchange="subTotal()" type="number" min="1" max="10" value="1"></input></td>
                              <h4 > Total:<span class="itotal mx-3"></span></h4>


                                <!-- <div>
                                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-minus"></i></button>
                                    <input type="text" value="1" class="form-control w-25 d-inline">
                                    <button type="button" class="btn bg-light border rounded-circle"><i class="fas fa-plus"></i></button>
                                </div> -->
                            </div>
                            </div>
                        </div>
                            </div>
                    </div>

                </form>



                </div>
            </div> 
 
        </div>
        <?php

                                    }
                                }
                            }
                            else{
                                echo "<script>alert('cart is empty')</script>";
                            }
        }

        ?>
                    <div class="col-lg-12     border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>Price Details</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-lg-6">
                            <?php
                             if (isset($_SESSION['cart'])){
                                 $count  = count($_SESSION['cart']);
                                 echo "<h6>Price ($count items)</h6>";
                                }else{
                                    echo "<h6>Price (0 items)</h6>";
                                }
                            ?>
                                <h6>Delivery charges <span class="px-5">free</span></h6>
                                <hr>
                                <h6>Amount payable <span class="px-5" id="gtotal"> </span><h6>

                            <div class="col-lg-6">
                                <h6></h6>
                            </div>
                        </div>
                        <script>
                      var gt=0;
                      var iprice=document.getElementsByClassName('iprice');
                      var iquantity=document.getElementsByClassName('iquantity');
                      var itotal=document.getElementsByClassName('itotal');
                      var gtotal=document.getElementById('gtotal');
                      function subTotal()
                      {
                        gt=0
                        for(i=0;i<iprice.length;i++)
                        {
                          itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                          gt= gt+(iprice[i].value)*(iquantity[i].value);
                        }
                        gtotal.innerText=gt;
                      }
                      subTotal();
                      
                    </script>
            </div>
</section>



    <!-- <script>
        var total_cart_amt = document.getElementById('total_cart_amt');
        var shipping_charge = document.getElementById('shipping_charge');
        var product_total_amt = document.getElementById('product_total_amt');
        var discountCode = document.getElementById('discount_code1');
        var item_price=document.getElementById("price_of_item")
        const decreaseNumber = (incdec,itemprice) =>{
            var itemval = document.getElementById(incdec);
            var itemprice = document.getElementById(itemprice);
            //console.log(itemval.value);
            if(itemval.value<=0){
                itemval.value=0;
                alert('max one item');
            }
            else{
                itemval.value=parseInt(itemval.value)-1;
                itemval.style.background='#fff';
                itemval.style.color="#000";
                itemprice.innerHTML = parseInt(itemprice.innerHTML) -parseInt(item_price.innerHTML);
                product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) -parseInt(item_price.innerHTML);
                total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
            }
        }
        const increaseNumber = (incdec,itemprice) =>{
            var itemval = document.getElementById(incdec);
            var itemprice = document.getElementById(itemprice);
            //console.log(itemval.value);
            if(itemval.value>=5){
                itemval.value=5;
                alert('max 5 items');
                itemval.style.background='red';
                itemval.style.color="#fff";

            }
            else{
                itemval.value=parseInt(itemval.value)+1;
                itemprice.innerHTML = parseInt(itemprice.innerHTML) +parseInt(item_price.innerHTML);
                product_total_amt.innerHTML = parseInt(product_total_amt.innerHTML) +parseInt(item_price.innerHTML);
                total_cart_amt.innerHTML = parseInt(product_total_amt.innerHTML) + parseInt(shipping_charge.innerHTML);
            }
        }
    </script>  -->
    <script>
        $(document).ready(function(){
          $("#click11").click(function(){
            $("#fare").toggle(3000);
          });
        });
        </script>   
  </body>
</html>