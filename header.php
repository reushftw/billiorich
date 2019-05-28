<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Billiorich</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
 

<!-- icons -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="assets/img/icons/billio.png" />

 <!-- css -->
<link rel="stylesheet" type="text/css" href="assets/css/main.css">       
            
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

<script>
$(document).ready(function(){
    // add to cart button listener
    $('.add-to-cart-form').on('submit', function(){
 
        // info is in the table / single product layout
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
 
        // redirect to add_to_cart.php, with parameter values to process the request
        window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
        return false;

    });
    // update quantity button listener
    $('.update-quantity-form').on('submit', function(){
     
        // get basic information for updating the cart
        var id = $(this).find('.product-id').text();
        var quantity = $(this).find('.cart-quantity').val();
     
        // redirect to update_quantity.php, with parameter values to process the request
        window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
        return false;
    });
});
</script>

    </head>

 <body>
       
           
            <script>
                var btn = $('#button');
                        btn.addClass('show');

                btn.on('click', function(e) {
                    e.preventDefault();
                    $('html, body').animate({scrollTop:0}, '300');
                });
            </script>
            <script>
                $(function() {
                    $('.scroll-down').on('click', function(e) {
                        e.preventDefault();
                        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
                    });
                });
            </script>
      


<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">
        <img class="img-fuild" style="width: 50px; height: 50px;" src="assets/img/icons/billio.jpg" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Tous les Produits</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catégorie
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="">T-Shirts</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="">Jeans</a>
                    <a class="dropdown-item" href="">Chemises</a>
                    <a class="dropdown-item" href="">Casquettes</a>
                </div>
            </li>
            <li class="nav-item active">
                <a id="nav-contact" class="nav-item-button nav-link" href="">CONTACT</a>
            </li> 
        </ul>

        <div class="text-right" style="margin-right: 70px; margin-top:10px;">
                <span>
                    <a href="cart.php">
                        <?php
                        // count products in cart
                        if(isset($_SESSION['cart'])){
                        $cart_count=count($_SESSION['cart']);
                        }                       
                        ?>
                        <span class="icon-shopping-cart custom-icon"> 
                            <span class="shopping-cart">
                                 <?php if(isset($_SESSION['cart'])){ echo $cart_count; } ?>
                            </span>    
                        </span>
                    </a>
                </span>
                <span><a href=""><i class="icon-facebook custom-icon"></i></a></span>
                <span><a href=""><i class="icon-instagram custom-icon"></i> </a></span>   
        </div>
    </div>
</nav>
    </body>
</html>