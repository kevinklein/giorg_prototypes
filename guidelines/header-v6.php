<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Diagnosis and Management of Achalasia - American College of Gastroenterology</title>
    <?php include '../partials/head.php' ?> 
	<style>#promo { display:none }</style>
</head>
<body class="flex-body">

<?php include '../partials/header-v6.php' ?>

<!-- main div --> 
<div class="flex-content">

    <div class="bg-white page-title">
        <div class="container p-a-md" style="border-left: 5px solid #002e6d">
            <h1 class="m-b-0 text-webfont-one display-2 text-300">Diagnosis and Management of Achalasia</h1>        
        </div>
    </div>

    <nav class="breadcrumb p-y border-bottom border-top">
        <div class="container">
            <ol>
                <li><svg class="icon icon-home2"><use xlink:href="#icon-home2"></use></svg> <a href="/">Gi.org</a></li>
                <li><a href="index.php">Guidelines</a></li>
                <li><a href="index.php">Browse All Guidelines</a></li>
                <li class="current">Diagnosis and Management of Achalasia</li>
            </ol>
        </div>
    </nav>

    <div class="bg-gray-lightest p-y main-content">
        <div class="container">
            <div class="row bottom-md">
                <div class="col-md-9 col-xs-6">
                    <div class="m-b-xs">
                        <svg class="icon icon-users2"><use xlink:href="#icon-users2"></use></svg> Michael F. Vaezi, MD, PhD, MSc, FACG <sup class="label label-secondary label-pill" data-toggle="tooltip" data-placement="top" title="Division of Gastroenterology, Hepatology and Nutrition, Vanderbilt University Medical Center, Nashville, Tennessee, USA">1</sup>, John E. Pandolfino, MD, MSCI <sup class="label label-secondary label-pill" data-toggle="tooltip" data-placement="top" title="Department of Gastroenterology and Hepatology, Northwestern University, Chicago, Illinois, USA">2</sup> and Marcelo F. Vela, MD, MSCR <sup class="label label-secondary label-pill" data-toggle="tooltip" data-placement="top" title="Division of Gastroenterology and Hepatology, Baylor College of Medicine and Michael E. DeBakey VA Medical Center, Houston, Texas, USA">3</sup>
                    </div>
                    <small class="text-sm text-muted"><em>Am J Gastroenterol</em>&nbsp;2013; 108:1238–1249; doi:10.1038/ajg.2013.196; published online 23 July 2013<br>
                    Received 3 July 2012; accepted 1 May 2013</small>
                </div>
                <div class="col-md-3 col-xs-6">
                    <a href="#" class="btn btn-white btn-block"><?php include '../svg/pdf.svg' ?> View this Guideline as a PDF</a>
                </div>
            </div>
        </div>
    </div>

    <main class="container p-y p-lg-y-xl main-content">

        <div class="row">
            <div class="col-md-9 col-xs-12" id="main" data-scenes="9">
                
                <?php include 'guideline-details.php' ?>

                <div class="card card-gray-lightest card-block">
                    <p><small><strong>Correspondence:</strong> Michael F. Vaezi, MD, PhD, MSc, Division of Gastroenterology, Hepatology and Nutrition, Vanderbilt University Medical Center, 1660 TVC, 1301–22nd Avenue South, Nashville, Tennessee 37232-5280, USA. E-mail: <a href="mailto:Michael.vaezi@vanderbilt.edu">Michael.vaezi@vanderbilt.edu</a></small></p>
                </div>
                
            </div>
            <div class="col-md-3 col-xs-12">
                <div id="sidebar">
                    <h3 class="m-b-md text-webfont-one text-500 nav-local-header">Diagnosis and Management of Achalasia</h3> 
                    <hr>
                    <nav>
                        <ul class="nav nav-local">
                            <li class="nav-item"><a id="high-1" href="#section-1">Abstract</a></li>
                            <li class="nav-item"><a id="high-2" href="#section-2">Introduction</a></li>
                            <li class="nav-item"><a id="high-3" href="#section-3">Definition and Epidemiology of Achalasia</a></li>
                            <li class="nav-item"><a id="high-4" href="#section-4">Diagnosis of Achalasia</a></li>
                            <li class="nav-item"><a id="high-5" href="#section-5">Tailored Approach to Treating Achalasia</a></li>
                            <li class="nav-item"><a id="high-6" href="#section-6">Patient Follow-Up</a></li>
                            <li class="nav-item"><a id="high-7" href="#section-7">Treatment Algorithm</a></li>
                            <li class="nav-item"><a id="high-8" href="#section-8">Conflict of Interest</a></li>
                            <li class="nav-item"><a id="high-9" href="#section-9">References</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
     
    </main>

</div>
<!-- /main div -->    

<?php include '../partials/footer-v2.php' ?> 
<?php include '../partials/foot.php' ?> 

