<?php

include_once('header.php');

?>

   <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADD PRODUCT</h1>
                        <h1 class="page-subhead-line">Please Add your product</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD PRODUCT
                        </div>
                        <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter product Name</label>
                                            <input class="form-control" name="Name"type="text" required>
                                        </div>
                                 <div class="form-group">
                                            <label>Enter product type</label>
                                            <input class="form-control" name="Types"type="text"	required>
                                 </div>
						<div class="form-group">
                            <label>Enter product Price</label>
                            <input class="form-control" type="text" name="Price" required>
                        </div>
                        <div class="form-group">
                            <label>Enter product Qty</label>
                            <input class="form-control" type="number" name="qty" required>
                        </div>
						<div class="form-group">
                            <label>Enter Product Image</label>
                            <input class="form-control" type="file" name="image" required>
                        </div>
						<button type="submit" name="submit" class="btn btn-info">SUBMIT</button>
						</form>
                            </div>
                        </div>
                            </div>
							</div>
						</div>
    </div>

<?php

include_once('footer.php');

?>