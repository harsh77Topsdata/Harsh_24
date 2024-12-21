<?php

include_once('header.php');

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">pro_manager Forms</h1>
                        <h1 class="page-subhead-line">plese sumited your detailes </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           pro_manager Forms
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group">
                                            <label>Enter Name</label>
                                            <input class="form-control" type="text" required>
                                        </div>
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="text"	required>
                                 </div>
								   <div class="form-group">
                            <label>Enter Password</label>
                            <input class="form-control" type="text" required>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                Gender :
                                Male : <input name="gender" type="radio" value="Male" />
                                Female : <input name="gender" type="radio" value="Female" />
                            </div>
                        </div>
                       
                        
                        <button type="submit" class="btn btn-info">SUBMIT</button>
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