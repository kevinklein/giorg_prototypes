<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Clinical Guidelines - American College of Gastroenterology</title>
    <?php include '../partials/head.php' ?> 
</head>
<body class="flex-body">

<?php include '../partials/header.php' ?>

<nav class="breadcrumb">
    <div class="container">
        <ol>
            <li><svg class="icon icon-home2"><use xlink:href="#icon-home2"></use></svg> <a href="/">Gi.org</a></li>
            <li class="current"><a href="javascript:void()">Clinical Guidelines</a></li>
        </ol>
    </div>
</nav>

<!-- main div --> 
<div class="flex-content">

    <div class="bg-primary p-y p-lg-y-xl text-inverse hero bg-triangles-primary">
        <div class="container">
            <h1 class="m-b-sm text-webfont-one display-4 item-reveal-3 text-300">Clinical Guidelines</h1>
            <p class="display-2 text-webfont-one item-reveal-4 text-300">Consequat est anim in sint commodo sint consectetur</p>
        </div>
    </div>

    <div class="p-y p-lg-y-lg">
        
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">ACG Guidelines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Multi-Society Documents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">Monographs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">Competencies in Endoscopy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">Guidelines in Progress</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade in active container p-t" id="one" role="tabpanel" aria-labelledby="one-tab">
                    fjklafdsj;
                </div>
                <div class="tab-pane fade container" id="two" role="tabpanel" aria-labelledby="two-tab">...</div>
                <div class="tab-pane fade container" id="three" role="tabpanel" aria-labelledby="three-tab">...</div>
            </div>
     
    </div>

</div>
<!-- /main div -->    

<?php include '../partials/footer.php' ?>
   
<?php include '../partials/foot.php' ?> 

<script>
(function ($) {
    $(document).ready(function() {
        
        $('.nav-primary li:nth-child(3)').addClass('current-menu-ancestor');
        $('#subnav-guidelines').show();
    	
	});
}(jQuery));
</script>

</body>
</html>