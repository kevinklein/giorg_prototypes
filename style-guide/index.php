 <?php include_once('functions.php'); ?>
 <?php $project_name = "American College of Gastroenterology"; ?>
<!DOCTYPE html>

<head>
<meta charset="utf-8">
<title><?php echo($project_name)?> Pattern Library and Style Guide</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/styleguide.css">
<link rel="stylesheet" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<body class="bg-white">

<div class="bg-white item-flex border-bottom sg-header" role="banner">
    <div class="item-flex-main">
        <img src="../img/logo.svg" width="80">
    </div>
    <div class="item-flex-addon text-sm text-uppercase">
        <strong><?php echo($project_name)?></strong> <span class="text-pipe">/</span> Style Guide and Pattern Library
        <div class="dropdown-menu dropdown-menu-right component-nav">
          <div class="row text-xs text-webfont-one">
              <div class="col-md-4">
                  <?php listElementsAsOptions('docs'); ?>
                  <div role="presentation" class="dropdown-divider"></div>
                  <?php listElementsAsOptions('foundation'); ?>
                  <div role="presentation" class="dropdown-divider"></div>
                  <?php listElementsAsOptions('scaffolding'); ?>
                  <div role="presentation" class="dropdown-divider"></div>
                  <?php listElementsAsOptions('utilities'); ?>
              </div>
              <div class="col-md-4">
                  <div role="presentation" class="dropdown-header">Type and Basic Elements</div>
                  <?php listMarkupAsOptions('type'); ?>
                  <div role="presentation" class="dropdown-divider"></div>
                  <div role="presentation" class="dropdown-header">Cards</div>
                  <?php listMarkupAsOptions('cards'); ?>
                  <div role="presentation" class="dropdown-divider"></div>
                  <div role="presentation" class="dropdown-header">Forms</div>
                  <?php listMarkupAsOptions('forms'); ?>
              </div>
              <div class="col-md-4">
                  <div role="presentation" class="dropdown-header">Components</div>
                  <?php listMarkupAsOptions('components'); ?>
                  <div role="presentation" class="dropdown-divider"></div>
                  <div role="presentation" class="dropdown-header">Patterns</div>
                  <?php listMarkupAsOptions('patterns'); ?>
              </div>
          </div> 
        </div> 
    </div>
</div>

<div class="sg-main">
    
    <div class="sg-body">
        
        <div>
          <h1 class="sg-h1">Docs</h1>
          <?php showDocs(); ?>
        </div>

        <div class="m-t-lg">
          <h1 class="sg-h1">Foundation</h1>
          <?php showFoundation(); ?>
        </div>
    
        <div class="m-t-lg">
          <h1 class="sg-h1">Scaffolding</h1>
          <?php showScaffolding(); ?>
        </div>
        
        <h1 class="sg-h1">Type and Basic Elements</h1>

        <div class="sg-base-styles">
            <?php showMarkup('type'); ?>
        </div>

        
        <h1 class="sg-h1">Cards</h1>

          <div class="sg-base-styles">
            <?php showMarkup('cards'); ?>
          </div>

        
        <h1 class="sg-h1">Forms</h1>

          <div class="sg-base-styles">
            <?php showMarkup('forms'); ?>
          </div>

        
        <h1 class="sg-h1">Components</h1>

          <div class="sg-base-styles">
            <?php showMarkup('components'); ?>
          </div>

        
        <h1 class="sg-h1">Patterns</h1>

        <div class="sg-pattern-styles">
          <?php showMarkup('patterns'); ?>
        </div>

        
        <div class="m-t-lg">
          <h1 class="sg-h1">Utilities</h1>
          <?php showUtilities(); ?>
        </div>
        
    </div>
    
</div>

<div class="sg-menu">
    <?php listElementsAsOptions('docs'); ?>
    <?php listElementsAsOptions('foundation'); ?>
    <?php listElementsAsOptions('scaffolding'); ?>
    <?php listElementsAsOptions('utilities'); ?>
    <div role="presentation" class="dropdown-header">Type and Basic Elements</div>
    <?php listMarkupAsOptions('type'); ?>
    <div role="presentation" class="dropdown-header">Cards</div>
    <?php listMarkupAsOptions('cards'); ?>
    <div role="presentation" class="dropdown-header">Forms</div>
    <?php listMarkupAsOptions('forms'); ?>
    <div role="presentation" class="dropdown-header">Components</div>
    <?php listMarkupAsOptions('components'); ?>
    <div role="presentation" class="dropdown-header">Patterns</div>
    <?php listMarkupAsOptions('patterns'); ?>
</div>

<script>
var ajax = new XMLHttpRequest();
ajax.open("GET", "icons/icons.svg", true);
ajax.send();
ajax.onload = function(e) {
  var div = document.createElement("div");
  div.innerHTML = ajax.responseText;
  document.body.insertBefore(div, document.body.childNodes[0]);
}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../js/tether.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/main.js"></script>
<script src="js/sg-plugins.js"></script>
<script src="js/sg-scripts.js"></script>
<script>
$(function() {
  
  $('.sg-menu a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-120
        }, 100);
        return false;
      }
    }
  });
});  
</script>
</body>
</html>
