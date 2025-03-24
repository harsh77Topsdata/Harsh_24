<?php
include_once("header.php");
?>

<div id="page-wrapper">

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line" align="center">Manage Contactus</h1>

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
                                        <td>email</td>
                                        <td>comment</td>
										<td>Action</td>

                                    </tr>
                                </tbody>


                                <?php foreach ($contact_arr as $mc) { ?>
                                    <tr>
                                        <td><?php echo $mc->c_id ?></td>
                                        <td><?php echo $mc->Name ?></td>
                                        <td><?php echo $mc->Email ?></td>
                                        <td><?php echo $mc->Comment; ?></td>
                                        <td><a href="" class="btn btn-primary">Edit</a>
                                            <a href="delete?Manage_contacts=<?php echo $mc->c_id ?>"
                                                class="btn btn-danger">Delete</a>
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