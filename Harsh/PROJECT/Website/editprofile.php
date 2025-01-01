<?php

if(isset($_seesion['userid']))
{
	echo "<script>
		window.loction='index'
		</script>";
}

include_once('header.php');

?>

<html>

<body>

    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <img class="img-fluid mb-4 mb-lg-3" src="img/<?php echo $fetch->Photo;?>" alt="Image">
            </div>
            <form enctype="multipart/form-data" class="form-contact contact_form" action="" method="post" >
            <div class="row">
				 <div class="col-sm-12">
					<div class="form-group">
					<input class="form-control valid" value="<?php echo $fetch->Name;?>" name="name" id="email" type="text" placeholder="Enter Name">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
					<input class="form-control valid" value="<?php echo $fetch->Email;?>" name="email" id="email" type="text" placeholder="Enter email">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group">
					<input class="form-control valid" name="file" id="" type="file" placeholder="uplode your profile image">
					
					</div>
				</div>
				 <div class="form-group mt-3">
                        <button type="submit" name="save"  class="button button-contactForm boxed-btn">Save</button>
						<br>
						<br>
						<a href="userprofile" class="ms-5 text-primary">Back</a>
							</div>
		  </div>
	      </form>
        </div>
    </div>
    

<?php

include_once('footer.php');

?>

