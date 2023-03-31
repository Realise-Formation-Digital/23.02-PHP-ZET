<nav class="navbar navbar-light offset-lg-3 col-lg-2 offset-sm-0 col-sm-12 justify-content-center">
    <button
        class="navbar-toggler custom-toggler border-0 text-white"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar"
        aria-controls="navbar"
        aria-expanded="false"
        aria-label="Navbar navigation"> MENU 
            <span class="text-white"><i class="bi bi-list"></i></span>
    </button>
        <div class="collapse" id="navbar">
            <div class="p-4">
            
                <div class="fs-4">
                    <a href="index.php" class="text-white">Home</a>
                </div>
                <div class="fs-4">
                    <a href="#section-happy-clients" class="text-white">Happy Clients</a>
                </div>
                <div class="fs-4">
                    <a href="#pricing-table" class="text-white">Pricing Table</a>
                </div>
                <div class="fs-4">
                    <a href="#professional-team" class="text-white">Our Professional Team</a>
                </div>
                <div class="fs-4">
                    <a href="contact.php" class="text-white">Contact</a>
                </div>
                <div class="fs-4">
                    <a href="sign.php" class="text-white">Inscription</a>
                </div>
                <div class="fs-4">
                    <a href="login.php" class="text-white">Login</a>
                </div>
                <?php if($_SESSION['name']): ?>
                    <div class="fs-4">
                        <a href="logout.php" class="text-white">Logout</a>
                    </div>
                    <div class="fs-4">
                        <a href="messagePage.php" class="text-white">Page privée</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
</nav>