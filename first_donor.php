<?php
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        // Donor details
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $bloodgroup = $_POST['bloodgroup'];
        $email = $_SESSION['email'];
        $mno = $_POST['mno'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];

        // donor id details
        $idtype = $_POST['idtype'];
        $idno = $_POST['idno'];
        $idissued = $_POST['idissued'];
        $idstate = $_POST['idstate'];

        // donor address details
        $blockno = $_POST['blockno'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $street = $_POST['street'];
        $landmark = $_POST['landmark'];
        $code = $_POST['code'];
        $state = $_POST['state'];
        $district = $_POST['district'];
        $city = $_POST['city'];

        // donor relation details
        $reltype = $_POST['reltype'];
        $relname = $_POST['relname'];
        $relno = $_POST['relno'];

        // donor personnel verification
        if(empty($_POST["fname"])) {
            $error = "Field can't be Empty !";
        } else {
            $fname = test_input($_POST["fname"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $fname)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["mname"])) {
            $error = "Field can't be Empty !";
        } else {
            $mname = test_input($_POST["mname"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $mname)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["lname"])) {
            $error = "Field can't be Empty !";
        } else {
            $lname = test_input($_POST["lname"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $lname)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["dob"])) {
            $error = "Field can't be Empty !";
        } else {
            $dob = test_input($_POST["dob"]);
            $error = "";
        }

        if($_POST["bloodgroup"] == '--select--') {
            $error = "Field can't be Empty !";
        } else {
            $bloodgroup = test_input($_POST["bloodgroup"]);
            $error = "";
        }

        if(empty($_POST["mno"])) {
            $error = "Field can't be Empty !";
        } else {
            $mno = test_input($_POST["mno"]);
            if(!preg_match("/^[0-9]{10}+$/", $mno)) {
                $error = "Only numbers are allowed !";
            } else {
                $error = "";
            }
        }

        if($_POST["gender"] == '--select--') {
            $error = "Field can't be Empty !";
        } else {
            $gender = test_input($_POST["gender"]);
            $error = "";
        }
        
        if(empty($_POST["occupation"])) {
            $error = "Field can't be Empty !";
        } else {
            $occupation = test_input($_POST["occupation"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $occupation)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        // id verification
        if($_POST["idtype"] == '--select--') {
            $error = "Field can't be Empty !";
        } else {
            $idtype = test_input($_POST["idtype"]);
            $error = "";
        }

        if($_POST['idtype'] == 'aadhaarcard') {
            $idno = test_input($_POST["idno"]);
            if(!preg_match("/^d{4} \d{4} \d{4}$/", $idissued)) {
                $error = "Please provide correct format!";
            } else {
                $error = "";
            }
        } else if($_POST['idtype'] == 'pancard') {
            $idno = test_input($_POST["idno"]);
            if(!preg_match("/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/", $idno)) {
                $error = "Please provide correct format!";
            } else {
                $error = "";
            }
        } else if($_POST['idtype'] == 'voterid') {
            $idno = test_input($_POST["idno"]);
            if(!preg_match("/^[A-Z]{3}[0-9]{7}]/", $idno)) {
                $error = "Please provide correct format!";
            } else {
                $error = "";
            }
        } else {
            $idno = test_input($_POST["idno"]);
            $error = "";
        }

        if(empty($_POST["idissued"])) {
            $error = "Field can't be Empty !";
        } else {
            $idissued = test_input($_POST["idissued"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $idissued)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["idstate"])) {
            $error = "Field can't be Empty !";
        } else {
            $idstate = test_input($_POST["idstate"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $idstate)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        // donor address verification
        if(empty($_POST["blockno"])) {
            $error = "Field can't be Empty !";
        } else {
            $blockno = test_input($_POST["blockno"]);
            if(!preg_match("/^[0-9a-zA-Z' ]*$/", $blockno)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["address1"])) {
            $error = "Field can't be Empty !";
        } else {
            $address1 = test_input($_POST["address1"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $address1)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["address2"])) {
            $error = "Field can't be Empty !";
        } else {
            $address2 = test_input($_POST["address2"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $address2)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["street"])) {
            $error = "Field can't be Empty !";
        } else {
            $street = test_input($_POST["street"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $street)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["code"])) {
            $error = "Field can't be Empty !";
        } else {
            $code = test_input($_POST["code"]);
            if(!preg_match("/^[0-9]{6}/", $code)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["state"])) {
            $error = "Field can't be Empty !";
        } else {
            $state = test_input($_POST["state"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $state)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["district"])) {
            $error = "Field can't be Empty !";
        } else {
            $district = test_input($_POST["district"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $district)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["city"])) {
            $error = "Field can't be Empty !";
        } else {
            $city = test_input($_POST["city"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $city)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }


        // relation verification
        if(empty($_POST["reltype"])) {
            $error = "Field can't be Empty !";
        } else {
            $reltype = test_input($_POST["reltype"]);
            $error = "";
        }
        
        if(empty($_POST["relname"])) {
            $error = "Field can't be Empty !";
        } else {
            $relname = test_input($_POST["relname"]);
            if(!preg_match("/^[a-zA-Z' ]*$/", $relname)) {
                $error = "Only alphabets are allowed !";
            } else {
                $error = "";
            }
        }

        if(empty($_POST["relno"])) {
            $error = "Field can't be Empty !";
        } else {
            $relno = test_input($_POST["relno"]);
            if(!preg_match("/^[0-9]{10}+$/", $relno)) {
                $error = "Only numbers are allowed !";
            } else {
                $error = "";
            }
        }

        if($error == "") {
            $address = $blockno.", ".$address1.", ".$address2.", ".$street.", ".$landmark.", ".$code.", ".$city;

            $selectQuery = "SELECT `email` FROM `donor_details` WHERE `email` = '$email'";
            $selectQueryResult = mysqli_query($con, $selectQuery);
            if($selectQueryResult) {
                echo("Already apllied!");
            } else {

                $newinsert = "INSERT INTO `donor_details` (`firstname`, `middlename`, `lastname`, `dob`, `bloodgroup`, `email`, `mobileno`, `gender`, `occupation`, `idtype`, `idno`, `issuedauthority`, `issuedstate`, `address`, `state`, `city`, `relationtype`, `personname`, `personno`, `lastdonationdate`) VALUES ('$fname', '$mname', '$lname', '$dob', '$bloodgroup', '$email', '$mno', '$gender', '$occupation', '$idtype', '$idno', '$idissued', '$idstate', '$address', '$state', '$city', '$reltype', '$relname', '$relno', current_timestamp())";

                $insertQueryResult = mysqli_query($con, $newinsert);

                if($insertQueryResult) {
                    echo("You have successfully submiited the donor form! Check your mail for further details for your allocated hospital for blood donation!");
                    ?>
                    <meta http-equiv = "refresh" content = "0; url = http://localhost/myProject/index.php"/>
                    <?php
                } else {
                    echo("Something went wrong!");
                }
            }
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }




?>
<div class="container">
    <h1> BLOOD DONATION APPLICATION FORM </h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
        <div class="details personal">
            <span class="title"> Personal Details : </span>
            <div class="fields">
                <div class="input-field">
                    <label> First Name </label>
                    <input type="text" placeholder="Enter your first name" autocomplete="off" name="fname">
                </div>

                <div class="input-field">
                    <label> Middle Name </label>
                    <input type="text" placeholder="Enter your middle name" autocomplete="off" name="mname">
                </div>

                <div class="input-field">
                    <label> Last Name </label>
                    <input type="text" placeholder="Enter your last name" autocomplete="off" name="lname">
                </div>
                        
                <div class="input-field">
                    <label>  Date of Birth </label>
                    <input type="date" placeholder="Enter birth date" autocomplete="off" name="dob">
                </div>

                <div class="input-field">
                    <label>  Blood Group </label>
                    <select id="select" name="bloodgroup">
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
                    <label> Email </label>
                    <input type="email" placeholder="Enter your email" autocomplete="off" disabled value="<?php echo($_SESSION['email']); ?>" name="email">
                </div>

                <div class="input-field">
                    <label> Mobile Number </label>
                    <input type="tel" placeholder="Enter mobile number" autocomplete="off" maxlength="10" name="mno">
                </div>

                <div class="input-field">
                    <label>  Gender </label>
                    <select id="select" name="gender">
                        <option value="--select--" selected> -- Select -- </option>
                        <option value="male"> Male </option>
                        <option value="female"> Female </option>
                        <option value="other"> Other </option>
                    </select>
                </div>

                <div class="input-field">
                    <label> Occupation </label>
                    <input type="text" placeholder="Enter your occupation" autocomplete="off" name="occupation">
                </div>
            </div>
        </div>

        <div class="details ID">
            <span class="title"> Identity Details : </span>
            <div class="fields">
                <div class="input-field">
                    <label> ID Type </label>
                    <select id="select" name="idtype">
                        <option value="--select--"> -- Select -- </option>
                        <option value="aadhaarcard"> Aadhaar Card </option>
                        <option value="voterid"> Voter ID </option>
                        <option value="pancard"> PAN Card </option>
                    </select>
                </div>
                        
                <div class="input-field">
                    <label>  ID Number </label>
                    <input type="text" placeholder="Enter ID number" autocomplete="off" name="idno">
                </div>

                <div class="input-field">
                    <label> Issued Authority </label>
                    <input type="text" placeholder="Enter issued authority" autocomplete="off" name="idissued">
                </div>

                <div class="input-field">
                    <label> Issued State </label>
                    <input type="text" placeholder="Enter issued state" autocomplete="off" name="idstate">
                </div>

            </div>
        </div>

        <div class="details address">
            <span class="title"> Address Details : </span>
            <div class="fields">

                        <div class="input-field">
                            <label>  Block Number </label>
                            <input type="text" placeholder="Enter block number" autocomplete="off" name="blockno">
                        </div>

                        <div class="input-field">
                            <label> Address Line 1 </label>
                            <input type="text" placeholder="Enter address" autocomplete="off" name="address1">
                        </div>

                        <div class="input-field">
                            <label> Address Line 2 </label>
                            <input type="text" placeholder="Enter address" autocomplete="off" name="address2">
                        </div>

                        <div class="input-field">
                            <label> Street Name </label>
                            <input type="text" placeholder="Enter street" autocomplete="off" name="street">
                        </div>

                        <div class="input-field">
                            <label> Landmark  </label>
                            <input type="text" placeholder="Enter landmark (optional)" autocomplete="off" name="landmark">
                        </div>

                        <div class="input-field">
                            <label> Postal Code </label>
                            <input type="text" placeholder="Enter your postal code" autocomplete="off" name="code">
                        </div>

                        <div class="input-field">
                            <label> State </label>
                            <input type="text" placeholder="Enter your state" autocomplete="off" name="state">
                        </div>

                        <div class="input-field">
                            <label> District </label>
                            <input type="text" placeholder="Enter your district" autocomplete="off" name="district">
                        </div>

                        <div class="input-field">
                            <label> City </label>
                            <input type="text" placeholder="Enter your city" autocomplete="off" name="city">
                        </div>

                    </div>
                </div>

                <div class="details family">
                    <span class="title"> Family Details : </span>
                    <div class="fields">

                        <div class="input-field">
                            <label> Relation Type </label>
                            <select id="select" name="reltype">
                                <option value="--select--"> -- Select -- </option>
                                <option value="father"> Father </option>
                                <option value="mother"> Mother </option>
                                <option value="brother"> Brother </option>
                                <option value="sister"> Sister </option>
                                <option value="grandfather"> Grand Father </option>
                                <option value="grandmother"> Grand Mother </option>
                                <option value="guardian"> Guardian </option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label> Full Name </label>
                            <input type="text" placeholder="Enter full name" autocomplete="off" name="relname">
                        </div>

                        <div class="input-field">
                            <label> Phone Number </label>
                            <input type="tel" placeholder="Enter phone number" autocomplete="off" name="relno">
                        </div>

                    </div>
                   
                    <div class="buttons">
                        <button class="submitBtn">
                            <span class="btnText"> Submit </span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            </form>
            </div>