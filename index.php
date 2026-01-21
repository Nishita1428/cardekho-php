<?php
include 'common/config.php';
include 'common/header.php';

/* Fetch latest banner */
$bannerQuery = "SELECT * FROM banners WHERE status='active' LIMIT 1
";
$bannerResult = mysqli_query($conn, $bannerQuery);
$banner = mysqli_fetch_assoc($bannerResult);
?>

<!-- ================= BANNER SECTION ================= -->
<section class="banner">
    <div class="container banner-flex">

        <?php if ($banner) { ?>
            <div class="banner-text">
                <h1><?= htmlspecialchars($banner['title']) ?></h1>
                <p><?= htmlspecialchars($banner['subtitle']) ?></p>
                <a href="car-form.php" class="banner-btn">Get Car Details</a>
            </div>

            <div class="banner-image">
                <img src="assets/images/banners/<?= $banner['image'] ?>" alt="Banner Image">
            </div>
        <?php } else { ?>
            <h2>No banner added</h2>
        <?php } ?>

    </div>
</section>
<!-- ================= END BANNER ================= -->


<!-- ================= MOST SEARCHED CARS ================= -->
<section class="most-searched">
    <div class="container">
        <h2 class="section-title">Most Searched Cars</h2>

        <div class="car-grid">
            <div class="car-card">
                <img src="assets/images/cars/car1.png" alt="SUV Car">
                <h3>Hyundai Creta</h3>
                <p>SUV</p>
            </div>

            <div class="car-card">
                <img src="assets/images/cars/car2.png" alt="Sedan Car">
                <h3>Honda City</h3>
                <p>Sedan</p>
            </div>

            <div class="car-card">
                <img src="assets/images/cars/car3.png" alt="Hatchback Car">
                <h3>Maruti Swift</h3>
                <p>Hatchback</p>
            </div>

            <div class="car-card">
                <img src="assets/images/cars/car4.png" alt="SUV Car">
                <h3>Kia Seltos</h3>
                <p>SUV</p>
            </div>
        </div>
    </div>
</section>
<!-- ================= END MOST SEARCHED ================= -->


<!-- ================= LATEST CARS ================= -->
<section class="latest-cars">
    <div class="container">
        <h2 class="section-title">Latest Cars</h2>
        <p class="section-subtitle">Check out the newest car launches in India</p>

        <div class="latest-card">
            <img src="assets/images/cars/latest1.png" alt="Latest Car">
            <div class="latest-info">
                <h3>Tata Curvv</h3>
                <p>Expected Price: ₹12 - 18 Lakh</p>
                <span>Launch Year: 2024</span>
            </div>
        </div>

        <div class="latest-card">
            <img src="assets/images/cars/latest2.png" alt="Latest Car">
            <div class="latest-info">
                <h3>Hyundai Verna Facelift</h3>
                <p>Expected Price: ₹11 - 17 Lakh</p>
                <span>Launch Year: 2024</span>
            </div>
        </div>

        <div class="latest-card">
            <img src="assets/images/cars/latest3.png" alt="Latest Car">
            <div class="latest-info">
                <h3>Maruti Swift 2025</h3>
                <p>Expected Price: ₹6 - 9 Lakh</p>
                <span>Launch Year: 2025</span>
            </div>
        </div>
    </div>
</section>
<!-- ================= END LATEST CARS ================= -->

<?php include 'common/footer.php'; ?>
