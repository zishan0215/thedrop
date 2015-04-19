</head>

<?php $c = $complaint[0]; ?>
<body class="no-sidebar">

  <!-- Header -->
    <div id="header-wrapper">
      <div id="header">

        <!-- Logo -->
          <h1><a href="/thedrop/">The Drop</a></h1>

        <!-- Nav -->
          <nav id="nav">
            <ul>
              <li><a href="/thedrop/">Home</a></li>
              <li><a href="/thedrop/index.php/projects/">Projects</a></li>
              <li><a href="/thedrop/index.php/tanker/">Water Tanker</a></li>
              <li class="current"><a href="/thedrop/index.php/complaints">Complaints</a></li>
              <li><a href="/thedrop/index.php/complaints/urgent">Urgent Complaint</a></li>
              <li><a href="/thedrop/index.php/forum/">Forum</a></li>
            </ul>
          </nav>

      </div>
    </div>

  <!-- Main -->
    <div id="main-wrapper">
      <div class="container">

        <!-- Content -->
          <article class="box post">
            <header>
              <div class="center-block">
                <h2>Review Complaint</h2>
              </div>
            </header>
            <div class="row">
              <div class="col-md-6">
                <table class="table">
                  <tr><td>Complaint No.</td><td><?php echo $c->cid ?></td></tr>
                  <tr></tr><tr><td>Filed by </td><td><?php echo $c->cname ?></td></tr>
                  <tr><td>Address</td><td><?php echo $c->address ?></td></tr>
                  <tr><td>Problem area</td><td><?php echo $c->area ?></td></tr>
                  <tr><td>Problem Description</td><td><?php echo $c->description ?></td></tr>
                  <tr><td>Auhority</td><td><?php echo $c->authority ?></td></tr>
                  <tr><td>Status</td><td><?php echo $c->status ?></td></tr>
                  <tr></tr><tr><td>Filed on</td><td><?php echo $c->timestamp ?></td></tr>
                </table>
                <form class="form-inline" action="/thedrop/index.php/complaints/escalate" method="post">
                  <input type="hidden" name="cid" value="<?php echo $c->cid ?>">
                  <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile Number">&nbsp;&nbsp;
                  <button type="submit" class="btn btn-default">Escalate</button>
                </form>
              </div>
              <div class="col-md-6">
                <!-- <?php $offx=$lati/40; $offy=$longi/40; ?> -->
                <!-- <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo urlencode($c->area) ?>&zoom=13&size=500x360&markers=color:red%7Clabel:S%7C<?php echo $c->area ?>&path=color:0x00000000|weight:5|fillcolor:0xFFFF0033|<?php echo $longi - $offx ?>,<?php echo $lati - $offy ?>|<?php echo $longi - $offx ?>,<?php echo $lati + $offy ?>|<?php echo $longi + $offx ?>,<?php echo $lati - $offy ?>|<?php echo $longi + $offx ?>,<?php echo $lati + $offy ?>" alt="" /> -->
                <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo urlencode($c->area) ?>&zoom=13&size=500x360&markers=color:red%7Clabel:S%7C<?php echo $c->area ?>" alt="" />
              </div>

            </div>
          </article>

      </div>
    </div>
