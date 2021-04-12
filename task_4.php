<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>

<body class="mod-bg-1 mod-nav-link ">
    <main id="js-page-content" role="main" class="page-content">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание
                    </h2>
                    <div class="panel-toolbar">
                        <?php
                        $arrayOfButtons = ['collapse', 'fullscreen'];
                        foreach ($arrayOfButtons as $oneButton) {
                            echo "<button class='btn btn-panel waves-effect waves-themed' data-action='panel-$oneButton' data-toggle='tooltip' data-offset='0,10' data-original-title='$oneButton'></button>";
                        }
                        ?>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <?php

                        $array = [
                            "My Tasks" => ["130 / 500", "mt-2", "fusion-400", "65%", "65", "3"],
                            "Transfered" => ["440 TB", "", "success-500", "34%", "34", "3"],
                            "Bugs Squashed" => ["77%", "", "info-400", "77%", "77", "3"],
                            "User Testing" => ["7 days", "", "primary-300", "84%", "84", "g"],
                        ];

                        foreach ($array as $title => $value) {
                            echo
                            "<div class='d-flex {$value[1]}'>
                            $title
                            <span class='d-inline-block ml-auto'>$value[0]</span>
                            </div>
                            <div class='progress progress-sm mb-$value[5]'>
                                <div class='progress-bar bg-$value[2]' role='progressbar' style='width: $value[3];' aria-valuenow='$value[4]' aria-valuemin='0' aria-valuemax='100'></div>
                            </div>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        // default list filter
        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // custom response message
        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    </script>
</body>

</html>