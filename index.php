<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    include 'components/head.php';
    ?>
</head>
<body class="bg-gray-100">
    <?php include 'components/sidebar.php'; ?>
    
    <div class="ml-64">
        <?php 
        include 'components/top_bar.php';
        include 'components/dashboard_stats.php';
        include 'components/dashboard_charts.php';
        ?>
    </div>

    <script src="js/charts.js"></script>
</body>
</html>