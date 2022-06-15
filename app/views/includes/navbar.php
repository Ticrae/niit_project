<header>
<nav id="main-nav">
            <div class="header-icons">
                <div class="ham">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="search-btn">
                    <i id="sch-btn" class="fas fa-search"></i>
                    <div class="input-men">
                    <input  type="text" placeholder="SEARCH">
                    <button>GO</button>
                    </div>
                </div>
                <div id="date"></div>
            </div>
            <div class="header-title">
                <a href="<?php echo URLROOT; ?>/index"><h2>The World Equals Magazine</h2></a>
            </div>
            <div class="times">
                <i class="fas fa-times"></i>
            </div>
            <div class="header-btns">
                <?php if(isset($_SESSION['id'])) : ?>
                    <i class="fas fa-user"></i>
                    <a id="sub-btn" class="user1" href="">Welcome <?php echo $_SESSION['username'] ?></a>
                    <a id="log-btn" class="user1" href="<?php echo URLROOT; ?>/users/logout">Log Out</a>
                <?php else : ?>
                    <i class="fas fa-user"></i>
                    <a id="sub-btn" href="<?php echo URLROOT; ?>/users/register">Register</a>
                    <a id="log-btn" href="<?php echo URLROOT; ?>/users/login">Log in</a>
                <?php endif; ?>
            </div>
    </nav>

    <div id="nav-bar" class="shownav">
            <input type="text" placeholder="SEARCH">
            <button>GO</button>
            <div class="navgroups">
                <h3>NEWS</h3>
                    <ul>
                        <li><a href="#">Home Page</a></li>
                        <li><a href="#">World</a></li>
                        <li><a href="#">Coronavirus</a></li>
                        <li><a href="#">U.S. News</a></li>
                        <li><a href="#">U.S. Politics</a></li>
                        <li><a href="#">New York</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Tech</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Winter Olympics</a></li>
                        <li><a href="#">Wildfire Tracker</a></li>
                        <li><a href="#">Obituaries</a></li>
                        <li><a href="#">Today's Paper</a></li>
                        <li><a href="#">Trending</a></li>
                        <li><a href="#">Corrections</a></li>
                    </ul>
            </div>
    
            <div class="navgroups">
                <h3>OPINION</h3>
                    <ul>
                        <li><a href="#">Today's Opinion</a></li>
                        <li><a href="#">Columnist</a></li>
                        <li><a href="#">Editorials</a></li>
                        <li><a href="#">Guest Essays</a></li>
                        <li><a href="#">Letters</a></li>
                        <li><a href="#">Sunday Review</a></li>
                        <li><a href="#">Video: Opinion</a></li>
                    </ul>
            </div>
    
            <div class="navgroups">
                <h3>ARTS</h3>
                    <ul>
                        <li><a href="#">Today's Arts</a></li>
                        <li><a href="#">Art & Design</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Best Sellers Book List</a></li>
                        <li><a href="#">Dance</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Pop Culture</a></li>
                        <li><a href="#">Television</a></li>
                        <li><a href="#">Theater</a></li>
                        <li><a href="#">Video: Arts</a></li>
                    </ul>
            </div>
    
            <div class="navgroups">
                <h3>LIVING</h3>
                    <ul>
                        <li><a href="#">Automotive</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Love</a></li>
                        <li><a href="#">Magazine</a></li>
                        <li><a href="#">Parenting</a></li>
                        <li><a href="#">Real Estate</a></li>
                        <li><a href="#">Style</a></li>
                        <li><a href="#">T Magazine</a></li>
                        <li><a href="#">Travel</a></li>
                    </ul>
            </div>
    
            <div class="navgroups">
                <h3><span id="listing">LISTINGS & </span>MORE</h3>
                    <ul>
                        <li><a href="#">Reader Center</a></li>
                        <li><a href="#">Wirecutter</a></li>
                        <li><a href="#">Cooking</a></li>
                        <li><a href="#">Live Events</a></li>
                        <li><a href="#">The Learning Network</a></li>
                        <li><a href="#">Tools & Services</a></li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Multimedia</a></li>
                        <li><a href="#">Photography</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">TimesMachine</a></li>
                        <li><a href="#">NYT Store</a></li>
                        <li><a href="#">Manage My Account</a></li>
                        <li><a href="#">NYTLicensing</a></li>
                    </ul>
            </div>
        </div>
    </header>