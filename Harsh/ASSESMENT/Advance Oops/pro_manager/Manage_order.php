<?php

include_once('header.php');

?>

<div id="page-wrapper">

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Manage Order</h1>

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
                                        <td>o_id</td>
                                        <td>cust_id</td>
										<td>o_date</td>
                                        <td>address</td>
										<td>s_id</td>
										<td>Action</td>
                                    </tr>
                                </tbody>


                                <?php foreach ($maorder_arr as $mo) { ?>
                                    <tr>
                                        <td><?php echo $mo->o_id; ?></td>
                                        <td><?php echo $mo->cust_id; ?></td>
                                        <td><?php echo $mo->o_date; ?></td>
                                        <td><?php echo $mo->address; ?></td>
										<td><?php echo $mo->s_id; ?></td>
                                        <td>
                                            <a href="delete?del_order=<?php echo $mo->o_id?>" class="btn btn-danger">Delete</a>
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