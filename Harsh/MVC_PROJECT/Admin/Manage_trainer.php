<?php 

include_once('header.php');

?>

    <div id="wrapper">
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line" align="center">Manage Trainer</h1>
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
												<td>T id </td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Gender</td>
                                                <td>Photo</td>
												<td>Action</td>
                                            </tr>
                                        </tbody>
                                        <tbody>
                                            <?php foreach ($mtrainer_arr as $tm) { ?>
                                                <tr>
                                                    <td><?php echo $tm->t_id ?></td>
                                                    <td><?php echo $tm->name ?></td>
                                                    <td><?php echo $tm->email ?></td>
                                                    <td><?php echo $tm->gender ?></td>
													<td><?php echo $tm->file ?></td>
													<td>
													<a href="" class="btn btn-primary">Edit</a>
													<a href="delete?Manage_Trainer=<?php echo $tm->t_id ?>"
                                                class="btn btn-danger">Delete</a>
													
													</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</div>


<?php

include_once('footer.php');


?>