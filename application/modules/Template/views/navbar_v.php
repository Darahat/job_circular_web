<!doctype html>
<html lang="en">

<head>

    <!-- favicon -->
    <link rel="icon" href="http://propeller.in/assets/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <!-- Propeller card (CSS for helping component example file)-->
    <link href="http://propeller.in/components/card/css/card.css" type="text/css" rel="stylesheet" />

    <!-- Example docs (CSS for helping component example file)-->
    <link href="http://propeller.in/docs/css/example-docs.css" type="text/css" rel="stylesheet" />

    <!-- Propeller typography -->
    <link href="http://propeller.in/components/typography/css/typography.css" type="text/css" rel="stylesheet" />

    <!-- Google Icon Font -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--<link href="../components/icons/css/google-icons.css" type="text/css" rel="stylesheet" /> -->

    <!-- Propeller Button -->
    <link href="http://propeller.in/components/button/css/button.css" type="text/css" rel="stylesheet" />

    <!-- Propeller Accordion -->
    <link href="http://propeller.in/components/floating-action-button/css/floating-action-button.css" type="text/css" rel="stylesheet" />

    <style>
        body {
            background: transparent;
        }
    </style>
</head>

<body>
    <div class="menu pmd-floating-action" role="navigation">

        <a href="<?php echo base_url('/Showpost') ?>" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Show All Posts">
            <span class="pmd-floating-hidden">Show All Posts</span>
            <i class="material-icons">table_view</i>
        </a>
        <a href="<?php echo base_url('/Postcreate') ?>" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Add">
            <span class="pmd-floating-hidden">Add</span>
            <i class="material-icons">add</i>
        </a>
        <a href="<?php echo base_url('/Home') ?>" class="pmd-floating-action-btn btn btn-sm pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-default" data-title="Home">
            <span class="pmd-floating-hidden">Home</span>
            <i class="material-icons">home</i>
        </a>
        <a href="javascript:void(0);" class="pmd-floating-action-btn btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-primary" data-title="Menu">
            <span class="pmd-floating-hidden">menu</span>
            <i class="material-icons pmd-sm">menu</i>
        </a>
    </div>
</body>
</html>