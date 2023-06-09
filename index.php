<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@600&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>E Salon</title>
</head>

<body>
    <header id="home">
        <nav>
            <div class="logo">
                <img src="img-section/logo/E salon Logo.png" alt="Logo">
            </div>
            <div class="menu">
                <a href="#home">HOME</a>
                <a href="#service">SERVICE</a>
                <a href="#price">PRICES</a>
                <a href="#gallery">GALLERY</a>
                <a href="#appoinment">BOOKING</a>
                <a href="#contact">CONTACT US</a>

            </div>
            <div class="login">
                <button><a href="">Log In</a></button>
            </div>
        </nav>
        <div class="home">
            <div class="content">
                <h5 class="wel">
                    WELCOME TO <span style=" color: white;">E-SALON</span>
                </h5>
                <p class="nav_heading_text">
                    BARBERS <span style="color: var(--maincolor);">&</span> <br> HAIR CUTTING
                </p>
                <p class="navbar_description">Discover the epitome of grooming mastery at our prestigious Barber Shop.
                    Immerse yourself in unparalleled
                    artistry and
                    refinement, elevating your style to new heights. Experience excellence like never before.</p>

                <button class="navbar_btn_appoinment"> <a href="#appoinment">Book Now</a></button>
            </div>
        </div>
    </header>

    <!--Service section------------------------------------------------------>

    <section class="service_body" id="service">
        <p class="service_title">SERVICE WE PROVIDE</p>
        <p class="service_pera">Our services go beyond mere haircuts. Immerse yourself in a world of pampering and
            refinement, where personalized attention and exceptional quality are paramount. <br> From rejuvenating
            shaves to
            invigorating scalp treatments,our skilled professionals ensure an unforgettable grooming experience. <br>
            Unwind
            and indulge in our exceptional service
            offerings today.</p>

        <div class="service-grid">
            <div class="service_card">
                <img src="icon/salon.png" alt="">
                <div class="service_text">
                    <h1>Hair Cutting Styele</h1>
                    <p>Choose from a range of stylish haircuts: classic, trendy, textured, layered, short, long, bob,
                        fade,
                        pixie, undercut,
                        curls, and more.</p>
                </div>
            </div>
            <div class="service_card">
                <img class="service_salon_icon" src="icon/Washing Hairt.png" alt="">
                <div class="service_text">
                    <h1>Hair Washing</h1>
                    <p>Indulge in a revitalizing hair wash, as our experts cleanse and rejuvenate your locks to
                        perfection.</p>
                </div>
            </div>
            <div class="service_card">
                <img class="service_salon_icon" src="icon/massage.png" alt="">
                <div class="service_text">
                    <h1>Body Treatments</h1>
                    <p>Experience blissful rejuvenation with our luxurious body treatments, leaving you refreshed and
                        renewed from head to toe.
                    </p>
                </div>
            </div>
            <div class="service_card">
                <img class="service_salon_icon" src="icon/spa-candles.png" alt="">
                <div class="service_text">
                    <h1>Beauty & Spa</h1>
                    <p>Escape to a haven of tranquility at our beauty and spa retreat. Relax, rejuvenate, and radiate
                        beauty from within.
                    </p>
                </div>
            </div>
            <div class="service_card">
                <img class="service_salon_icon" src="icon/shaving-razor.png" alt="">
                <div class="service_text">
                    <h1>Stylist Shaving</h1>
                    <p>Unleash your facial hair's full potential with our expert stylists, who masterfully sculpt and
                        shape your beard and
                        mustache.
                    </p>
                </div>
            </div>
            <div class="service_card">
                <img class="service_salon_icon" src="icon/hair-care.png" alt="">
                <div class="service_text">
                    <h1>Multi Hair Colors</h1>
                    <p>Ignite your style with captivating multi-tone hair colors, meticulously crafted by our skilled
                        stylists for a vibrant
                        and personalized look.</p>
                </div>
            </div>
        </div>
    </section>

    <!--Price Section --------------------------------------------->

    <section id="price">
        <div class="price_section">
            <div class="price_title_description">
                <h1>AWESOME PRICING PLAN</h1>
                <p>Our prices are designed to accommodate a range of budgets, <br> offering excellent value for
                    exceptional
                    quality
                    and
                    personalized service.
                </p>
            </div>
            <div class="haircut">
                <div class="price_card">
                    <div onclick="showSecondDiv(1)" class="haircut_text">
                        <img src="icon/salon copy.png" alt="">
                        <p>Tendy Hair Cut Price</p>
                    </div>
                    <div onclick="showSecondDiv(2)" class="haircut_text">
                        <img src="icon/Washing Hairt copy.png" alt="">
                        <p>Hair Washing Price</p>
                    </div>
                    <div onclick="showSecondDiv(3)" class="haircut_text">
                        <img src="icon/massage copy.png" alt="">
                        <p>Body Treatments Price</p>
                    </div>
                    <div onclick="showSecondDiv(4)" class="haircut_text">
                        <img src="icon/spa-candles copy.png" alt="">
                        <p>Beauty & Spa Price</p>
                    </div>
                    <div onclick="showSecondDiv(5)" class="haircut_text">
                        <img src="icon/shaving-razor copy.png" alt="">
                        <p>Stylist Shaving Price</p>
                    </div>
                    <div onclick="showSecondDiv(6)" class="haircut_text">
                        <img src="icon/hair-care copy.png" alt="">
                        <p>Multi Hair Colors Price</p>
                    </div>
                </div>


                <div class="price_card_details secondDiv">
                    <div class="haircut_details_img">
                        <img src="img-section/priceSection/Hair Cut.png" alt="">
                    </div>
                    <div class="haircut_details_text">
                        <h1>Tendy Hair Cut</h1>
                        <p>The male trend haircut features a stylish, modern look with shorter sides and a slightly
                            longer, textured top. It often
                            incorporates fades, undercuts, or tapering for a clean and sharp appearance. This
                            versatile
                            haircut can be styled in
                            various ways, offering a trendy and fashionable aesthetic.</p>
                        <h2>Price: 400 BDT</h2>
                        <button class="haircut_details_btn">Book Now</button>
                    </div>

                </div>

                <div class="price_card_details secondDiv" style="display: none;">
                    <div class="haircut_details_img">
                        <img src="img-section/priceSection/Hair Wash.png" alt="">
                    </div>
                    <div class="haircut_details_text">
                        <h1>Hair Washing</h1>
                        <p>Hair washing involves wetting the hair with water, applying shampoo to cleanse the scalp and
                            hair strands, massaging
                            gently to lather, and rinsing thoroughly. It removes dirt, excess oil, and product buildup,
                            leaving the hair clean,
                            refreshed, and ready for styling.</p>
                        <h2>Price: 800 BDT</h2>
                        <button class="haircut_details_btn">Book Now</button>
                    </div>

                </div>

                <div class="price_card_details secondDiv" style="display: none;">
                    <div class="haircut_details_img">
                        <img src="img-section/priceSection/Body Treatment.png" alt="">
                    </div>
                    <div class="haircut_details_text">
                        <h1>Body Treatments</h1>
                        <p>Our body treatments offer a range of luxurious and rejuvenating experiences. These
                            treatments can include exfoliation,
                            moisturization, detoxification, and relaxation techniques. They aim to enhance the overall
                            appearance and condition of
                            the skin, leaving it soft, nourished, and glowing, while promoting relaxation and
                            well-being.
                        </p>
                        <h2>Price: 1500 BDT</h2>
                        <button class="haircut_details_btn">Book Now</button>
                    </div>

                </div>

                <div class="price_card_details secondDiv" style="display: none;">
                    <div class="haircut_details_img">
                        <img src="img-section/priceSection/Beauty & Spa.png" alt="">
                    </div>
                    <div class="haircut_details_text">
                        <h1>Beauty & Spa</h1>
                        <p>Beauty and spa services provide a haven for self-care and pampering. From haircuts,
                            styling, and coloring to
                            manicures, pedicures, facials, and massages, these establishments offer a wide range of
                            treatments to enhance beauty,
                            relaxation, and well-being, leaving clients feeling refreshed, rejuvenated, and confident.
                        </p>
                        <h2>Price: 2000 BDT</h2>
                        <button class="haircut_details_btn">Book Now</button>
                    </div>

                </div>

                <div class="price_card_details secondDiv" style="display: none;">
                    <div class="haircut_details_img">
                        <img src="img-section/priceSection/Shaving.png" alt="">
                    </div>
                    <div class="haircut_details_text">
                        <h1>Stylist Shaving</h1>
                        <p>We offer stylists are skilled in providing precision shaving services. Using
                            professional-grade
                            tools like straight razors,
                            they expertly shape and groom facial hair, ensuring clean and sharp lines. Whether it's a
                            beard trim, mustache
                            sculpting, or a full clean shave, salon stylists deliver precise and polished results.</p>
                        <h2>Price: 400 BDT</h2>
                        <button class="haircut_details_btn">Book Now</button>
                    </div>

                </div>

                <div class="price_card_details secondDiv" style="display: none;">
                    <div class="haircut_details_img">
                        <img src="img-section/priceSection/Multi Hair color.png" alt="">
                    </div>
                    <div class="haircut_details_text">
                        <h1>Multi Hair Colors</h1>
                        <p>We offer a variety of multi-hair color techniques to create stunning and vibrant looks.
                            From highlights, balayage,
                            ombre, to color melts, stylists skillfully blend different shades and tones to add depth,
                            dimension, and visual interest
                            to the hair, resulting in a personalized and striking color transformation.
                        </p>
                        <h2>Price: 2000 BDT</h2>
                        <button class="haircut_details_btn">Book Now</button>
                    </div>

                </div>
            </div>
    </section>

    <!--Gallery Section--------------------------------------------------------------->
    <section id="gallery">
        <div class="gallery">
            <div class="gallery_title">
                <h1>LATEST PHOTO GALLERY</h1>
                <p class="gallery_title_pera">The Latest Photo Gallery: Captivating, contemporary images that inspire
                    with stunning landscapes,
                    portraits, and
                    artistic compositions.
                </p>
            </div>
            <div class="gallery_warp">
                <i id="backarrow" class="bi bi-arrow-left-circle-fill hover"
                    style="color:var(--maincolor); font-size: 3rem; padding:40px;"></i>

                <div class="gallery_image">
                    <div>
                        <span> <img src="Gallery/1.jpg"></span>
                        <span> <img src="Gallery/2.jpg"></span>
                        <span> <img src="Gallery/3.jpg"></span>
                    </div>
                    <div>
                        <span> <img src="Gallery/4.jpg"></span>
                        <span> <img src="Gallery/5.jpg"></span>
                        <span> <img src="Gallery/6.jpg"></span>
                    </div>
                    <div>
                        <span> <img src="Gallery/7.jpg"></span>
                        <span> <img src="Gallery/8.jpg"></span>
                        <span> <img src="Gallery/9.jpg"></span>
                    </div>
                </div>
                <i id="nextarrow" class="bi bi-arrow-right-circle-fill"
                    style="color:var(--maincolor); font-size: 3rem; padding:40px;"></i>
            </div>
        </div>
    </section>

    <!--Appoinemnt Section------------------------------------------------------------->

    <section id="appoinment">
        <div class="bf-container">
            <div class="bf_side_img">
                <img src="img-section/Booking_side_img/Booking side img.jpg" alt="">
            </div>

            <div class="bf-body">

                <div class="bf-head">
                    <h1>Booking Form</h1>
                    <p>PLEASE FILL UP THIS FORM FOR BOOKING</p>
                </div>


                <form class="bf-body-box" method="post">

                    <div class="bf-row">

                        <div class="bf-col-6">
                            <p>Fast Name</p>
                            <input type="text" name="fname" id="fname" placeholder="Fast Name" required>
                        </div>
                        <div class="bf-col-6">
                            <p>Last Name</p>
                            <input type="text" name="lname" id="lname" placeholder="Last Name" required>
                        </div>

                    </div>
                    <div class="bf-row">
                        <div class="bf-col-6">
                            <p>Email Address</p>
                            <input type="email" name="email" id="email" placeholder="Email Address">
                        </div>
                        <div class="bf-col-6">
                            <p>Mobile Number</p>
                            <input type="number" name="number" id="number" placeholder="Mobile Number">
                        </div>
                    </div>

                    <div class="bf-row">

                        <div class="bf-col-6">
                            <p>Select Date</p>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="bf-col-6">
                            <p>Services</p>
                            <select name="select" type="text" required>
                                <option>Select Service</option>
                                <option value="Hair Cutting Styele">Hair Cutting Styele</option>
                                <option value="Hair Washing">Hair Washing</option>
                                <option value="Body Treatments">Body Treatments</option>
                                <option value="Beauty & Spa">Beauty & Spa</option>
                                <option value="Stylist Shaving">Stylist Shaving</option>
                                <option value="Multi Hair Colors">Multi Hair Colors</option>

                            </select>
                        </div>

                    </div>

                    <div class="bf-row">

                        <div class="bf-col-12">
                            <p>Messages</p>
                            <textarea name="messages" id="Messages" cols="10" rows="3"></textarea>
                        </div>

                    </div>

                    <div class="bf-row">
                        <div class="bf-col-3">
                            <button
                                style="background-color: var(--maincolor2); padding: 10px; width: 100%; color: white; font-size: 16px; border: none;outline: none; border-radius:10px;"
                                type="submit" name="save_select">SUBMIT</button>

                        </div>

                    </div>

                </form>

            </div>
        </div>

    </section>

    <!-- Footer Section start--------------------------------------------->
    <footer id="contact">
        <div class="content">
            <div class="top">
                <div class="logo-details">
                    <img src="img-section/logo/E salon Logo.png" style="width: 180px;" alt="">
                </div>
                <div class="media-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">Company</li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Get started</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Services</li>
                    <li><a href="#">Hair Cutting Styelen</a></li>
                    <li><a href="#">Hair Washing</a></li>
                    <li><a href="#">Body Treatments</a></li>
                    <li><a href="#">Beauty & Spa</a></li>
                    <li><a href="#">Stylist Shaving</a></li>
                    <li><a href="#">Multi Hair Colors</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Opening Day </li>

                    <li><a href="#">Sunday</a></li>
                    <li><a href="#">Monday</a></li>
                    <li><a href="#">Tuesday</a></li>
                    <li><a href="#">Wednesday</a></li>
                    <li><a href="#">Thrusday</a></li>
                    <li><a href="#">Friday</a></li>

                </ul>
                <ul class="box">
                    <li class="link_name">Contact Info </li>
                    <li><a href="#">Mobile No: 01623347438 </a></li>
                    <li><a href="#">Mail: Esalon@gmail.com </a></li>
                    <li><a style="color: var(--maincolor); font-weight: 700;" href="#">Open Time: 9.00 AM</a></li>
                    <li><a style="color: var(--maincolor); font-weight: 700;" href="#">Close Time: 11.00 PM</a></li>
                </ul>

                <ul class="box input-box">
                    <li class="link_name">Subscribe</li>
                    <li><input type="text" placeholder="Enter your email"></li>
                    <li><input type="button" value="Subscribe"></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">@ Copyright | Pias Barua | 2023 </span>
                <span class="policy_terms">
                    <a href="#">Privacy policy</a>
                    <a href="#">Terms & condition</a>
                </span>
            </div>
        </div>
    </footer>



    <!--<script>
        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>-->
    <script src="script.js"></script>

</body>

</html>

<?php

include("connection.php");

if(isset($_POST['save_select'])){
        $Fast_Name = $_POST['fname'];
        $Last_Name = $_POST['lname'];
        $Email_Address = $_POST['email'];
        $Mobile_Number = $_POST['number'];
        $Date = $_POST['date'];
        $Services = $_POST['select'];
        $Messages = $_POST['messages'];

        $sql = "INSERT INTO bookingform(Fast_Name, Last_Name, Email_Address, Mobile_Number, Date, Services, Messages)VALUES('$Fast_Name',' $Last_Name',' $Email_Address','$Mobile_Number','$Date','$Services','$Messages')";
        $sql_run = mysqli_query($con,$sql);

        if($sql_run){
            ?>
           <script>

            swal({
                title: "Thank You!",
                text: "OUR DETAILS SUCCESSFULLY SUBMITED!",
                icon: "success",
            });
            header("Location:index.php");
           </script>
           
        <?php
            
       
    }
}
?>