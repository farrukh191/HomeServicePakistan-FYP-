<?php  

session_start();
include('db.php'); 


  if (isset($_POST['csubmit']) and isset($_FILES['filepic'])) {

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $address=$_POST['address'];
    $description=$_POST['description'];
    // $email=$_POST['email'];
    $IdNumber=$_POST['IdNumber'];
    $phone_number=$_POST['phone_number'];
    $experience=$_POST['experience'];
    $createpass=$_POST['createpass'];
    $confirmpass=$_POST['confirmpass'];
    $Professional=$_POST['Professional'];
    $Language=$_POST['Language'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $Gender=$_POST['radio'];
    $jobCategory=$_POST['jobCategory'];

    $uploadfile=$_FILES["filepic"]["name"];
    $uploadfile_temp=$_FILES["filepic"]["tmp_name"];
    
    $move=move_uploaded_file($uploadfile_temp, "C:/xampp/htdocs/farrukh/farrukh/FYP_PROJECT/1/Assets1/provider/$uploadfile/");


       $Date=date("d-m-y");

if ($createpass == $confirmpass and !$createpass !== "" and $confirmpass !== "" ) 
    {

 $query="insert into provider_signup(p_first, p_last, p_address, p_description,p_nic, p_ph, p_exp, p_pass, p_cpass, p_profession, p_language, p_cou, p_city, p_gen, p_jobCat, p_pics, Date)values('$first_name','$last_name','$address','$description','$IdNumber','$phone_number',
'$experience','$createpass','$confirmpass','$Professional','$Language','$country','$city','$Gender','$jobCategory','$uploadfile','$Date')";


       // $query="insert into provider_signup(p_first,Date)values('$first_name','$Date')";
        $movedata=mysqli_query($con,$query);

        if ($movedata) {
           ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     



          <script>
          $(document).ready(function(){
          $("#myModal1").modal('show');
        });
      </script>
  <?php
          // header('location:ClientLogin.php');
          // exit();
        }
        else{
          echo "data is not passing";
          ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     



          <script>
          $(document).ready(function(){
          $("#myModal").modal('show');
        });
      </script>
  <?php
        }


  }

else{
  ?>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     



          <script>
          $(document).ready(function(){
          $("#myModal").modal('show');
        });
      </script>
  <?php
  echo "password is not match";
} 






  }

?>





