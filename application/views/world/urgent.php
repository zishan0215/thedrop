</head>

<body class="no-sidebar">

  <!-- Header -->
    <div id="header-wrapper">
      <div id="header">

        <!-- Logo -->
          <h1><a href="/thedrop/">The Drop</a></h1>

        <!-- Nav -->
          <nav id="nav">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li><a href="left-sidebar.html">Left Sidebar</a></li>
              <li><a href="right-sidebar.html">Right Sidebar</a></li>
              <li><a href="/thedrop/index.php/complaints">Complaints</a></li>
              <li class="current"><a href="/thedrop/index.php/complaints/urgent">Urgent Complaint</a></li>
            </ul>
          </nav>

      </div>
    </div>

  <!-- Main -->
    <div id="main-wrapper">
      <div class="container">

        <!-- Content -->
          <article class="box post">
            <!-- <a href="#" class="image featured"><img src="/thedrop/assets/images/pic01.jpg" alt="" /></a> -->
            <header>
              <div class="center-block">
                <h2>Urgent Complaint</h2>
                <h4>For broken/leaking pipes</h4>
              </div>
            </header>
            <div class="center-block">
              <form method="post" action="/thedrop/index.php/complaints/add_urgent">
                <table class="table">
                  <tr><td>Full Name* </td><td><input type="text" name="cname"></td></tr>
                  <tr><td>Mobile No.* </td><td><input type="text" name="mobile"></td></tr>
                  <tr><td>Location*</td><td><input type="text" name="area"></td></tr>
                </table>
                <input type="hidden" name="new_urg" value="1">
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
            </div>
          </article>

          <article class="box post">
            <header>
              <?php if($new_complaint) { ?><p class="bg-success text-success">Your complaint has been registered</p><?php } ?>
              <h2>List of Urgent Complaints</h2>
            </header>
            <table class="table">
                <tr>
                  <th>Complaint No.</th>
                  <th>Filed By</th>
                  <th>Location</th>
                  <th>Status</th>
                  <th>Authority</th>
                </tr>
                <?php
                  foreach($complaints as $c) {
                    echo "<tr>";
                    echo "<td>$c->uid</td>";
                    echo "<td>$c->cname</td>";
                    echo "<td>$c->location</td>";
                    echo "<td>$c->status</td>";
                    echo "<td>$c->authority</td>";
                    echo "<td>";
                  ?>
                      <form method="post" action="/thedrop/index.php/complaints/view">
                        <input type="hidden" name="cid" value="<?php echo $c->cid ?>">
                        <button class="btn btn-default" type="submit">View</button>
                      </form>
                  <?php
                    echo "</td>";
                    echo "</tr>";
                  }
                ?>
            </table>
          </article>
      </div>
    </div>
