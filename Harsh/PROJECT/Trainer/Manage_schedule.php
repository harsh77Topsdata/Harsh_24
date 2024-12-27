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
                        <h1 class="page-head-line" align="center">Manage Schedule</h1>
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
                                                <td>days</td>
                                                <td>times</td>
												<td>Action</td>
                                            </tr>
                                        </tbody>

                                        <tbody>
                                            <?php foreach ($schedule_arr as $ms) { ?>
                                                <tr>
                                                    <td><?php echo $ms->m_id ?></td>
                                                    <td><?php echo $ms->name ?></td>
                                                    <td><?php echo $ms->days ?></td>
                                                    <td><?php echo $ms->time ?></td>
													 <td><a href="" class="btn btn-primary">Edit</a>
													<a href="delete?Manage_schedule=<?php echo $ms->m_id ?>"
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
</body>

</html>

<?php
include_once('footer.php');
?>