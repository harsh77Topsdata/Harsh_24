<?php

include_once('header.php');
if(!isset($_SESSION['username']))
{
	echo "<script>
	alert('Login first');
	window.location='login';
	</script>";
}
?>

<html>

<body>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <img class="img-fluid mb-4 mb-lg-0" src="img/<?php echo $fetch->Photo;?>" alt="Image">
            </div>
            <div class="col-lg-9">
                <h5><a href="#">Welcome :<?php echo $fetch->Name?></a></h5>
                                    <p>ID : <?php echo $fetch->Cust_id;?></p>
									<p>Email : <?php echo $fetch->Email;?></p>
									<p>Upload photo : <?php echo $fetch->Photo;?></p>
									<p>Status : <?php echo $fetch->Gender;?></p>
									
									<a href="editprofile?user_edit=<?php echo $fetch->Cust_id;?>" class="btn btn-danger">Edit Profile</a>
									<br>
									<br>
									<a href="feedback?feedback=<?php echo $fetch->Cust_id;?>" class="btn btn-danger">Feedback</a>
									
            </div>
        </div>
    </div>
    

<?php

include_once('footer.php');

?>