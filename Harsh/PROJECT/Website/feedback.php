<?php

include_once('header.php'); 

?>

   <section class="contact-section">
            <div class="col-md-6">

		<div class="container mt-5">
		   
            <h1 class="text-center border-bottom mb-3">Feedback</h1>
            <form action="" method="post" >
                <div class="form-group mt-2">
                    <label for="name">Your Name</label>
                    <input type="name" name="name" id="" value="<?php echo $fetch->Name?>" class="form-control" disabled>
                </div>
                <div class="form-group mt-2">
					<label for="text">Share feedback</label>
					<textarea class="form-control"  id="coment" name="coment" rows="3"></textarea>
				</div>
                <div class="form-group mt-2">
                    <input type="submit" value="Submit" name="submit" class="btn btn-danger">
                    
                </div>
            </form>
        </div>
            </div>
        </section>

<?php

include_once('footer.php');

?>