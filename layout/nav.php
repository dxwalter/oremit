            <div class="navContainer">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                  <img src="images/mainOremitLogo.jpg" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                      <a class="nav-link <?php if (isset($index)) {echo 'active'; }?>" href="index.php">Home</a>
                    </li>

                     <li class="nav-item">
                      <a class="nav-link <?php if (isset($service)) {echo 'active'; }?>"" href="index.php#services">SERVICES</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link <?php if (isset($about)) {echo 'active'; }?>" href="about.php">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php if (isset($project)) {echo 'active'; }?>" href="project.php">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php if (isset($contact)) {echo 'active'; }?>" href="contact.php">CONTACT US</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link quote" href="#" data-toggle="modal" data-target="#hireUs">HIRE US</a>
                    </li>
                  </ul>
                  
                </div>
                </nav>