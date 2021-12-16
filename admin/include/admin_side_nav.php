<nav id="sidebar" class="sidebar">
    <a class="sidebar-brand" href="index.php">
        Digitech
    </a>
    <div class="sidebar-content">
        <div class="sidebar-user">
            <img alt="Chris Wood" src="./img/avatars/avatar-2.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128"> 
           
            <div class="fw-bold" style="font-size: 12px;margin-top: 10px">Hirusha</div>
            <small>Admin</small>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>


            <li class="sidebar-item ">
                <a class="sidebar-link" href="index.php"> 
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboards</span>
                </a>
            </li>

            <li class="sidebar-item ">
                <a data-bs-target="#service"  class="sidebar-link" href="service.php">
                    <i class="align-middle me-2 fas fa-fw fa-user-friends"></i> <span class="align-middle">Service</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#project"  class="sidebar-link">
                    <i class="align-middle me-2 fas fa-fw fa-globe"></i> <span class="align-middle">Project</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#blog"  class="sidebar-link">
                    <i class="align-middle me-2 fas fa-fw fa-cubes"></i> <span class="align-middle">Blog</span>
                </a>
            </li>


            <li class="sidebar-item">
                <a data-bs-target="#page" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-wrench"></i> <span class="align-middle">Pages</span>
                </a>
                <ul id="page" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="servicesPage">Manage Services</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="servicesTypePage">Manage Services Type</a></li>
                </ul>
            </li>



            <li class="sidebar-item">
                <a data-bs-target="#faq" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-question"></i> <span class="align-middle">FAQ</span>
                </a>
                <ul id="faq" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="faqPage">Manage FAQ</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#profile" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-user"></i> <span class="align-middle">My Profile</span>
                </a>
                <ul id="profile" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">      

                    <li class="sidebar-item"><a class="sidebar-link" href="adminProfilePage">Profile Settings</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="adminSignOut">Sign Out</a></li>

                </ul>
            </li>
        </ul>
    </div>
</nav>