<!DOCTYPE html>
<html>
 <head>
  <title>Make  Toggles & Use in Form with PHP Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

 </head>
 <body>
  <br /><br />
  <div class="container" style="width:600px;">
   
   <form method="post" id="insert_data">
   
    <div class="form-group">
     <label>User Status</label>
     <div class="checkbox">
      <input type="checkbox" name="status" id="status" checked />
     </div>
    </div>
    <input type="text" name="hidden_status" id="hidden_status" value="Active" />
    <br />
    <input type="submit" name="insert" id="action" class="btn btn-info" value="Change Status" />
   </form>
   <div class="modal-body" id="msgBody" style="height: 400px; overflow-y: scroll; overflow-x: hidden;">
    <?php
//insert.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeserviceprovider";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



echo $sql = "SELECT * FROM users  where id='4'";
$check=mysqli_query($conn,$sql);

while ($fet=mysqli_fetch_assoc($check)) {
  echo $fet['user']; echo "<br>";
}
?>
   </div>

  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#status').bootstrapToggle({
  on: 'Active',
  off: 'Deactive',
  onstyle: 'success',
  offstyle: 'danger'
 });

 $('#status').change(function(){
  if($(this).prop('checked'))
  {
   $('#hidden_status').val('Active');
  }
  else
  {
   $('#hidden_status').val('Deactive');
  }
 });

 $('#insert_data').on('submit', function(event){
  event.preventDefault();

 if($('#hidden_status').val() != '')
  {
var hidden_status=$('#hidden_status').val();


   $.ajax({
	   
    url:"insert.php",
    method:"POST",
    data:$(this).serialize(),
    success:function(data){
		
     if(data == 'done')
     {
      $('#insert_data')[0].reset();
      $('#status').bootstrapToggle('on');
      // alert("Data Inserted");
     }
    }
   });
}
 });

 setInterval(function(){
    $.ajax({
      url:"test.php",
      method:"POST",
      data:{
        fromUser: $("#fromUser").val(),
        toUser: $("#toUser").val()
      },
      dateType:"text",
        success:function(data)
        {
          $("#msgBody").html(data);
        }
    });
  },200);
  

});
</script>
