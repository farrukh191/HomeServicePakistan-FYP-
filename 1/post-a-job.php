
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
   <!-- google font -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Rubik:300,400,500" rel="stylesheet">
 -->
    <!-- Bootstrap core CSS -->
   <!--  <link rel="stylesheet" href="cssp/bootstrap.min.css" type="text/css">
 -->
    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="cssp/materialdesignicons.min.css" />

    <link rel="stylesheet" type="text/css" href="cssp/fontawesome.css" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="cssp/selectize.css" />

    <link rel="stylesheet" type="text/css" href="cssp/nice-select.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="cssp/style.css" />


    <style type="text/css">
        label {
    display: inline-block !important;
    margin-bottom: .5rem !important;
    font-weight: 30px !important;
}
.section{
    font-family: "Roboto", sans-serif !important;
    
}
.text-dark {
    color: #343a40!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem !important;
}

.custom-file-input {
    position: relative !important;
    z-index: 2 !important;
    width: 100% !important;
    height: calc(1.5em + .75rem + 2px) !important;
    margin: 0 !important;
    opacity: 0 !important;
}

button, input {
    overflow: visible !important;
}

input[type="file" i] {
    appearance: initial;
    background-color: initial;
    cursor: default;
    align-items: baseline;
    color: inherit;
    text-overflow: ellipsis;
    white-space: pre;
    text-align: start !important;
    padding: initial;
    border: initial;
    overflow: hidden !important;
}
   @media only screen and (max-width: 900px) {
  .main {
   background: yellow;
  
   margin-right: 30%;
   box-sizing: border-box;
  }
 
}

    </style>

</head>
<body>
  <?php include('Navbar.php'); ?>
    <div class="main" style="margin-left: 13%;">

        <!-- Sign up form -->
        <section class="signup" style="margin-top: -4%; margin-bottom: 2%;">
            <div class="container">
                <div class="signup-content">
             
                   







 <div class="row justify-content-center" style=" width: 100%; margin: 0 auto;">
                <div class="col-lg-10">
                    <div class="post-job bg-white p-4" style=" padding: 5%; width: 100%;  bottom: 20%;">
                        <div class="custom-form" >
                            <div id="message3"></div>
                            <form method="post" action="https://themesdesign.in/joobsy/php/contact.php" name="contact-form" id="contact-form3">
                                <h4 class="text-dark mb-4">Post A New Job</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="company-name" class="text-muted">Job Title</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="job-type" class="text-muted">Job Type</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Job Type">Job Type</option>
                                                    <option value="1">Full Time</option>
                                                    <option value="2">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="category" class="text-muted">Job Category</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Category">Category</option>
                                                    <option value="1">Web Developer</option>
                                                    <option value="2">PHP Developer</option>
                                                    <option value="3">Web Designer</option>
                                                    <option value="4">Graphic Designer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="city" class="text-muted">City</label>
                                            <input id="city" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="country" class="text-muted">Country</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Country">Country</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Bangladesh</option>
                                                    <option value="3">Canada</option>
                                                    <option value="4">Dominica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="minimum-salary" class="text-muted">Minimum Salary</label>
                                            <input id="minimum-salary" type="text" class="form-control resume" placeholder="$8000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="maximum-salary" class="text-muted">Maximum Salary</label>
                                            <input id="maximum-salary" type="text" class="form-control resume" placeholder="$20000">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="level" class="text-muted">Education Level</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Level">Level</option>
                                                    <option value="1">Level-1</option>
                                                    <option value="2">Level-2</option>
                                                    <option value="3">Level-3</option>
                                                    <option value="4">Level-4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="experience" class="text-muted">Year of Experience</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Experience">Experience</option>
                                                    <option value="1">1 Year</option>
                                                    <option value="2">2 Year</option>
                                                    <option value="3">3 Year</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="url" class="text-muted">Website</label>
                                            <input id="url" type="url" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="email-address" class="text-muted">Email Address</label>
                                            <input id="email-address" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="number" class="text-muted">Phone Number</label>
                                            <input id="number" type="text" class="form-control resume" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="gender" class="text-muted">Gender</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Gender">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label for="shift" class="text-muted">Shift</label>
                                            <div class="form-button">
                                                <select class="nice-select">
                                                    <option data-display="Shift">Shift</option>
                                                    <option value="1">Morning</option>
                                                    <option value="2">Evening</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label for="description" class="text-muted">Job Description</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item">
                                                <div class="input-group mt-2 mb-2">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                        <label class="custom-file-label" for="inputGroupFile01"><i class="mdi mdi-cloud-upload mr-1"></i> Upload Files</label>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-inline-item">
                                                <h6 class="text-muted mb-0">Upload Images Or Documents.</h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center mt-4">
                                            <a href="#" class="btn btn-custom btn-sm">Post a Job</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>









                </div>
            </div>
        </section>

       
    </div>
  <?php include('footer.php'); ?>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>