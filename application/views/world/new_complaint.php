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
            <!-- <a href="#" class="image featured"><img src="/thedrop/assets/images/pic01.jpg" alt="" /></a> -->
            <header>
              <div class="center-block">
                <h2>Review Complaint</h2>
              </div>
            </header>
            <div class="center-block">
              <form method="post" action="/thedrop/index.php/complaints/add_complaint">
                <table class="table">
                  <tr><td>Full Name* </td><td><input type="text" name="cname"></td></tr>
                  <tr><td>Mobile No. </td><td><input type="text" name="mobile"></td></tr>
                  <tr><td>Address</td><td><input type="text" name="address"></td></tr>
                  <tr><td>Area Name*</td><td><input type="text" name="area"></td></tr>
                  <tr><td>Problem Description*</td><td><input type="text" name="description"></td></tr>
                </table>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
            </div>
          </article>

      </div>
    </div>
