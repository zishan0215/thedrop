
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/thedrop/index.php/admin/"> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="/thedrop/index.php/admin/get_complaints"> Complaints</a>
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
                            List of Complaints
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <table class="table">
                  <tr>
                    <th>Complaint Id</th>
                    <th>Filed By</th>
                    <th>Problem Area</th>
                    <th>Description</th>
                    <th>Authority</th>
                    <th>Status</th>
                  </tr>

                    <?php
                      foreach($complaints as $n) {
                        echo "<tr>";
                        echo "<td>$n->cid</td>";
                        echo "<td>$n->cname</td>";
                        echo "<td>$n->area</td>";
                        echo "<td>$n->description</td>";
                        echo "<td>$n->authority</td>";
                        echo "<td>$n->status</td>";
                        echo "</tr>";
                      }
                    ?>
                </table>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
