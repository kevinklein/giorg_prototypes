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
            <p class="display-2 text-webfont-one item-reveal-4 text-300">The decision support tools you need for your practice</p>
        </div>
    </div>

    <div class="container p-y p-lg-y-xl">
        <div class="btn-group-responsive-overflow">
            <ul class="nav nav-tabs border-none btn-group" id="myTab" role="tablist">
          
                <a class="btn btn-sm btn-outline active" id="home-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">ACG Guidelines</a>
        
                <a class="btn btn-sm btn-outline" id="profile-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false">Multi-Society Documents</a>
    
                <a class="btn btn-sm btn-outline" id="contact-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="false">Monographs</a>

                <a class="btn btn-sm btn-outline" id="contact-tab" data-toggle="tab" href="#four" role="tab" aria-controls="three" aria-selected="false">Competencies in Endoscopy</a>
        
                <a class="btn btn-sm btn-outline" id="contact-tab" data-toggle="tab" href="#five" role="tab" aria-controls="three" aria-selected="false">Guidelines in Progress</a>
           
            </ul>
        </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade p-t in active" id="one" role="tabpanel" aria-labelledby="one">
                    <?php include '../partials/guideline.php' ?>
                </div>
                <div class="tab-pane fade p-t" id="two" role="tabpanel" aria-labelledby="two">
                    <?php include '../partials/guideline.php' ?>
                </div>
                <div class="tab-pane fade p-t" id="three" role="tabpanel" aria-labelledby="three">
                    <?php include '../partials/guideline.php' ?>
                </div>
                <div class="tab-pane fade p-t" id="four" role="tabpanel" aria-labelledby="four">
                    <?php include '../partials/guideline.php' ?>
                </div>
                <div class="tab-pane fade p-t" id="five" role="tabpanel" aria-labelledby="five">
                    <div class="text-center text-lg-right m-b-sm text-sm">
                        <div class="form-select form-select-xs">
                            <select>
                                <option selected="selected">Sort by A to Z</option>
                                <option>Most Recent</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <!-- row -->
                        <div class="col-md-4 col-xs-12 display-flex flex-column">
                            <div class="card display-flex flex-column flex-1">
                                <div class="card-block flex-1">
                                    <b class="text-uppercase text-400 text-xxs item-flex m-b-sm"><b class="circle circle-xxs bg-success m-r-xs"></b> Update in Progress</b>
                                    <h3 class="text-md m-b-xs text-700"><a href="guideline.php">Diagnosis and Management of <b class="text-info">Achalasia</b></a></h3>
                                    <p class="text-sm text-mute m-b-xs">August 2013</p>
                                    <p class="text-sm m-b-0"><svg class="icon icon-user2"><use xlink:href="#icon-user2"></use></svg> Michael F. Vaezi, MD, PhD, MSc, FACG</p>
                                </div>
                                <?php include '../partials/guideline-actions.php' ?>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 display-flex flex-column">
                            <div class="card display-flex flex-column flex-1">
                                <div class="card-block flex-1">
                                    <b class="text-uppercase text-400 text-xxs item-flex m-b-sm"><b class="circle circle-xxs bg-success m-r-xs"></b> Update in Progress</b>
                                    <h3 class="text-md m-b-xs text-700"><a href="guideline.php">Diagnosis and Management of Small <b class="text-info">Bowel Bleeding</b></a></h3>
                                    <p class="text-sm text-mute m-b-xs">August 2014</p>
                                    <p class="text-sm m-b-0"><svg class="icon icon-user2"><use xlink:href="#icon-user2"></use></svg> Michael F. Vaezi, MD, PhD, MSc, FACG</p>
                                </div>
                                <?php include '../partials/guideline-actions.php' ?>
                            </div>
                        </div>
                    </div>
                </div>
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