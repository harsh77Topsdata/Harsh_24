<?php

include_once('header.php');

?>

      <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style="text-align: center; margin-top: 20px;">User Profile</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="contact_us_2 layout_padding paddind_bottom_0">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="soc_text">soC</div>
               </div>
               <div class="col-md-6">
                  <h1><a href="#">Welcome : <?php echo $fetch->name ?></h1>
				  <p>Id : <?php echo $fetch->id; ?></p>
				  <p>Name : <?php echo $fetch->name; ?></p>
				  <p>Email : <?php echo $fetch->email; ?></p>
				  <p>Gender : <?php echo $fetch->gender; ?></p>
				  <a href="editprofile?user_edit=<?php echo $fetch->id;?>" class="btn btn-warning">Edit Profile</a>
				</div>
            </div>
         </div>
      </div>

      



<?php

include_once('footer.php');

?>