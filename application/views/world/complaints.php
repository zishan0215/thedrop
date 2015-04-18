<link href="/thedrop/assets/css/morris.css" rel="stylesheet">
<style>
	.panel-title {
		display:none;
	}
</style>
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
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li class="current"><a href="/thedrop/index.php/complaints">Complaints</a></li>
								<li><a href="/thedrop/index.php/complaints/urgent">Urgent Complaint</a></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">

					<!-- Content -->
						<article class="box post">
							<?php if($new_complaint) { ?><p class="bg-success text-success ack">Your complaint has been registered. Complaint Id: <?php echo $new_complaint ?></p><?php } ?>
							<div class="row">
										<div class="col-lg-3 col-md-6 left-space">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total ?></div>
                                        <div>Total Complaints</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
										<div class="col-lg-3 col-md-6 left-space">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $res ?></div>
                                        <div>Complaints Resolved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
										<div class="col-lg-3 col-md-6 left-space">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $ures ?></div>
                                        <div>Complaints Unresolved</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
							<header>
								<p class="pull-right"><a href="/thedrop/index.php/complaints/new_complaint">File Complaint</a></p>
								<h2>List of Complaints</h2>
							</header>
							<table class="table">
									<tr>
										<th>Complaint No.</th>
										<th>Full Name</th>
										<th>Area</th>
										<th>Description</th>
										<th>Status</th>
										<th>Authority</th>
										<th>View</th>
									</tr>
									<?php
										foreach($complaints as $c) {
											echo "<tr>";
											echo "<td>$c->cid</td>";
											echo "<td>$c->cname</td>";
											echo "<td>$c->area</td>";
											echo "<td>$c->description</td>";
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

			<!-- Morris Charts JavaScript -->
			<script src="/thedrop/assets/js/raphael.min.js"></script>
			<script src="/thedrop/assets/js/morris.min.js"></script>
		<script>
				new Morris.Area({
						element: 'morris-area-chart',
						data: [{
								period: '2010 Q1',
								Resolved: 2666,
								Reviewing: null,
								New: 2647
						}, {
								period: '2010 Q2',
								Resolved: 2778,
								Reviewing: 2294,
								New: 2441
						}, {
								period: '2010 Q3',
								Resolved: 4912,
								Reviewing: 1969,
								New: 2501
						}, {
								period: '2010 Q4',
								Resolved: 3767,
								Reviewing: 3597,
								New: 5689
						}, {
								period: '2011 Q1',
								Resolved: 6810,
								Reviewing: 1914,
								New: 2293
						}, {
								period: '2011 Q2',
								Resolved: 5670,
								Reviewing: 4293,
								New: 1881
						}, {
								period: '2011 Q3',
								Resolved: 4820,
								Reviewing: 3795,
								New: 1588
						}, {
								period: '2011 Q4',
								Resolved: 15073,
								Reviewing: 5967,
								New: 5175
						}, {
								period: '2012 Q1',
								Resolved: 10687,
								Reviewing: 4460,
								New: 2028
						}, {
								period: '2012 Q2',
								Resolved: 8432,
								Reviewing: 5713,
								New: 1791
						}],
						xkey: 'period',
						ykeys: ['Resolved', 'Reviewing', 'New'],
						labels: ['Resolved', 'Reviewing', 'New'],
						pointSize: 2,
						hideHover: 'auto',
						resize: true
			});

			document.addEventListener('DOMContentLoaded', function() {
				var element = document.getElementById("skel-layers-hiddenWrapper");
				element.outerHTML = "";
			}, false);
		</script>
