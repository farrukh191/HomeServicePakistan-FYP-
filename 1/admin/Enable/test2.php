<?php  

if (isset($_POST["action"])) {
	include('database_connection.php');
	if ($_POST["action"] == "fetch") {
		$output='';
		echo $query="select * from test order by name ASC";
		$statement=$connect->prepare($query);
		$statement->execute();
		$result=$statement->fetchAll();


		foreach ($result as $row) {
			$status='';
			if ($row["status"] == 'Active') {
				$status='<span class="label label-success">Active</span>';
			}
			else{
				$status='<span class="label label-danger">Inactive</span>';
			}
			$output='

		

		<table class="table table-bordered table-striped">
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Status</td>
				<td>Action</td>
				
			</tr>
		

		
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$status.'</td>
				<td><button type="button" name="action" class="btn btn-info btn-xs action" data-user_id="'.$row["id"].'"  data-user_status="'.$row["status"].'">Action</button></td>
			</tr>
			</table>
			';
		}
		
		echo $output;
	}
	if ($_POST["action"] == 'change_status') {
		$status='';
		if ($_POST['user_status'] == 'Active') {
			echo $status='Inactive';
		}
		else{
			echo $status='Active';
		}
		echo $query='update test set status=:user_status where id=:user_id';
		$statement=$connect->prepare($query);
		$statement->execute(
			array(
				':user_status' => $status, 
				':user_id' => $_POST['user_id']
			)
		);
		$result=$statement->fetchAll();
		if (isset($result)) {
			echo '<div class="alert alert-success"> users status has been set to <strong>'.$status.'</strong></div>';
		}
	}
}


?>