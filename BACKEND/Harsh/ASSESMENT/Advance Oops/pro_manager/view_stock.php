<?php

include_once('header.php');

?>

<div id="page-wrapper">

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">View Order</h1>

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
                                        <td>S_id</td>
                                        <td>Name</td>
										<td>Types</td>
										<td>Price</td>
										<td>qty</td>
										<td>Action</td>

                                       
                                    </tr>
                                </tbody>


                                <?php foreach ($vieword_arr as $vs) { ?>
                                    <tr>
										<td><?php echo $vs->s_id; ?></td>
                                        <td><?php echo $vs->Name; ?></td>
                                        <td><?php echo $vs->Types; ?></td>
										<td><?php echo $vs->Price; ?></td>
                                        <td><?php echo $vs->s_qty; ?></td>
										<td>
											<a href="delete?del_stock=<?php echo $vs->s_id?>" class="btn btn-danger">Delete</a>
										</td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

<?php

include_once('footer.php');

?>