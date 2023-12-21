<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Slick Banner</title>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" integrity="sha512-Woz+DqWYJ51bpVk5Fv0yES/edIMXjj3Ynda+KWTIkGoynAMHrqTcDUQltbipuiaD5ymEo9520lyoVOo9jCQOCA==" crossorigin="anonymous" />
    <!-- Our CSS -->
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #dedede;
            font-size: 14px;
            color: #333;
            line-height: 1.8;
        }

        .container {
            max-width: 900px;
            padding: 30px;
            background-color: #fff;
            margin-left: auto;
            margin-right: auto;
            border-radius: 10px;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: solid 3px #f5f5f5;
        }

        h1 {
            margin-top: 0;
        }

        .product {
            display: flex;
            flex-direction: column;
        }

        /* Main Slider */
.slider {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    border: solid 9px #fff;
    box-sizing: border-box;
    margin-bottom: 15px;
    border-radius: 5px;
}

.slider .slick-slide {}

.slider .slick-slide img {
    width: 100%;
}

/* make button larger and change their positions */
.slick-prev,
.slick-next {
    width: 50px;
    height: 50px;
    z-index: 1;
}

.slick-prev {
    left: 5px;
}

.slick-next {
    right: 5px;
}

.slick-prev:before,
.slick-next:before {
    font-size: 40px;
    text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

/* General slick slider styling */
.slick-slide:focus,
.slick-slide:focus {
    outline: none;
    /* remove default outline when on :focus */
}

/* hide dots and arrow buttons when slider is not hovered */
.slick-slider:not(:hover) .slick-arrow,
.slick-slider:not(:hover) .slick-dots {
    opacity: 0;
}

/* transition effects for opacity */
.slick-arrow {
    transition: opacity 0.5s ease-out;
}




/* Thumbnails Slider */
.slider-thumbnails {
    margin-left: -15px;
    margin-right: -15px;
}

.slider-thumbnails .slick-slide {
    padding: 15px;
    transition: transform 0.3s ease-out;
}

.slider-thumbnails .slick-slide:focus img {
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.6);
}

.slider-thumbnails .slick-slide img {
    max-width: 100%;
    border: solid 5px #fff;
    box-sizing: border-box;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    transition: box-shadow 0.3s ease-out;
    border-radius: 3px;
}


.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}


        @media only screen and (min-width: 768px) {
            .product {
                flex-direction: row;
            }

            .product-description {
                margin-left: 36px;
            }
            .product-images {
                width: 50%;
            }
            .img-responsive {
            display: block;
            max-width: 100%;
            height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Slick Slider Demo</h1>
        </header>

        <div class="product">
            <div class="product-images">

            <div class="slider">
                <div>
                    <a class="img-responsive" href="images/ayam_jantan.png" data-lightbox="lightbox">
                        <img class="img-responsive" data-lazy="images/ayam_jantan.png" alt="Image 1">
                    </a>            
                </div>
                <div>
                    <a class="img-responsive" href="images/ayam_betina.png" data-lightbox="lightbox">
                        <img class="img-responsive" data-lazy="images/ayam_betina.png" alt="Image 2">
                    </a>
                </div>
                <div>
                    <a class="img-responsive" href="images/ayam_3.pn" data-lightbox="lightbox">
                        <img class="img-responsive" data-lazy="images/ayam_3.png" alt="Image 3">
                    </a>            
                </div>
                <div>
                    <a class="img-responsive" href="images/ayam1.png" data-lightbox="lightbox">
                        <img class="img-responsive" data-lazy="images/ayam1.png" alt="Image 4">
                    </a>
                </div>
                <div>
                    <a class="img-responsive" href="images/ayam1j.png" data-lightbox="lightbox">
                        <img class="img-responsive" data-lazy="images/ayam1j.png" alt="Image 5">
                    </a>            
                </div>
                <div>
                    <a class="img-responsive" href="images/anak_ayam.png" data-lightbox="lightbox">
                        <img class="img-responsive" data-lazy="images/anak_ayam.png" alt="Image 6">
                    </a>            
                </div>
            </div>


           
            <div class="slider-thumbnails">
                <div>
                    <img src="images/anak_ayam.png" alt="Image 1">
                </div>
                <div>
                    <img src="images/ayam1j.png" alt="Image 2">
                </div>
                <div>
                    <img src="images/ayam1.png" alt="Image 3">
                </div>
                <div>
                    <img src="images/ayam_3.png" alt="Image 4">
                </div>
                <div>
                    <img src="images/ayam_betina.png" alt="Image 5">
                </div>
                <div>
                    <img src="images/ayam_jantan.png" alt="Image 6">
                </div>
            </div>

            </div>
            <div class="product-description">
                <h2>Product Title</h2>
                <p>
                    <strong>Price:</strong> Rp 120.000
                    <br />
                    <strong>Brand:</strong> Lorem Ipsum
                    <br />
                    <strong>Weight:</strong> 2kg
                </p>
                <h3>Descriptiodsan</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                </p>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Our Script -->
    <script>
       $(document).ready(function () {
    $('.slider').slick({
        infinite: false
    });
});
    </script>
    <script>
         $('.slider-thumbnails').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider',
    focusOnSelect: true
});            

$('.slider').slick({
    infinite: false,
    asNavFor: '.slider-thumbnails',
});
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script>
</body>
</html>