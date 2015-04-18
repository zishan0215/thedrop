
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/thedrop/index.php/admin/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            View Urgent Complaint
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-md-8 col-md-offset-2">
                  <form method="post" action="/thedrop/index.php/admin/update_urgent">
                    <table class="table">
                      <tr>
                        <th>Complaint Id</th>
                        <td><?php echo $complaint->uid ?></td>
                      </tr>
                      <tr>
                        <th>Filed By</th>
                        <td><?php echo $complaint->cname ?></td>
                      </tr>
                      <tr>
                        <th>Problem Area</th>
                        <td><?php echo $complaint->location ?></td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <th>Authority</th>
                        <td><input type="text" name="authority"></td>
                      </tr>
                      <tr></tr>
                      <tr>
                        <th>Status</th>
                        <td><input type="text" name="status" value="<?php echo $complaint->status ?>"></td>
                      </tr>
                    </table>
                    <input type="hidden" name="uid" value="<?php echo $complaint->uid ?>">
                    <div class="col-md-6 col-md-offset-3">
                      <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  </form>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
