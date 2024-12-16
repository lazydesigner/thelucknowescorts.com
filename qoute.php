<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css"
        integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        nav {
            background-color: #333;
            height: 10vh;
            width: 100%;
            margin: 0;
        }

        .hero-form-section {
            background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.486)), url('./IMAGES/Bitmap\ \(1\).webp');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6% 0;

        }

        .car-option {
            position: absolute;
            background-color: whitesmoke;
            padding: 5%;
            display: none;
            grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
            /* 3 columns with minimum width of 250px */
            grid-gap: 20px;
            /* Adjust the gap between grid items as needed */
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 150px;
            overflow: auto;
            z-index: 1;
            border-radius: 5px;
            user-select: none;
        }

        .formdiv {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            width: 700px;
            height: auto;
            border: 1px solid #0d42ff;
            padding: 10px;
            border-radius: 24px;
        }

        .form-main {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: auto;
            padding: 10px;
        }

        .form-container {
            width: 100%;
            height: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            border-radius: 14px;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 97%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .next-btn {
            padding: 10px 20px;
            width: 94%;
            background-color: #3A6EA5;
            /* Primary color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2cec9a;
            /* Hover color */
        }

        .step h2 {

            text-align: center;
            font-size: 16px;
            font-weight: 300;
        }

        .step h2 span {
            font-size: 25px;
            font-weight: 700;
            color: #3A6EA5;
        }


        .step {
            display: none;
            width: 100%;
        }

        .active-step {
            display: block;
        }


        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;


        }

        .label-div .container {

            display: flex;

            align-items: center;
            justify-content: center;
        }

        .label-div {

            padding: 1% 2%;
            display: flex;
            border-radius: 10px;
            align-items: center;
            justify-content: center;

            background-color: #3A6EA5;
            width: 50%;
        }

        .radio_button {
            margin: 2% 0;
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;
            gap: 5%;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .container:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .container input:checked~.checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked~.checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .container .checkmark:after {

            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }

        .swiper {
            width: 100%;
            height: 100%;
            padding: 5% 0;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Card container */
        .card {
            width: 380px;
            background-color: #f1f8fb;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;

        }

        /* First row: circular image */
        .card .image-row {
            display: flex;

            margin-bottom: 15px;
        }

        .card .image-row img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        /* Second row: name and star rating */
        .card .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .card .info-row .name {
            font-size: 22px;
            font-weight: bold;
        }

        .card .info-row .rating {
            display: flex;
            align-items: center;
            font-size: larger;
        }

        /* Star icon styling */
        .card .info-row .rating i {
            color: #f5a623;
            /* Star color */
            margin-left: 2px;
        }

        /* Third row: review text */
        .card .review-row {
            font-size: 16px;
            color: black;
            line-height: 1.3;
        }

        /* Section styling */
        .tile-section {
            width: 100%;
            max-width: 1200px;
            display: flex;
            margin: auto;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            padding: 5% 0;
        }

        /* Tile styling */
        .tile {
            width: 100%;
            max-width: 350px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tile:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Image section covering 70% height */
        .tile img {
            width: 100%;
            height: 70%;
            object-fit: cover;
        }

        /* Content section */
        .tile .tile-content {
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Tile title */
        .tile .tile-content .tile-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        /* Tile description */
        .tile .tile-content .tile-description {
            font-size: 17px;
            color: #777;
            margin-bottom: 15px;
            flex-grow: 1;
            /* To allow the description to grow */
        }

        .tile .tile-content .tile-description i {
            font-size: 17px;
        }

        /* Tile date */
        .tile .tile-content .tile-date {
            font-size: 14px;
            color: black;
        }

        .numbers {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .number {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 100px;
        }

        .number h3 {
            font-size: 50px;
            font-weight: bold;
            color: black;
            margin: 0;
        }

        .numbers-border {
            width: 100%;
            height: 3px;
            background-color: #2196F3;
            margin-top: 0;
        }

        .div-numbers {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        .third-card-section {
            display: flex;
            width: 100%;
            height: auto;
            margin: auto;
            align-items: center;
            justify-content: center;
            padding: 5%;
        }

        .card-section-th {
            display: flex;
            width: 100%;
            height: auto;
            margin: auto;
            align-items: center;
            border: 2px solid #2196F3;
            width: 200px;
            height: 100px;

        }

        .top-review-row {
            width: 100%;
            height: auto;

            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
            gap: 5%;
            /* background-color: rgba(20, 20, 120, 0.923); */
            border-bottom: 1px solid rgba(20, 20, 120, 0.923);
        }

        .top-review-box {
            width: 250px;
            height: auto;
            background-color: rgb(255, 255, 255);
            padding: 2%;
            border-radius: 5px;
            border: 1px solid lightgray;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top-review-img {
            width: 100px;
            height: 50px;
            object-fit: cover;
            background-color: #1d1d1d;
        }

        .top-rating-star {
            color: gold;
            margin: 20px 0;
        }

        .top-review-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .top-rating-font {
            font-size: xx-large;
            font-weight: 900;
            color: #36454F;
        }

        .top-review-box:hover {
            box-shadow: 1px 1px 10px 1px dodgerblue;
        }

        .sitebutton {
            position: fixed;
            bottom: 5%;
            left: 1%;
            display: none;
            z-index: 99;
        }

        /* Responsive behavior */
        @media (max-width: 1024px) {
            .tile-section {
                justify-content: center;
            }

            .tile {
                max-width: 300px;
            }
        }

        @media (max-width: 768px) {
            .tile {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav></nav>


    <div class="hero-form-section">
        <div class="formdiv">
            <div class="form-main">
                <div class="form-container">
                    <form id="multiStepForm">
                        <!-- Step 1 -->
                        <div class="step active-step">
                            <h2>Get a Free<br><span>Instant Quote</span></h2>

                            <div class="form-group">
                                <label for="">From</label><br>
                                <input type="text" placeholder="Address or City" id="origin-input" name="ship_from">
                                <input type="text" id="url" value="<?= $_SERVER['REQUEST_URI'] ?>" name="url"
                                    placeholder="Address or City" hidden>
                            </div>
                            <div class="form-group">
                                <label for="">To</label><br>
                                <input type="text" placeholder="Address or City" id="destination-input" name="ship_to">
                            </div>
                            <div class="form-group">
                                <label for="">Date OF Pickup</label><br>
                                <input type="date" name='pick_up_date' min="<?php echo date('Y-m-d'); ?>"
                                    max="2030-12-31" placeholder="Pickup Date" id="ship_date">
                            </div>
                            <div class="form-group" id="distance"> </div>
                            <div class="form-group">
                                <label for="email">Vehicle Size</label><br>
                                <input type="text" placeholder="Select an option" name="vehicle_size" id="ship_vehicle"
                                    readonly>
                                <div class="car-option" id="car-option">
                                    <div class="cars" id="cars"><img src="./assets/images/car/small-car.png" alt="">
                                        <p>small-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small_car.png" alt="">
                                        <p>small-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-car.png" alt="">
                                        <p>large-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/midsize-car.png" alt="">
                                        <p>midsize-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/sports-car.png" alt="">
                                        <p>sports-car</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/midsize-suv.png" alt="">
                                        <p>midsize-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/small-suv.png" alt="">
                                        <p>small-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-suv.png" alt="">
                                        <p>large-suv</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/hypercar.png" alt="">
                                        <p>hypercar</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/motorcycle.png" alt="">
                                        <p>motorcycle</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/mini-van.png" alt="">
                                        <p>mini-van</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/fullsize-van.png" alt="">
                                        <p>fullsize-van</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/dually-pickup.png" alt="">
                                        <p>dually-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/golf-cart.png" alt="">
                                        <p>golf-cart</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/large-pickup.png" alt="">
                                        <p>large-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/medium-pickup.png" alt="">
                                        <p>medium-pickup</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/travel-trailer.png"
                                            alt="">
                                        <p>travel-trailer</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/boat-trailer.png" alt="">
                                        <p>boat-trailer</p>
                                    </div>
                                    <div class="cars" id="cars"><img src="./assets/images/car/others.png" alt="">
                                        <p>others</p>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="radio_button"> -->
                            <div class="form-group" style="text-align: center;">
                                <div class="next-btn" id="quote">Get A Quote</div>
                            </div>
                        </div>



                        <!-- Step 2 -->
                        <div class="step">
                            <div id="ip"></div>
                            <div class="form-group">
                                <label for="">Email</label><br>
                                <input type="email" name="user_email" placeholder="Enter Your Email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label><br>
                                <input type="text" placeholder="Enter Your Phone" name="phone_number" id="phone" min="10"
                                    onkeyup="formatPhoneNumber(this)" max="10" required>
                            </div>
                            <button type="button" class="prev-btn">Previous</button>
                            <button type="button" class="next-btn">Next</button>
                        </div>

                        <!-- Step 3 -->
                        <div class="step">
                            <h2>Step 3: Confirmation</h2>
                            <p>Review your details before submitting.</p>



                            <button type="button" class="prev-btn">Previous</button>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
            <div class="swiper-slide" style="margin-right:0px!important;">
                <div class="card">
                    <!-- First row: Image -->
                    <div class="image-row">
                        <img src="./IMAGES/male-user.png" alt="User Image">
                    </div>

                    <!-- Second row: Name and rating -->
                    <div class="info-row">
                        <div class="name">John Doe</div>
                        <div class="rating">
                            <!-- Star ratings -->
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9733;</i>
                            <i>&#9734;</i> <!-- Empty star -->
                        </div>
                    </div>

                    <!-- Third row: Review text -->
                    <div class="review-row">
                        Auto Transport world is all about Owners of the vehicle willing to move or relocate their car,
                        Auto Agents and Auto Carrier. Car owners finds a right Auto Transportation agent who can get
                        their vehicle shipped from one place to other on agreed time and cost of Shipping. Auto Agents
                        looks for an reliable
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="tile-section">
        <!-- First Tile -->
        <div class="tile">
            <img src="./IMAGES/WhatsApp Image 2023-09-19 at 4.59.39 PM.webp" alt="Image 1">
            <div class="tile-content">
                <div class="tile-title">British Jeep Austin Champ</div>
                <div class="tile-description">
                    <i class="fas fa-map-marker-alt" style="margin-right: 1%;"></i>SaltLake, Utah to Bristol Rohde,
                    Island
                </div>
                <div class="tile-date">Ship: September 17, 2024</div>
            </div>
        </div>

        <!-- Second Tile -->
        <div class="tile">
            <img src="./IMAGES/New Auto Shipping.webp" alt="Image 2">
            <div class="tile-content">
                <div class="tile-title">1997 Jeep Cherokee</div>
                <div class="tile-description">
                    <i class="fas fa-map-marker-alt" style="margin-right: 1%;"></i>Buena Park, California to Denver,
                    Colorado
                </div>
                <div class="tile-date">Ship: September 18, 2024</div>
            </div>
        </div>

        <!-- Third Tile -->
        <div class="tile">
            <img src="./IMAGES/get Auto transport mustang.webp" alt="Image 3">
            <div class="tile-content">
                <div class="tile-title">Ford Mustang</div>
                <div class="tile-description">
                    <i class="fas fa-map-marker-alt" style="margin-right: 1%;"></i>SaltLake, Utah to Bristol Rohde,
                    Island
                </div>
                <div class="tile-date">Ship: September 19, 2024</div>
            </div>
        </div>
    </div>
    <div class="numbers">
        <div class="number">
            <div class="div-numbers">
                <h3>75588</h3>
                <div class="numbers-border"></div>
                <p>VEHICLE SHIPPED</p>
            </div>
            <div class="div-numbers">
                <h3>11 +</h3>
                <div class="numbers-border"></div>
                <p>Years Of Experience</p>
            </div>
            <div class="div-numbers">
                <h3>28500</h3>
                <div class="numbers-border"></div>
                <p>Trailer Available</p>
            </div>
            <div class="div-numbers">
                <h3>250678</h3>
                <div class="numbers-border"></div>
                <p>Quote Provided</p>
            </div>
        </div>
    </div>

    <!-- <div class="third-card-section">
        <div class="card-section-th">
            <div class="th-card">
                <h4>Google</h4>
                <span><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                        class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></span>
                        <p>(14,534 reviews)</p>
            </div>
            <div class="card-lg">
                <h3>4.9</h3>
                <img src="./IMAGES/google.webp">
            </div>
        </div>
    </div> -->

    <div class="top-review-row">
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>GOOGLE</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-half-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(14,534 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.8</strong></span>
                    <div class="top-review-img"><img src="./IMAGES/google.webp" width="100%" height="100%" alt=""></div>
                </div>
            </div>
        </div>
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>Transport Reviews</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-half-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(3534 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.7</strong></span>
                    <div class="top-review-img"><img src="./IMAGES/transpoorts (1).webp" width="100%" height="100%"
                            alt=""></div>
                </div>
            </div>
        </div>
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>BBB</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(7534 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.9</strong></span>
                    <div class="top-review-img"><img src="./IMAGES/WhatsApp-Image-2023-09-27-at-6.13.35-PM.webp"
                            width="100%" height="100%" alt=""></div>
                </div>
            </div>
        </div>
        <div class="top-review-col">
            <div class="top-review-box">
                <div class="top-review-detail">
                    <span>TRUSTPILOT</span><br>
                    <span class="top-rating-star"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></span><br>
                    <span style="font-size: small;color:grey;">(6634 reviews)</span>
                </div>
                <div class="top-review-ratings" style="text-align: center;">
                    <span class="top-rating-font"><strong>4.7</strong></span>
                    <div class="top-review-img"><img src="./IMAGES/trustpilot (1).webp" width="100%" height="100%"
                            alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        document.getElementById('ship_vehicle').addEventListener('click', () => {
            document.getElementById('car-option').style.display = 'grid'
        })

        var sel = document.querySelectorAll('#cars')
        for (i = 0; i < sel.length; i++) {
            sel[i].addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('ship_vehicle').value = "" + this.children[1].innerText + ""
                document.getElementById('car-option').style.display = 'none'
            })
        }


        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
    <!-- testimonial end -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let currentStep = 0;
            const steps = document.querySelectorAll('.step');
            const nextBtns = document.querySelectorAll('.next-btn');
            const prevBtns = document.querySelectorAll('.prev-btn');

            // Show the first step
            showStep(currentStep);

            // Next Button Click
            nextBtns.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    if (validateStep(currentStep)) {
                        currentStep++;
                        showStep(currentStep);
                    }
                });
            });

            // Previous Button Click
            prevBtns.forEach((btn, index) => {
                btn.addEventListener('click', () => {
                    currentStep--;
                    showStep(currentStep);
                });
            });

            // Function to show current step
            function showStep(step) {
                steps.forEach((s, index) => {
                    s.classList.remove('active-step');
                });
                steps[step].classList.add('active-step');
            }

            // Validate inputs (add custom validation here if needed)
            function validateStep(step) {
                const inputs = steps[step].querySelectorAll('input');
                let valid = true;

                inputs.forEach(input => {
                    if (!input.checkValidity()) {
                        valid = false;
                        input.reportValidity();
                    }
                });

                return valid;
            }
        });
    </script>


</body>

</html>

</body>

</html>