<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- Main css -->
 
 <link rel="stylesheet" href="fonts1/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
        <!-- Main css -->
    <link rel="stylesheet" href="css/style2.css">

      <style type="text/css">
  .modal-confirm {    
  color: #636363;
  width: 325px;
  font-size: 14px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
  min-height: 40px;
  border-radius: 3px; 
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -5px;
} 
.modal-confirm .modal-footer {
  border: none;
  text-align: center;
  border-radius: 5px;
  font-size: 13px;
} 
.modal-confirm .icon-box {
  color: #fff;    
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  top: -70px;
  width: 95px;
  height: 95px;
  border-radius: 50%;
  z-index: 9;
  background: dodgerblue;
  padding: 15px;
  text-align: center;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-confirm .icon-box i {
  font-size: 58px;
  position: relative;
  top: 3px;
}
.modal-confirm.modal-dialog {
  margin-top: 80px;
}
.modal-confirm .btn {
  color: #fff;
  border-radius: 4px;
  background: dodgerblue;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
  background: dodgerblue;
  outline: none;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
 .main{
width: 100% !important;
margin-top: -6% !important;
margin-bottom: 4%;
    }
.register{
  line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 900;
  color: #fff;
  font-family: 'Poppins';
  font-size: 26px;
  text-transform: uppercase;
  margin-bottom: 10px; 
}

.while{
 line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: 700;
  color: #fff;
  font-family: 'Poppins';
  font-size: 12px;
  text-transform: uppercase;
  margin-bottom: 10px;
}
label.required {
    position: relative !important;
}
label, .lo {
    font-weight: bold !important;
    text-transform: uppercase !important;
    margin-bottom: 7px !important;
    font-size: 14px !important;
}
label, input {
    display: block !important;
    width: 100% !important;
}
form-submit {
  text-align: right; }

.submit {
  width: 150px !important;
  height: 50px !important;
  display: inline-block !important;
  font-family: 'Poppins' !important;
  font-weight: bold !important;
  font-size: 14px !important;
  padding: 10px !important;
  border: none !important;
  cursor: pointer !important;
  text-transform: uppercase !important;
  border-radius: 5px !important;
  -moz-border-radius: 5px !important;
  -webkit-border-radius: 5px !important;
  -o-border-radius: 5px !important;
  -ms-border-radius: 5px !important; 
}

#reset {
  background: #fff;
  color: #999;
  border: 2px solid #ebebeb; }
  #reset:hover {
    border: 2px solid #329e5e;
    background: #329e5e;
    color: #fff; }

#submit {
  background: #329e5e;
  color: #fff;
  margin-right: 25px; }
  #submit:hover {
    background-color: #267747; }
    .form-input, .form-select {
  margin-bottom: 23px !important; 

}

 .form-input, .form-select {
  margin-bottom: 23px !important; 
}
.select-list {
  position: relative !important;
  display: inline-block !important;
  width: 100% !important;
 height: 45px;
 border-color: #ebebeb !important;
  margin-bottom: 47px !important; 
}

select{
  
  height: 50px !important;
  width: 100% !important;
  border-radius: 5px;
}


</style>
</head>
<body>


    <?php include("homeAssets/navbar1.php"); ?>

<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box" style="background-color: red;">
          <i class="material-icons">close</i>
        </div>        
        <h5 class="modal-title w-100" style="padding-top: 5%;">Make sure Password match !</h5>  
      </div>
      
      
    </div>
  </div>
</div> 











<div id="myModal1" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons">&#xE876;</i>
        </div>        
        <h4 class="modal-title w-100">Successfully login!</h4>  
      </div>
      <div class="modal-body">
        <p class="text-center">Your Registration has been confirmed. Now you can login.</p>
      </div>
      <div class="modal-footer">
        
        <a class="btn btn-success btn-block"  href="clogin.php" style="text-decoration: none; color: white;">Go Login page</a>
      </div>
    </div>
  </div>
</div>    









    <div class="main">
        
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/22.jpeg" alt="" style="height: 1000px;">
                    <div class="signup-img-content" >
                        <h2 class="register">Register now </h2>
                        <p class="while">while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">





  



                      <form class="form-detail"  method="POST" enctype="multipart/form-data" style="margin: 8%; padding: 10px;">


          <div class="tabcontent" id="sign-inn">
            <h2 style="text-align: center; margin-top: -5%; padding: 5%; color: #204d74">Signup Form</h2>
            
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name"  />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name"  />
                                </div>
                  <div class="form-select" style="margin-top: -0.6%;">
                
                <label for="meal_preference" style=" ">Experience</label>
                              <select class="form-select select-list" name="experience" aria-label=".form-select-lg example">
                                 <option selected>Fresh</option>
                        <option value="0 - 1 yrs">0 - 1 yrs</option>
                        <option value="1 - 2 yrs">1 - 2 yrs</option>
                        <option value="2 - 5 yrs">2 - 5 yrs</option>
                        <option value="5 - 10 yrs">5 - 10 yrs</option>
                        <option value="10 - 20 yrs">10 - 20 yrs</option>
                        <option value="20 - 30 yrs">20 - 30 yrs</option>
                        <option value="Above 30 yrs">Above 30 yrs</option>
                  
                </select>
                  </div>
                               <!--  <div class="form-input" style="margin-top: -11.5%;">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email"  />
                                </div> -->

                                <div class="form-select" style="margin-top: -12%;">
                
                <label for="meal_preference">Job Category</label>
                              <select class="form-select select-list" name="jobCategory"  aria-label=".form-select-lg example">
                                 <option selected>Open this select menu</option>
                        <option value="maid">maid</option>
                        <option value="Medical">Medical</option>
                        <option value="Home Renovation">Home Renovation</option>
                        <option value="Cooking">Cooking</option>
                        <option value="Water Supply">Water Supply</option>
                        <option value="Labour">Labour</option>
                        <option value="Beautician">Beautician</option>
                        <option value="Consultancy">Consultancy</option>
                        <option value="Mechanic">Mechanic</option>
                  

                </select>
              </div>
                                               <div class="form-input" style="margin-top: -12.5%;">
                                    <label for="blank_name">Professional</label>
                                    <input type="text" name="Professional" id="blank_name"  />
                                </div>
                                
                               <!--  <div class="form-input">
                                    <label for="Id Number" class="required"> NIC Number</label>
                                    <input type="text" name="IdNumber" id="Id Number"  maxlength="13" pattern="[0-9]{13}"   />
                                    <span style="font-size: 12px;">Fill without dash 4240103789897</span>
                                </div> -->

                                 <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" maxlength="11" pattern="[0-9]{11}" />
                                </div>

                                <div class="form-input">
                                    <label for="Professional" class="required">Address</label>
                                    <!-- <input type="text" name="Professional" id="company"  /> -->
                                    <input type="text" name="address"  style="width: 100%; height:70px; border-color: #ebebeb; border-radius: 5px; "  />
                                      
                                  
                                </div>

                                <div class="form-input">
                                    <label for="Description" >Description (optional)</label>
                                    <!-- <input type="text" name="Professional" id="company"  /> -->
                                    <textarea type="text" name="description"  style="width: 100%; padding-left: -10%; height:100px; border-color: #ebebeb; border-radius: 5px; "></textarea>
                                  
                                </div>




              


              
                            </div>






                            <div class="form-group">

                                <div class="form-input">
                                    <label for="chequeno" class="required">Password</label>
                                    <input type="text" name="createpass" id="chequeno" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  />
                                    <span style="font-size: 12px;">Hints <b style="font-weight:bold;">AbcsdjB1223 </b>8 or more characters</span>
                                </div>

                                


                <div class="form-input">
                                    <label for="blank_name"  class="required">Confirm Password</label>
                                    <input type="text" name="confirmpass" id="blank_name" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  />
                                </div>

                               <!--  <div class="form-input">
                                    <label for="blank_name">Professional</label>
                                    <input type="text" name="Professional" id="blank_name"  />
                                </div> -->

                                <div class="form-input">
                                    <label for="blank_name">Language</label>
                                    <input type="text" name="Language" id="skill" />
                                    
                                </div>


                                <div class="form-input">
                                    <label for="blank_name">Country</label>
                                    <input type="text" value="Pakistan" name="country" id="blank_name" readonly />

                                </div>
                                
                                 <div class="form-select" style="margin-top: -0.6%;">
                
                <label for="meal_preference" style=" ">City</label>
                              <select class="form-select select-list" name="city" aria-label=".form-select-lg example">
                                 <option selected>Select city</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Quetta">Quetta</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Hyderabad">Hyderabad</option>
                        
                  
                </select>
                  </div>



                                <div class="form-radio" style="margin-top: -10%;">
                                    <div class="label-flex">
                                        <label for="payment">Gender</label>
                                       
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="radio" value="Male" id="cash" checked>
                                            <label for="cash">Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="radio" value="Female" id="cheque">
                                            <label for="cheque">Female</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="radio" value="Other" id="demand">
                                            <label for="demand">Other</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>


                                
                                
 <div class="form-input">
                                    <label for="Id Number" class="required"> NIC Number</label>
                                    <input type="text" name="IdNumber" id="Id Number"  maxlength="13" pattern="[0-9]{13}" />
                                    <span style="font-size: 12px;">Fill without dash 4240103789897</span>
                                </div>


              <div class="form-input" style="margin-top: 0%;">
                                  
                  <label class="form-label" for="customFile">Mendatory image file</label>
                  <input type="file" class="form-control" name="filepic" id="customFile" style="height: 45px;" />
                                </div>
                               





                            </div>
                        </div>
                        
                        <div class="form-submit" style="margin-top: -2%; margin-right: -3%;">
                            <input  type="submit" value="submit" class="submit" id="submit" name="csubmit" />
                            <!-- <input type="submit" value="Reset" class="submit" id="reset" name="reset" /> -->
                        </div>

                        <div class="donate-us" style="float: right; color: black !important;">
                            <p>if you have already account you direct goto  login page</p>
                            
                        </div>
                    
          </div>
        </form>

        





<!--------------------------- start here the login form ------------------->


                </div>
            </div>
        </div>

    </div>

<?php include("footer.php"); ?>












</body>
</html>