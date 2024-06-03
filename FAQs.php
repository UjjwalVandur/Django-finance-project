<?php include("base.php") ?>

    <style> 
        .wrapper{
            position: relative;
            top: 50px;
            max-width: 75%;
            margin: auto;
        }
        .wrapper h1{
            font-family: 'Montserrat','Acme', cursive;
            margin: 100px 0 20px 0;
            text-align: center;
        }
        .questions{
            font-family: 'Montserrat','Acme', cursive;
            background-color: white;
            color: rgba(0, 0, 0, 0.8);
            cursor: pointer;
            font-size: 1.2rem;
            width: 100%;
            padding: 2rem 2.5rem;
            border: none;
            outline: none;
            transition: 0.4s;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
        }
        .questions > i{
            font-size: 1.6rem;
        }
        .active, 
        .questions:hover{
            background-color: gray;
        }
        .answer{
            font-family: 'Montserrat','Acme', cursive;
            padding: 0 2rem 2.5rem 2rem;
            background-color: rgba(247, 202, 202, 0.644);
            overflow: hidden;
            display: none;
        }
        .answer p{
            font-family: 'Montserrat','Acme', cursive;
            margin-top: 20px;
            color: rgba(0, 0, 0, 0.7);
            font-size: 1.2rem;
            line-height: 1.4; 
        }
        .answer pre{
            font-family: 'Montserrat','Acme', cursive;
            text-wrap: wrap;
        }
        .answer > span{
            font-family: 'Montserrat','Acme', cursive;
            text-decoration: underline;
        }
        .faqs{
            border: 1px solid rgba(0, 0, 0, 0.9);
            margin: 10px 0;
        }
        .faqs.active{
            border: none;
        }
        .search i{
            font-size: 16px;
            margin-top: -1px;
            margin-bottom: 1.5px;
            align-self: center;
        }
    </style>

<?php include("nav.php"); ?>
<?php include("connection.php"); ?>

    <div class="wrapper">
        <h1>MOST FREQUENTLY ASKED QUESTIONS !</h1>
        <div class="faqs">
            <button class="questions">
                How does the blood donation process work ?
                <i class='bx bx-plus'></i>
            </button>
            <div class="answer">
                <p><pre>Donating blood is a simple thing to do, but can make a big difference in the lives of others. The donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes on average. The steps in the process are:

<span>Registration</span> :-
1.) You will complete donor registration, which includes information such as your name, address, phone number, and donor identification number (if you have one).
2.) You will be asked to show a donor card, driver's license or two other forms of ID.
                    
<span>Health History and Mini Physical</span> :-
1.) You will answer some questions during a private and confidential interview about your health history and the places you have traveled.
2.) You will have your temperature, hemoglobin, blood pressure and pulse checked.
                    
<span>Donation</span> :-
1.) We will cleanse an area on your arm and insert a brand-new, sterile needle for the blood draw. This feels like a quick pinch and is over in seconds.
2.) You will have some time to relax while the bag is filling. (For a whole blood donation, it is about 8-10 minutes. If you are donating platelets, red cells or plasma by apheresis the collection can take up to 2 hours.)
3.) When approximately a pint of blood has been collected, the donation is complete and a staff person will place a bandage on your arm. 
                    
<span>Refreshments</span> :-
1.) You will spend a few minutes enjoying refreshments to allow your body time to adjust to the slight decrease in fluid volume.
2.) After 10-15 minutes you can then leave the donation site and continue with your normal daily activities.
3.) Enjoy the feeling of accomplishment knowing that you have helped to save lives.
                    
Your gift of blood may help up to three people. Donated red blood cells do not last forever. They have a shelf-life of up to 42 days. A healthy donor may donate every 56 days.</pre></p>
            </div>
        </div>
        <div class="faqs">
            <button class="questions">
                What should I do after donating blood ?
                <i class='bx bx-plus'></i>
            </button>
            <div class="answer">
                <p><pre>After you give blood :-

<span>Take the following precautions</span> :-
                    
1.) Drink an extra four glasses (eight ounces each) of non-alcoholic liquids.
2.) Keep your bandage on and dry for the next five hours, and do not do heavy exercising or lifting.
3.) If the needle site starts to bleed, raise your arm straight up and press on the site until the bleeding stops.
4.) Because you could experience dizziness or loss of strength, use caution if you plan to do anything that could put you or others at risk of harm. For any hazardous occupation or hobby, follow applicable safety recommendations regarding your return to these activities following a blood donation.
5.) Eat healthy meals and consider adding iron-rich foods to your regular diet, or discuss taking an iron supplement with your health care provider, to replace the iron lost with blood donation.
6.) If you get a bruise:  Apply ice to the area intermittently for 10-15 minutes during the first 24 hours. Thereafter, apply warm, moist heat to the area intermittently for 10-15 minutes. A rainbow of colors may occur for about 10 days.
7.) If you get dizzy or lightheaded:  Stop what you are doing, lie down, and raise your feet until the feeling passes and you feel well enough to safely resume activities.
8.) And remember to enjoy the feeling of knowing you have helped save lives!
9.) Schedule your next appointment</pre></p>
            </div>
        </div>
        <div class="faqs">
            <button class="questions">
                Who can donate blood ?
                <i class='bx bx-plus'></i>
            </button>
            <div class="answer">
                <p><pre>
1.) Person having age between 18 and 60 years.
2.) Donor should not have consumed any medicines within last 24 hours.
3.) Haemoglobin -- not less than 12.5 g/Dl.
4.) Pulse -- between 50 and 100/minute with no irregularities.
5.) Blood Pressure -- Systolic 100-180 mm Hg and Diastolic 50 - 100 mm Hg.
6.) Temperature -- Normal (oral temperature not exceeding 37.50C)</pre></p>
            </div>
        </div>
        <div class="faqs">
            <button class="questions">
                What are the schemes provided by Saving Lives Foundation ?
                <i class='bx bx-plus'></i>
            </button>
            <div class="answer">
                <p><pre>
1.) We have developed a scheme to encourage number of blood donations
2.) If an individual is donating blood for the third time in our organisation , he/she would become a member of our silver club in which the person gets a free medical check-up in  our organisation.
3.) If an individual is donating blood for the fifth time in our organisation , he/she would become a member of our golden club in which organisation would be providing a free medical check-up for the donor's family as well as golden club members would be prioritised in receiving blood in case of emergency.
</pre></p>
            </div>
        </div>
    </div>

    <script>
        var questions = document.getElementsByClassName("questions");
        var i;
        for(i=0;i<questions.length;i++){
            questions[i].addEventListener("click",function(){
                    this.classList.toggle("active");
                    this.parentElement.classList.toggle("active");
                    var answer = this.nextElementSibling;

                    if(answer.style.display === "block"){
                        answer.style.display = "none";
                    }else{
                        answer.style.display = "block";
                    }
            });
        }
    </script>
    <?php include("footer.php"); ?>
</body>
</html>