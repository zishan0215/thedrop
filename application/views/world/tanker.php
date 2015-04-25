<link href="/thedrop/assets/css/morris.css" rel="stylesheet">
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
	              <li><a href="/thedrop/">Home</a></li>
	              <li><a href="/thedrop/index.php/projects/">Projects</a></li>
	              <li class="current"><a href="/thedrop/index.php/world/tanker/">Water Tanker</a></li>
	              <li><a href="/thedrop/index.php/complaints">Complaints</a></li>
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
							<div class="col-md-6 col-md-offset-4">
								<form class="form-inline" method="post" action="/thedrop/index.php/tanker">
									<div class="form-group">
										<input type="text" class="form-control" name="route" placeholder="Area Name">
									</div>
									<button type="submit" name="search" class="btn btn-default">Search</button>
								</form>
							</div>
							<div class="tanker">
								<image src="/thedrop/assets/images/tanker<?php echo $rid ?>.png" width="1090px">
								<br><br>
								<button class="btn btn-primary pull-right">Report</button>
							</div>
							<h1><?php echo $tinfo[0]->route ?></h1>
							<div>
								<table class="table">
									<tr>
										<th>Tanker ID</th>
										<th>Place</th>
										<th>Arrival Time</th>
										<th>Departure Time</th>
										<th>Vehicle ID</th>
										<th>Filling Time</th>
									</tr>

										<?php
											foreach($tinfo as $t) {
												echo "<tr>";
												echo "<td>$t->tid</td>";
												echo "<td>$t->place</td>";
												echo "<td>$t->arrival</td>";
												echo "<td>$t->departure</td>";
												echo "<td>$t->vid</td>";
												echo "<td>$t->filling</td>";
												echo "</tr>";
											}
										?>
								</table>
							</div>

						</article>
				</div>
			</div>
