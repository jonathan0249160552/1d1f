<?php
// session_start();
require 'assets/php/session.php';
?>

<div class="w3l-headers-9">
            <header>
                <div class="wrapper">
                    <div class="header">

                        <div>
                            <h1>

                                <a class="logo" href="index.php">
                                    <img src="assets/images/logo.jpeg" alt="Your logo" title="Your logo"
                                        style="height:35px;" />
                                </a>
                            </h1>
                        </div>
                        <div class="bottom-menu-content">
                            <input type="checkbox" id="nav" />
                            <label for="nav" class="menu-bar"></label>
                            <nav>
                                <ul class="menu">
                                    <li><a href="home.php" class="link-nav">Home</a></li>
                                    <li><a href="about.php" class="link-nav">About</a></li>
                                    <li>
                                        <!-- First Tier Drop Down -->
                                        <label for="drop-2" class="toggle toogle-2">Pages <span class="fa fa-caret-down"
                                                aria-hidden="true"></span></label>
                                        <a href="#pages" class="link-nav dropdown-toggle">Pages <span
                                                class="fa fa-caret-down" aria-hidden="true"></span></a>
                                        <input type="checkbox" id="drop-2" />
                                        <ul class="first-dropdwon">
                                            <li><a href="services.php">Product Exhibitions</a></li>
                                            <li><a href="jobs.php">Jobs</a></li>
                                            <li><a href="services-single.php">About IDIF</a></li>
                                            <!-- <li><a href="team.php">Team Page</a></li> -->
                                            <!-- <li><a href="team-single.php">Team single</a></li> -->
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <!-- <li><a href="portfolio-single.php">Portfolio Single</a></li> -->
                                            <li><a href="timeline.php">Projects timeline</a></li>
                                            <li><a href="faq.php">Faq page</a></li>
                                            <!-- <li><a href="coming-soon.php">Coming Soon</a></li> -->
                                            <!-- <li><a href="error.php">404 - error</a></li> -->
                                            <!-- <li><a href="search-results.php">Search Results</a></li>
                                            <li><a href="email-template.php">Email Template</a></li> -->
                                        </ul>
                                    </li>
                                    <li>
                                        <label for="drop-3" class="toggle toogle-2">Blog <span class="fa fa-caret-down"
                                                aria-hidden="true"></span></label>
                                        <a href="#blog" class="link-nav dropdown-toggle">Blog <span
                                                class="fa fa-caret-down" aria-hidden="true"></span></a>
                                        <input type="checkbox" id="drop-3" />
                                        <ul>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog-single.php">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <label for="drop-4" class="toggle toogle-2">Profile <span
                                                class="fa fa-caret-down" aria-hidden="true"></span></label>
                                        <a href="#shop" class="link-nav dropdown-toggle">Profile <span
                                                class="fa fa-caret-down" aria-hidden="true"></span></a>
                                        <input type="checkbox" id="drop-4" />
                                        <ul>
                                            <li><a href="logout.php">Logout</a></li>
                                            <li><a href="profile.php">Profile</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <label for="drop-5" class="toggle toogle-2">Shop <span class="fa fa-caret-down"
                                                aria-hidden="true"></span></label>
                                        <a href="#shop" class="link-nav dropdown-toggle">Shop <span
                                                class="fa fa-caret-down" aria-hidden="true"></span></a>
                                        <input type="checkbox" id="drop-5" />
                                        <ul>
                                            <li><a href="ecommerce.php">Ecommerce</a></li>
                                            <!-- <li><a href="ecommerce-single.php">Ecommerce Single</a></li> -->
                                            <li><a href="ecommerce-cart.php">Ecommerce Cart</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php" class="link-nav">Contact</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- //header -->
        </div>

       