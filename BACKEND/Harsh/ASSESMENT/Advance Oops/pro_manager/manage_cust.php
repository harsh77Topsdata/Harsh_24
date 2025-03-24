<?php

include_once('header.php');

?>

<div id="page-wrapper">

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Manage Customer</h1>

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
                                        <td>id</td>
                                        <td>name</td>
										<td>contact</td>
                                        <td>email</td>
                                        <td>gender</td>
										<td>password</td>
										<td>Action</td>

                                    </tr>
                                </tbody>


                                <?php foreach ($managecust_arr as $mc) { ?>
                                    <tr>
                                        <td><?php echo $mc->cust_id; ?></td>
                                        <td><?php echo $mc->name; ?></td>
                                        <td><?php echo $mc->contact; ?></td>
                                        <td><?php echo $mc->email; ?></td>
										<td><?php echo $mc->gender; ?></td>
										<td><?php echo $mc->password; ?></td>
                                        <td><a href="delete?del_customer=<?php echo $mc->id?>" class="btn btn-danger">Delete</a>
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