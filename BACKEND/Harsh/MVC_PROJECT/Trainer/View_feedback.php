<?php

include_once('header.php');

?>


<div id="page-wrapper">

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" align="center">View Feedback</h1>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <tbody>
                                <tbody>
                                    <tr>
                                        <td>V_id</td>
										<td>Cust_id</td>
										<td>Name</td>
                                        <td>Coment</td>
										<td>Action</td>
									</tr>
                                </tbody>


                                <?php foreach ($feedback_arr as $fa) { ?>
                                    <tr>
                                        <td><?php echo $fa->v_id ?></td>
										 <td><?php echo $fa->cust_id ?></td>
										 <td><?php echo $fa->name; ?></td>
                                        <td><?php echo $fa->coment; ?></td>
										<td>
											<a href="delete?View_feedback=<?php echo $fa->v_id ?>"
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
		</div>
	</div>

<?php

include_once('footer.php');

?>