<?php
include_once("header.php");
?>
<div id="wrapper">
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Manage Contactus</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                    <tbody>
                                        <tr>
                                            <td>name</td>
                                            <td>email</td>
                                            <td>comment</td>

                                        </tr>
                                    </tbody>
                                    <?php foreach ($contact_arr as $mc) { ?>
                                        <tr>

                                            <td><?php echo $mc->Name ?></td>
                                            <td><?php echo $mc->Email ?></td>
                                            <td><?php echo $mc->comment ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include_once('footer.php');
                ?>