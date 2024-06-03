
<?php
include("connection.php");
session_start();
?>
<?php include("base.php"); ?>
    
   <?php include("nav.php"); ?>

    <!-- Main Page -->
    <main>

        <!-- Hero Section -->
        <div class="hero">

            <!-- Left side of Hero section -->
            <section class="left">

                <!-- Quote -->
                <h1><span id="E">E</span>very drop of <span id="blood">blood</span> is like a breath for someone! Donate
                    blood .</h1>

                <!-- Description -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo minus eveniet quo ab iste optio qui
                    veritatis dolorem itaque nulla?Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem eum
                    laboriosam, numquam porro a pariatur sequi quos saepe corporis! Ipsum!</p>

                <!-- donate Button -->
                <button onclick="location.href = '<?php if(isset($_SESSION['email'])){echo('./donor.php');}?>'"> Donate Now </button>

            </section>
            <!-- END of Left side -->

            <!-- Right side of Hero section -->
            <section class="right">

                <!-- Image Frame -->
                <div class="frame">

                    <!-- Image Slider -->
                    <div class="slider">
                        <img src="./images/hero1.jpg" class="image">
                        <img src="./images/hero2.jpg" class="image">
                        <img src="./images/hero3.jpg" class="image">
                        <img src="./images/hero4.jpg" class="image">
                    </div>

                    <!-- Dots for image position -->
                    <div class="dot">
                        <span class="span"></span>
                        <span class="span"></span>
                        <span class="span"></span>
                        <span class="span"></span>
                    </div>

                </div>

            </section>
            <!-- END of Right side -->

        </div>
        <!-- END of hero section -->

        <!-- Main Content -->
        <div class="main-content">

            <!-- Blood Type Info Section -->
            <section class="blood-types">

                <!-- Left Side section -->
                <div class="blood-types-content-left-side">

                    <!-- Counter Section -->
                    <div class="counter">
                        <img src="./images/blood-units.png" alt="">
                        <h3 class="count" data-count="1000"> 0 </h3>
                        <p> Blood Units </p>
                    </div>
                    <div class="counter">
                        <img src="./images/blood-camp.png" alt="">
                        <h3 class="count" data-count="2000"> 0 </h3>
                        <p> Camps Organized </p>
                    </div>
                    <div class="counter">
                        <img src="./images/donor.png" alt="">
                        <h3 class="count" data-count="3000"> 0 </h3>
                        <p> Registered Donors </p>
                    </div>
                    <div class="counter">
                        <img src="./images/receiver.png" alt="">
                        <h3 class="count" data-count="4000"> 0 </h3>
                        <p> Registered Receivers </p>
                    </div>
                    <div class="counter">
                        <img src="./images/hospital.png" alt="">
                        <h3 class="count" data-count="5000"> 0 </h3>
                        <p> Hospitals </p>
                    </div>
                    <!-- END of counter section -->

                </div>
                <!-- END of left side section -->

                <!-- Right Side section -->
                <div class="blood-types-chart-right-side">

                    <h3> KNOW ABOUT DONATION </h3>
                    <!-- Blood Type Table -->
                    <table class="blood-types-table">
                        <thead>
                            <tr>
                                <th> Blood Types </th>
                                <th> Donates Blood To </th>
                                <th> Receives Blood From </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> A+ </td>
                                <td> A+, AB+ </td>
                                <td> A+, O+, A-, O- </td>
                            </tr>
                            <tr>
                                <td> B+ </td>
                                <td> B+, AB+ </td>
                                <td> B+, O+, B-, O- </td>
                            </tr>
                            <tr>
                                <td> AB+ </td>
                                <td> AB+ </td>
                                <td> EVERYONE </td>
                            </tr>
                            <tr>
                                <td> O+ </td>
                                <td> A+, B+, O+, AB+ </td>
                                <td> O+, O- </td>
                            </tr>
                            <tr>
                                <td> A- </td>
                                <td> A+, A-, AB+, AB- </td>
                                <td> A-, O- </td>
                            </tr>
                            <tr>
                                <td> B- </td>
                                <td> B+, B-, AB+, AB- </td>
                                <td> B-, O- </td>
                            </tr>
                            <tr>
                                <td> AB- </td>
                                <td> AB+, AB- </td>
                                <td> A-, B-, AB-, O- </td>
                            </tr>
                            <tr>
                                <td> O- </td>
                                <td> EVERYONE </td>
                                <td> O- </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END of Blood Type Table -->

                </div>
                 <!-- END of right side section -->

            </section>
            <!-- END of Blood Type Info Section -->

            <!-- Donation Types Section -->
            <section class="blood-donation-info">
                <div class="types-of-donation-info">
                    <h3> TYPES OF DONATION </h3>
                    <p>
                        The average human body contains about five liters of blood, which is made of several cellular and non-cellular components such as <span>Red Blood Cell</span>, <span>Platelet</span>, and <span>Plasma</span>.
                    </p>
                    <p>   
                        Each type of component has its unique properties and can be used for different indications. The donated blood is separated into these components by the blood centre and one donated unit can save upto four lives depending on the number of components separated from your blood.
                    </p>
                    <div class="donation-details">
                        <div>
                            <a class="infoLink" onclick="showPanel(0, '#87cdec')"> WHOLE BLOOD DONATION </a>
                        </div>
                        <div>
                            <a class="infoLink" onclick="showPanel(1, '#87cdec')"> PLASMA </a>
                        </div>
                        <div>
                            <a class="infoLink" onclick="showPanel(2, '#87cdec')"> PLATELET </a>
                        </div>
                    </div>
                    <div class="infoPanel">
                        <div>
                            <h4> WHAT IS IT ? </h4>
                            <p> Blood Collected straight from the donor into a blood bag and mixed with an anticoagulant is called as whole blood. This collected whole blood is then centrifuged and red cell, platelets and plasma are separated. The separated Red cells are mixed with a preservative to be called as packed red blood cells. </p>
                            <h4> WHO CAN DONATE ? </h4>
                            <p> You need to be 18-65 years old, weight 45kg or more and be fit and healthy. </p>
                        </div>
                        <div>
                            <h4> USED FOR ? </h4>
                            <p> Correction of severe anemia in a number of conditions and blood loss in case of child birth, surgery or trauma settings. </p>
                            <h4> LASTS FOR ? </h4>
                            <p> Red cells can be stored for 42 days at 2-6 degree celsius. </p>
                        </div>
                        <div>
                            <h4> HOW LONG DOES IT TAKE TO DONATE ? </h4>
                            <p> 15-30 minutes to donate.including the pre-donation check-up. </p>
                            <h4> HOW OFTEN CAN I DONATE ? </h4>
                            <p> Male donors can donate again after 90 days and female donors can donate again after 120 days. </p>
                        </div>
                    </div>
                    <div class="infoPanel">
                        <div>
                            <h4> WHAT IS IT ? </h4>
                            <p> The straw-coloured liquid in which red blood cells, white blood cells, and platelets float in is called plasma.Contains special nutrients which can be used to create 18 different type of medical products to treat many different medical conditions. Plasma can be obtained from the collected whole blood after red blood cells and platelets have been separated. Additionally, it can also be collected using an apheresis equipment where other components are returned to the donor. The former is a common method of plasma preparation in our country. </p>
                            <h4> WHO CAN DONATE ? </h4>
                            <p> The donation criteria is similar to that of red blood cell. However, for apheresis plasma collection minimum weight is 50 kgs. </p>
                        </div>
                        <div>
                            <h4> USED FOR ? </h4>
                            <p> Used for bleeding patients with coagulation factor deficiency such as hemophilia A and B, von willibrand disease etc. also used in cases of blood loss due to trauma. </p>
                            <h4> LASTS FOR ? </h4>
                            <p> Plasma after separation if frozen below -30 degrees can be stored up to one year. </p>
                        </div>
                        <div>
                            <h4> HOW LONG DOES IT TAKE TO DONATE ? </h4>
                            <p> 15-30 minutes to donate including the pre-donation check-up. </p>
                            <h4> HOW OFTEN CAN I DONATE ? </h4>
                            <p> Male donors can donate again after 90 days and female donors can donate again after 120 days. </p>
                        </div>
                    </div>
                    <div class="infoPanel">
                        <div>
                            <h4> WHAT IS IT ? </h4>
                            <p> These are cellular elements in blood which wedge together to help to clot and reduce bleeding. Always in high demand, Vital for people with low platelet count, like hematology and cancer patients. </p>
                            <h4> WHO CAN DONATE ? </h4>
                            <p> One can donate whole blood from which the blood centre will separate platelets from other components. Criteria similar to whole blood donation apply. Alternatively, one can donate using apheresis equipment where only platelets are collected and rest components are returned back to donate. One need to satisfy whole blood criteria and pre- donation screening which include negative infectious markers and platelet count >1,50,000 per microlitre of blood. Weight should be >50kgs. </p>
                        </div>
                        <div>
                            <h4> USED FOR ? </h4>
                            <p> Conditions with very low platelet count such as Cancer, blood diseases, trauma, dengue etc. </p>
                            <h4> LASTS FOR ? </h4>
                            <p> Can be stored for 5 days at 20-24 degree celsius. </p>
                        </div>
                        <div>
                            <h4> HOW DOES IT WORK ? </h4>
                            <p> We collect your blood, keep platelet and return rest to you by apheresis donation. </p>
                            <h4> HOW LONG DOES IT TAKE TO DONATE ? </h4>
                            <p> 45-60 minutes to donate. 2-3 hours for pre-donation screening. </p>
                            <h4> HOW OFTEN CAN I DONATE ? </h4>
                            <p> Every 2 weeks but should not exceed more than 24 times in a year. </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END of Donation Types Section -->

            <!-- About us Section -->
            <section class="about-us">
                <div class="row">
                    <h3 class="about-us-title"> KNOW MORE ABOUT US </h3>
                </div>
                <div class="row">
                    <div class="column">
                        <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <h4> ABOUT HEADING </h4>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda aut voluptates, provident voluptatum maxime deleniti officiis sint veritatis in? Eveniet in ipsam distinctio minima magni. Nemo illum doloribus sit deserunt. </p>
                            <a href="#"> SHOW MORE </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <h4> ABOUT HEADING </h4>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda aut voluptates, provident voluptatum maxime deleniti officiis sint veritatis in? Eveniet in ipsam distinctio minima magni. Nemo illum doloribus sit deserunt. </p>
                            <a href="#"> SHOW MORE </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <h4> ABOUT HEADING </h4>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda aut voluptates, provident voluptatum maxime deleniti officiis sint veritatis in? Eveniet in ipsam distinctio minima magni. Nemo illum doloribus sit deserunt. </p>
                            <a href="#"> SHOW MORE </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="icon-wrapper">
                                <i class="fa-solid fa-house"></i>
                            </div>
                            <h4> ABOUT HEADING </h4>
                            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda aut voluptates, provident voluptatum maxime deleniti officiis sint veritatis in? Eveniet in ipsam distinctio minima magni. Nemo illum doloribus sit deserunt. </p>
                            <a href="#"> SHOW MORE </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END od about us section -->

            <!-- Contact us Section -->
            <section class="contact-us">
                <div class="contact-us-title">
                    <h3> GET IN TOUCH </h3>
                </div>
                <div class="contact-us-box">
                    <div class="contact form">
                        <h3> Send a message </h3>
                        <form action="">
                            <div class="formBox">
                                <div class="row50">
                                    <div class="inputBox">
                                        <span> First Name </span>
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="inputBox">
                                        <span> Last Name </span>
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>

                                <div class="row50">
                                    <div class="inputBox">
                                        <span> Eamil </span>
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="inputBox">
                                        <span> Mobile Number </span>
                                        <input type="number" placeholder="Mobile Number">
                                    </div>
                                </div>

                                <div class="row100">
                                    <div class="inputBox">
                                        <span> Message </span>
                                        <textarea placeholder="Write your message here ..."></textarea>
                                    </div>
                                </div>

                                <div class="row100">
                                    <div class="inputBox">
                                        <input type="submit" value="SEND">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="contact info">
                        <h3> Contact Information </h3>
                        <div class="infoBox">
                            <div>
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <p> SAVING LIVES FOUNDATION, NEW DELHI <br> INDIA </p>
                            </div>
                            <div>
                                <span><i class="fa-solid fa-envelope"></i></span>
                                <a href="mailto:savinglivesfoundation@gmail.com"> savinglivesfoundation@gmail.com </a>
                            </div>
                            <div>
                                <span><i class="fa-solid fa-phone-volume"></i></span>
                                <a href="tel:+91234456892"> +91 234 456 892 </a>
                            </div>
                            <ul class="social-media-links">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-square-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224147.42437553595!2d77.1991171397703!3d28.620664428539264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5447d350c39%3A0xe511e789c5438f19!2se-Rakt%20Kosh!5e0!3m2!1sen!2sin!4v1709976940926!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
            <!-- END of Contact Us Section -->

        </div>
        <!-- END of Main Content -->

    </main>
    <!-- END of Main Page -->

    <?php include("footer.php"); ?>

    <!-- SCRIPTS -->
    
    <!-- JS of main page -->
    <script src="./js/script.js"></script>

</body>

</html>