<script>
(function ($) {
    $(document).ready(function() {
        
        $('.nav-primary-v6 li:nth-child(3)').addClass('current-menu-ancestor');
        $('#subnav-guidelines').show();
    	
	});
}(jQuery));
jQuery(document).ready(function($){
	function morphDropdown( element ) {
		this.element = element;
		this.mainNavigation = this.element.find('.main-nav');
		this.mainNavigationItems = this.mainNavigation.find('.has-dropdown');
		this.dropdownList = this.element.find('.dropdown-list');
		this.dropdownWrappers = this.dropdownList.find('.dropdown');
		this.dropdownItems = this.dropdownList.find('.content');
		this.dropdownBg = this.dropdownList.find('.bg-layer');
		this.mq = this.checkMq();
		this.bindEvents();
	}

	morphDropdown.prototype.checkMq = function() {
		//check screen size
		var self = this;
		return window.getComputedStyle(self.element.get(0), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "").split(', ');
	};

	morphDropdown.prototype.bindEvents = function() {
		var self = this;
		//hover over an item in the main navigation
		this.mainNavigationItems.mouseenter(function(event){
			//hover over one of the nav items -> show dropdown
			self.showDropdown($(this));
		}).mouseleave(function(){
			setTimeout(function(){
				//if not hovering over a nav item or a dropdown -> hide dropdown
				if( self.mainNavigation.find('.has-dropdown:hover').length == 0 && self.element.find('.dropdown-list:hover').length == 0 ) self.hideDropdown();
			}, 50);
		});
		
		//hover over the dropdown
		this.dropdownList.mouseleave(function(){
			setTimeout(function(){
				//if not hovering over a dropdown or a nav item -> hide dropdown
				(self.mainNavigation.find('.has-dropdown:hover').length == 0 && self.element.find('.dropdown-list:hover').length == 0 ) && self.hideDropdown();
			}, 50);
		});

		//click on an item in the main navigation -> open a dropdown on a touch device
		this.mainNavigationItems.on('touchstart', function(event){
			var selectedDropdown = self.dropdownList.find('#'+$(this).data('content'));
			if( !self.element.hasClass('is-dropdown-visible') || !selectedDropdown.hasClass('active') ) {
				event.preventDefault();
				self.showDropdown($(this));
			}
		});

		//on small screens, open navigation clicking on the menu icon
		this.element.on('click', '.nav-trigger', function(event){
			event.preventDefault();
			self.element.toggleClass('nav-open');
		});
	};

	morphDropdown.prototype.showDropdown = function(item) {
		this.mq = this.checkMq();
		if( this.mq == 'desktop') {
			var self = this;
			var selectedDropdown = this.dropdownList.find('#'+item.data('content')),
				selectedDropdownHeight = selectedDropdown.innerHeight(),
				selectedDropdownWidth = selectedDropdown.children('.content').innerWidth(),
				selectedDropdownLeft = item.offset().left + item.innerWidth()/2 - selectedDropdownWidth/2;

			//update dropdown position and size
			this.updateDropdown(selectedDropdown, parseInt(selectedDropdownHeight), selectedDropdownWidth, parseInt(selectedDropdownLeft));
			//add active class to the proper dropdown item
			this.element.find('.active').removeClass('active');
			selectedDropdown.addClass('active').removeClass('move-left move-right').prevAll().addClass('move-left').end().nextAll().addClass('move-right');
			item.addClass('active');
			//show the dropdown wrapper if not visible yet
			if( !this.element.hasClass('is-dropdown-visible') ) {
				setTimeout(function(){
					self.element.addClass('is-dropdown-visible');
				}, 10);
			}
		}
	};

	morphDropdown.prototype.updateDropdown = function(dropdownItem, height, width, left) {
		this.dropdownList.css({
		    '-moz-transform': 'translateX(' + left + 'px)',
		    '-webkit-transform': 'translateX(' + left + 'px)',
			'-ms-transform': 'translateX(' + left + 'px)',
			'-o-transform': 'translateX(' + left + 'px)',
			'transform': 'translateX(' + left + 'px)',
			'width': width+'px',
			'height': height+'px'
		});

		this.dropdownBg.css({
			'-moz-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
		    '-webkit-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
			'-ms-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
			'-o-transform': 'scaleX(' + width + ') scaleY(' + height + ')',
			'transform': 'scaleX(' + width + ') scaleY(' + height + ')'
		});
	};

	morphDropdown.prototype.hideDropdown = function() {
		this.mq = this.checkMq();
		if( this.mq == 'desktop') {
			this.element.removeClass('is-dropdown-visible').find('.active').removeClass('active').end().find('.move-left').removeClass('move-left').end().find('.move-right').removeClass('move-right');
		}
	};

	morphDropdown.prototype.resetDropdown = function() {
		this.mq = this.checkMq();
		if( this.mq == 'mobile') {
			this.dropdownList.removeAttr('style');
		}
	};

	var morphDropdowns = [];
	if( $('.cd-morph-dropdown').length > 0 ) {
		$('.cd-morph-dropdown').each(function(){
			//create a morphDropdown object for each .cd-morph-dropdown
			morphDropdowns.push(new morphDropdown($(this)));
		});

		var resizing = false;

		//on resize, reset dropdown style property
		updateDropdownPosition();
		$(window).on('resize', function(){
			if( !resizing ) {
				resizing =  true;
				(!window.requestAnimationFrame) ? setTimeout(updateDropdownPosition, 300) : window.requestAnimationFrame(updateDropdownPosition);
			}
		});

		function updateDropdownPosition() {
			morphDropdowns.forEach(function(element){
				element.resetDropdown();
			});

			resizing = false;
		};
	}
});
</script>

</body>
</html>