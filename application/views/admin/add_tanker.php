
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="/thedrop/index.php/admin/"> Dashboard</a>
                    </li>
                    <li>
                        <a href="/thedrop/index.php/admin/get_complaints"> Complaints</a>
                    </li>
                    <li class="active">
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
                            Add Tanker
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="/thedrop/index.php/admin/add_tanker">
                      <table class="table">
                        <tr>
                          <th>Place</th>
                          <td><input type="text" name="place"></td>
                        </tr>
                        <tr>
                          <th>Arrival Time</th>
                          <td><input type="text" name="atime"></td>
                        </tr>
                        <tr>
                          <th>Departure Time</th>
                          <td><input type="text" name="dtime"></td>
                        </tr>
                        <tr>
                          <th>Vehicle Id</th>
                          <td><input type="text" name="vid"></td>
                        </tr>
                        <tr>
                          <th>Filling Point</th>
                          <td><input type="text" name="filling"></td>
                        </tr>
                      </table>
                      <div class="col-md-2 col-md-offset-3">
                        <button class="btn btn-success" type="submit" value="add_tanker">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
