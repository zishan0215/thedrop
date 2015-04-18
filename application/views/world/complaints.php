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
								<h2>List of Complaints</h2>
								<!-- <p>Lorem ipsum dolor sit amet feugiat</p> -->
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

		<!-- Footer -->
			<div id="footer-wrapper">
				<section id="footer" class="container">
					<div class="row">
						<div class="4u">
							<section>
								<header>
									<h2>Tempus consequat</h2>
								</header>
								<ul class="divided">
									<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
									<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
									<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
									<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
									<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
									<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Ipsum et phasellus</h2>
								</header>
								<ul class="divided">
									<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
									<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
									<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
									<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
									<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
									<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section>
								<header>
									<h2>Vitae tempor lorem</h2>
								</header>
								<ul class="social">
									<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
									<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
									<li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
									<li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
									<li><a class="icon fa-google-plus" href="#"><span class="label">Google+</span></a></li>
								</ul>
								<ul class="contact">
									<li>
										<h3>Address</h3>
										<p>
											Untitled Incorporated<br />
											1234 Somewhere Road Suite<br />
											Nashville, TN 00000-0000
										</p>
									</li>
									<li>
										<h3>Mail</h3>
										<p><a href="#">someone@untitled.tld</a></p>
									</li>
									<li>
										<h3>Phone</h3>
										<p>(800) 000-0000</p>
									</li>
								</ul>
							</section>
						</div>
					</div>
					<div class="row">
						<div class="12u">

							<!-- Copyright -->
								<div id="copyright">
									<ul class="links">
										<li>&copy; Untitled. All rights reserved.</li>
									</ul>
								</div>

						</div>
					</div>
				</section>
			</div>

	</body>
</html>
