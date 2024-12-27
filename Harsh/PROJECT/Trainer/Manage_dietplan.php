<?php
include_once("header.php");
?>
<html>
<body>
		<div id="wrapper">
	   <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" align="center">Manage Dietplan</h1>
                    </div>
                </div>
                 <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                 <tbody>
								 <tr>
									<td>id</td>
								    <td>name</td>
									<td>preworkout</td>
									<td>postworkout</td>
									<td>Action</td>
								</tr>
								</tbody>
                                    <tbody>
                                        <?php foreach($diet_arr as $md){?>
										<tr>
											<td><?php echo $md->d_id?></td>
											<td><?php echo $md->name?></td>
											<td><?php echo $md->preworkout?></td>
											<td><?php echo $md->postworkout?></td>
											<td>
											<a href="" class="btn btn-primary">Edit</a>
											<a href="delete?Manage_dietplan=<?php echo $md->d_id ?>"
                                                class="btn btn-danger">Delete</a>
											</td>
										</tr>
										<?php }?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
</body>
</html>
					
<?php
include_once('footer.php');
?>