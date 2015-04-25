
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="/thedrop/index.php/admin/"> Dashboard</a>
                    </li>
                    <li>
                      <a href="/thedrop/index.php/admin/get_complaints"> Complaints</a>
                    </li>
                    <li>
                      <a href="javascript:;" data-toggle="collapse" data-target="#tanker"> Tanker</a>
                      <ul id="tanker" class="collapse">
                          <li>
                              <a href="/thedrop/index.php/admin/tanker">View Tankers</a>
                          </li>
                          <li>
                              <a href="/thedrop/index.php/admin/add_tanker">Add Tanker</a>
                          </li>
                      </ul>
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
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $ures ?></div>
                                        <div>New Complaints!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/thedrop/index.php/admin/new_complaints">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $urgent ?></div>
                                        <div>New Urgent Complaints!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/thedrop/index.php/admin/new_urgent">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $esc ?></div>
                                        <div>Escalated Complaints!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="/thedrop/index.php/admin/esc_complaints">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
	                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
