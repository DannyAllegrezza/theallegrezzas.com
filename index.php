<!DOCTYPE html>
<html lang="en">

<?php include("includes/head.php"); ?>

<body>
    
    <!-- Hero Section / Navigation-->
    <div id="logo">Caitlin <span>&amp;</span> Danny</div>
    <?php include("includes/hero.php"); ?>
    <!-- #Hero Section Ends -->
    <section id="home-content" class="top-menu">
        <!-- Welcome Area -->
        <section id="invitation" class="pattern">
            
        </section>
        <!-- #Welcome Area -->

        <!-- Couple Images -->
        <?php include("includes/couple.php"); ?>
        <!-- #Couple Images Ends -->

        <!-- Story Section -->
        <?php include("includes/story.php"); ?>
        <!-- #Story Section Ends -->

        <!-- Loveline Section -->
        <?php include("includes/loveline.php"); ?>
        <!-- #Loveline Section Ends -->

        <!-- Parallax Section -->
        <?php include("includes/parallax.php"); ?>
        <!-- #Parallax Section Ends -->

        <!-- Important People Section -->
        <?php include("includes/important_people.php"); ?>
        <!-- #Important People Section Ends -->

        <!-- #Attire section begins -->
        <?php include("includes/attire.php"); ?>
        <!-- Attire section ends -->

        <!-- Wedding Itinerary Section -->
        <?php include("includes/wedding_events.php"); ?>
        <!-- #Wedding Itinerary Section Ends -->


        <!-- #Map and Accommodations Section -->
        <?php include("includes/accommodations.php"); ?>
        <!-- #Map and Accommodations Section Ends -->

        <!-- Small Gallery Section -->
        <?php include("includes/gallery.php"); ?>
        <!-- #Small Gallery Section Ends -->

        <!-- Gift Registry Section -->
        <?php include("includes/registry.php"); ?>
        <!-- #Gift Registry Section Ends -->

        <!-- Footer Section -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="column four copyright">Developed by <a href="http://www.dannyallegrezza.com">Danny Allegrezza</a></div>
                    <div class="column four logo">C<span>&amp;</span>D</div>
                    <div class="column four info">Photos by <a href="http://www.hiramtrillo.com/">Hiram Trillo</a></div>
                </div>
            </div>
        </footer>
        <!-- / Footer Section Ends -->
    </section>
    <!-- JavaScript Files - These ones are in footer
    ================================================== -->
    <script src="js/device.min.js"></script>
    <script src="js/imagesloaded.pkgd.js"></script>
    <script src="js/SmoothScroll.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.isotope.sloppy-masonry.min.js"></script>
    <script src="js/jquery.parallax.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.soc-share.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXXqQOtxHDi6iatz5Fm1VGzsVvV5HiDfU&sensor=false"></script>
    <script src="js/custom.js"></script>

    <script>
    var markers = [
        ['Radisson Hotel, High Point NC', 35.956287, -80.004863, 'hotel', ''],
        ['The Townhouse Inn, High Point NC', 35.951898, -80.005128, 'hotel', ''],
        ['Villa de l\'Amour, High Point NC', 35.950468, -80.002259, 'wedding', 'We will be getting married at the Villa de l\'Amour']
    ];
    </script>
</body>

</html>
