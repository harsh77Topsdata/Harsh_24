<?php
include_once('header.php');
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" align="center">Trainer Forms</h1>


            </div>
        </div>


        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Add Trainer Form
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="post" enctype='multipart/form-data'>
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input class="form-control" name="name" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Enter Email</label>
                            <input class="form-control" type="text" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input class="form-control" type="text" name="password" required>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                Gender :
                                Male : <input name="gender" type="radio" value="Male" />
                                Female : <input name="gender" type="radio" value="Female" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                Language :
                                Hindi : <input name="lag[]" type="checkbox" value="Hindi" />
                                English : <input name="lag[]" type="checkbox" value="English" />
                                Gujarati : <input name="lag[]" type="checkbox" value="Gujarati" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control valid" name="file" type="file"
                                    placeholder="Upload your Profile Iamge">
                            </div>
                        </div>



                        <button type="submit" name="submit" class="btn btn-info">submit</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>



<?php

include_once('footer.php');

?>

</body>

</html>