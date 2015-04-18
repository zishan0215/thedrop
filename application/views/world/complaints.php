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
								<li>
									<a href="">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
											<ul>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Veroeros feugiat</a></li>
												<li><a href="#">Nisl sed aliquam</a></li>
												<li><a href="#">Dolore adipiscing</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Left Sidebar</a></li>
								<li><a href="right-sidebar.html">Right Sidebar</a></li>
								<li class="current"><a href="/thedrop/index.php/complaints">Complaints</a></li>
							</ul>
						</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main-wrapper">
				<div class="container">

					<!-- Content -->
						<article class="box post">
							<a href="#" class="image featured"><img src="/thedrop/assets/images/pic01.jpg" alt="" /></a>
							<header>
								<?php if($new_complaint) { ?><p class="bg-success text-success">Your complaint has been registered</p><?php } ?>
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
							<!-- <section>
								<header>
									<h3>Something else</h3>
								</header>
								<p>
									Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
									placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
									eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
									elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
									sit amet nullam consequat feugiat dolore tempus.
									Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
									placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
									eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
									elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor.
								</p>
								<p>
									Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
									eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
									elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
									sit amet nullam consequat feugiat dolore tempus.
								</p>
							</section>
							<section>
								<header>
									<h3>So in conclusion ...</h3>
								</header>
								<p>
									Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
									eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
									elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
									sit amet nullam consequat feugiat dolore tempus. Elementum odio duis semper risus et lectus commodo fringilla.
									Maecenas sagittis convallis justo vel mattis.
								</p>
							</section> -->
						</article>

				</div>
			</div>
