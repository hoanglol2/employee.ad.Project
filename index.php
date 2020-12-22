<?php
    session_start();
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'index';
    }
?>


<!DOCTYPE html>
<html lang="en">
    <!-- Header -->
    <?php include_once 'Layouts/head.php'; ?>
    <!-- ./Header -->
    <body class="sb-nav-fixed">
        <!-- top-header -->
        <?php include_once 'Layouts/top-header.php'; ?>
        <!-- ./top-header -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- nav-left -->
                <?php include_once 'Layouts/nav-left.php'; ?>
                <!-- ./nav-left -->
            </div>
            <div id="layoutSidenav_content">
                <main class="main">
                    <!-- Main -->
                    <?php

                        switch ($page) {
                            case 'index':
                                include_once 'Controllers/dashboard_c.php';
                                $dashboard = new dashboard_c();
                                $dashboard->dashboard();
                                break;
                            case 'employee':
                                include_once 'Controllers/employee_c.php';
                                $employee = new employee_c();
                                $employee->showEmployee();
                                break;
                            default:
                                break;
                        }

                    ?>
                    <!-- ./Main -->
                </main>
                <!-- Footer -->
                <?php include_once 'Layouts/footer.php'; ?>
                <!-- ./Footer -->
            </div>
        </div>
        <!-- Java -->
        <?php include_once 'Layouts/java.php'; ?>
        <!-- ./Java -->
    </body>
</html>
