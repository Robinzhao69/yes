<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/start.css">
    <link rel="stylesheet" href="css/product-slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script type="module" src="js/script.js" defer></script>
    <script type="module" src="js/request.js" defer></script>
    <script type="module" src="js/slider.js" defer></script>

</head>
<body>
    <div class="nav-parent">
        <nav>          
            <div class="icon">
                <i class="fa fa-bars"></i>
            </div>
        </nav>
        <ul class="nav-items">
            <img src="./foto/unnamed.jpg" alt="">
            <div class="nav-links">
                <a href="#"><li>Home</li></a>
                <a href="#"><li>Cart</li></a>
                <a href="#"><li>About</li></a>
                <a href="#"><li>Contact</li></a>
            </div>
        </ul>
    </div>

    
    <div class="all-con">
        <!-- startpage -->
        <div class="start-con">
            <div class="tekst">
                <h1>Welkom, <br>bij Duckyz</h1>
                <p>Dit is de webshop waarbij jij je favoriete badspeeltjes kan halen.</p>
                <a href="#">ontdek nu</a>
            </div>

            <div class="plaatje">
                <img src="./foto/product1.png" alt="">
            </div>
        </div>

        <h1 class="slide-titel">populaire producten</h1>
        <div class="product-slider">            
            <img id="slide-left" class="arrow" src="./foto/arrow-left.png">
            <div class="viewmodel" id="slider">
                <div class="product-card">
                    <img src="./foto/product1.png" alt="">
                    <div class="product-details">
                        <h2>rubber eend</h2> 
                        <p class="price">19,99</p> 
                        <a href='#'>Add to cart</a>
                    </div>            
                </div>
                <div class="product-card">
                    <img src="./foto/product1.png" alt="">
                    <div class="product-details">
                        <h2>rubber eend</h2> 
                        <p class="price">19,99</p> 
                        <a href='#'>Add to cart</a>
                    </div>            
                </div>
                <div class="product-card">
                    <img src="./foto/unnamed.jpg" alt="">
                    <div class="product-details">
                        <h2>rubber eend</h2> 
                        <p class="price">19,99</p> 
                        <a href='#'>Add to cart</a>
                    </div>            
                </div>
                <div class="product-card">
                    <img src="./foto/product1.png" alt="">
                    <div class="product-details">
                        <h2>rubber eend</h2> 
                        <p class="price">19,99</p> 
                        <a href='#'>Add to cart</a>
                    </div>            
                </div>
                <div class="product-card">
                    <img src="./foto/product1.png" alt="">
                    <div class="product-details">
                        <h2>rubber eend</h2> 
                        <p class="price">19,99</p> 
                        <a href='#'>Add to cart</a>
                    </div>            
                </div>
            </div>
            <img id="slide-right" class="arrow" src="./foto/arrow-right.png">
        </div>

        <!-- sidebar -->
        <div class="sidebar">
           
        </div>
    </div>

</body>
</html>