
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shohoj Bazar</title>

    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/userAssets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="assets/userAssets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/userAssets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/userAssets/css/style.css" rel="stylesheet">
    <link href="assets/userAssets/css/modify.css" rel="stylesheet">
     <!-- url favicon -->
    <!-- <link rel="icon" type="image/png" href="assets/userAssets/img/logo/removebg-osb.png" /> -->
     <link rel="icon" type="image/png" href="assets/userAssets/img/favicon.png">

    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "Organization",
    "url": "https://onlineshohojbazar.com",
    "logo": "https://onlineshohojbazar.com/favicon.png"
    }
    </script>
</head>
<body>

        <?php include 'layout/userLayout/navigation.php'; ?>

        <main>
           <?php
            // যদি URL এ page parameter না থাকে তাহলে default হিসেবে 'home' হবে
            $page = $_GET['page'] ?? 'home';

            // page এর ভিত্তিতে file path সেট
            $file = "userPages/{$page}.php";

            // যদি ঐ ফাইলটা থাকে তাহলে include
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<h2>404 - Page not found!</h2>";
            }
            ?>
       </main>

    <?php include 'layout/userLayout/footer.php'; ?>


     <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/userAssets/lib/easing/easing.min.js"></script>
    <script src="assets/userAssets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/userAssets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="assets/userAssets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/userAssets/js/main.js"></script>
    <script src="assets/userAssets/js/modify.js"></script>
</body>
</html>