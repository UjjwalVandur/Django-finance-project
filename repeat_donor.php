<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    }
?>
<div class="container">
        <h1> BLOOD DONATION APPLICATION FORM </h1>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
<div class="form first">

                <div class="details donor">
                    <span class="title"> For Repeat Donors : </span>
                    <div class="fields">
                        <div class="input-field">
                            <label for="donation-date">  Date of Donation </label>
                            <input type="date" id="donation-date" name="donation-date" placeholder="Enter date of donation">
                        </div>

                        <div class="donor-field">
                            <label> What did you doante last time ? </label>
                            <select id="select" name="select-blood">
                                <option value="--select--"> -- Select -- </option>
                                <option value="wholeblood"> Whole Blood </option>
                                <option value="redbloodcell"> Red Blood Cell </option>
                                <option value="platelets"> Platelets </option>
                                <option value="palsma"> Plasma </option>
                            </select>
                        </div>

                        <div class="donor-field">
                            <label> Did you encounter any problem in your last donation ? </label>
                            <select id="select" name="select-problem">
                                <option value="--select--"> -- Select -- </option>
                                <option value="noproblem"> No Problem </option>
                                <option value="wholeblood"> Fainting (Unconsciousness) </option>
                                <option value="redbloodcell"> Bruise (Any Mark) </option>
                                <option value="platelets"> Difficulty in finding veins </option>
                                <option value="palsma"> Others </option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label> Donor Card Number </label>
                            <input type="text" placeholder="Enter your donor card number" name="donor-number">
                        </div>

                        <div class="input-field">
                            <label> ID Type </label>
                            <select id="select">
                                <option value="--select--" name="id-type"> -- Select -- </option>
                                <option value="voterid"> Voter ID </option>
                                <option value="aadhaarcard"> Aadhaar Card </option>
                                <option value="pancard"> PAN Card </option>
                                <option value="voterid"> Voter ID </option>
                                <option value="rationcard"> Ration Card </option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>  ID Number </label>
                            <input type="text" placeholder="Enter ID number" autocomplete="off" name="id-number">
                        </div>

                        <div class="input-field">
                            <label>  Blood Group </label>
                            <select id="select" name="blood-group">
                                <option value="--select--"> -- Select -- </option>
                                <option value="A+"> A + </option>
                                <option value="B+"> B + </option>
                                <option value="O+"> O + </option>
                                <option value="AB+"> AB + </option>
                                <option value="A-"> A - </option>
                                <option value="B-"> B - </option>
                                <option value="O-"> O - </option>
                                <option value="AB-"> AB - </option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>  Upload Your Report / Certificate </label>
                            <input type="file">
                        </div>

                    </div>
                    <div class="buttons">
                        <button class="submitBtn" name="submit_1">
                            <span class="btnText"> Submit </span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
            </div>
            </form>
</div>
