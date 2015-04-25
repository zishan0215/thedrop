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
	              <li class="current"><a href="/thedrop/index.php/projects/">Projects</a></li>
	              <li><a href="/thedrop/index.php/tanker/">Water Tanker</a></li>
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
							<h1>List of projects</h1>
							<div>
								<table class="table">
									<tr>
										<th>S No.</th>
										<th>Title</th>
										<th>Description</th>
										<th>Fund</th>
										<th>Authority</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Status</th>
										<th>View</th>
									</tr>
									<?php
										$i=1;
										foreach($projects as $p) {
											echo "<tr>";
											echo "<td>$i</td>";
											echo "<td>$p->title</td>";
											echo "<td>$p->description</td>";
											echo "<td>$p->fund</td>";
											echo "<td>$p->authority</td>";
											echo "<td>$p->start_date</td>";
											echo "<td>$p->end_date</td>";
											echo "<td>$p->status</td>";
											echo "<td><button class=\"btn btn-warning\">View</button></td>";
											echo "</tr>";
											$i++;
										}
									?>
								</table>
							</div>
						</article>
				</div>
			</div>
