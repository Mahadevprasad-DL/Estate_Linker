<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
    <div class="top-header bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="top-contact list-text-white d-table">
                        <li>FlatValue Services and Rentals</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="top-contact float-right">
                        <ul class="list-text-white d-table">
                            <li>
                                <i class="fas fa-user text-primary mr-1"></i>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <a href="logout.php">Logout</a>&nbsp;&nbsp;
                                <?php } else { ?>
                                    <a href="login.php">Login</a>&nbsp;&nbsp;
                                <?php } ?>
                                |
                            </li>
                            <li><i class="fas fa-user text-primary mr-1"></i><a href="register.php"> Register</a></li>
                            <!-- Three-Line Menu Icon -->
                            <li class="dropdown">

                                <i class="fas fa-bars text-primary mr-1 dropdown-toggle" id="menuDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">  Menu</i>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menuDropdown">
                                    <a class="dropdown-item" href="post_property.php">Post Your Property</a>
                                    <a class="dropdown-item" href="rental_agreement.php">Rental Agreement</a>
                                    <a class="dropdown-item" href="ser.html">Services</a>
                                    <a class="dropdown-item" href="owner.html">Owner Plans</a>
                                    <a class="dropdown-item" href="painting.php">Buyer Plans</a>
                                    <a class="dropdown-item" href="cleaning.php">Seller Plans</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="contact.php">Contact US</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-nav secondary-nav hover-primary-nav py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <a class="navbar-brand position-relative" href="#">
                            <img class="nav-logo" src="images/logo/logo1.png" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="loan.html">Home loan</a>
                                </li>
                                <?php if (isset($_SESSION['uemail'])) { ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                                            <li class="nav-item"><a class="nav-link" href="feature.php">Your Property</a></li>
                                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li class="nav-item"><a class="nav-link" href="login.php">Login/Register</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Add this to your CSS file for styling the dropdown menu icon and positioning -->
<style>
    /* Adjust dropdown icon size and spacing */
    .top-contact .fa-bars {
        font-size: 1.2em;
        color: #fff;
        padding-left: 10px;
    }
    /* Dropdown menu styling */
    .dropdown-menu-right {
        min-width: 160px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .dropdown-item {
        font-size: 0.9em;
        padding: 8px 16px;
        color: #333;
    }
    .dropdown-item:hover {
        background-color: #f1f1f1;
    }
</style>
