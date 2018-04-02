<div id="top"></div>
<header id="header-main">
    <div class="text-sm" role="directory" id="header-hud">
        <div class="container item-flex justify-content-flex-end p-y-sm">
            <nav class="text-sm p-y-xs hidden-sm-down p-r">
                <a href="#" class="nav-link text-hover-underline">About ACG</a>
                <span class="text-pipe">|</span>
                <a href="#" class="nav-link text-hover-underline">Join</a>
                <span class="text-pipe">|</span>
                <a href="#" class="nav-link text-hover-underline">Donate</a>
                <span class="text-pipe">|</span>
                <a href="#" class="nav-link text-hover-underline">Online Store</a>
                <span class="text-pipe">|</span>
                <a href="#" class="nav-link text-hover-underline">Find a GI</a>
                <span class="text-pipe">|</span>
                <a href="#" class="nav-link text-hover-underline">ACG 2018 Annual Meeting</a>
            </nav>
            <div class="item-flex-addon">
                <a href="#" class="btn btn-primary btn-sm br-a-0"><svg class="icon icon-users"><use xlink:href="#icon-users"></use></svg> My ACG/Log In</a>
            </div>
        </div>
    </div>
    <div class="header-main" role="banner">
        <div class="container">
            <div class="item-flex">
                <div class="item-flex-main item-flex p-y-sm p-r">
                    <div class="logo"> 
                        <a href="/" rel="home"><img src="/svg/logo.svg" class="img-circle"></a>
                    </div>
                    <div class="m-l-sm text-primary logo-description logo-description-v3">
                        <a href="/" rel="home"><img src="/svg/logo-type-gotham.svg"></a>
                    </div>
                </div>
                <div class="item-flex-addon">
                    <div class="item-flex position-relative">
                        <span class="item-flex-addon text-lg p-r-sm">
                            <svg class="icon icon-search" id="search-toggle"><use xlink:href="#icon-search"></use></svg>
                        </span>
                        <div class="input-group" style="max-width:300px">
                            <input type="text" class="form-control form-control-sm" id="search" placeholder="Search Gi.org">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary br-a-0" type="button">Go</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-primary hidden-sm-down text-inverse">
        <nav class="container item-flex">

            <button class="btn-link display-1 p-a-0 toggle-is-toggled item-flex-addon" id="menu-toggle" data-toggle="modal" data-target=".modal-menu"><svg class="icon icon-menu"><use xlink:href="#icon-menu"></use></svg></button>

            <ul class="nav-primary-v3 hidden-sm-down item-flex-main p-l-lg">
                <!-- <li><button class="btn-link display-1 m-r p-a-0 toggle-is-toggled" id="menu-toggle" data-toggle="modal" data-target=".modal-menu"><svg class="icon icon-menu"><use xlink:href="#icon-menu"></use></svg></button></li> -->
                <li><a href="#"><span>Membership</span></a></li>
                <li><a href="#"><span>Education</span></a></li>
                <li class="active"><a href="/guidelines"><span>Clinical Guidelines</span></a></li>
                <li><a href="#"><span>Publications</span></a></li>
                <li><a href="/trainees"><span>Trainees</span></a></li>
                <li><a href="#"><span>Patients & Families</span></a></li>
            </ul>

        </nav>
    </div>

</header>

<div class="bg-gray-lightest">
    <nav class="container text-right">
        <ul class="nav-secondary-v3" id="subnav-trainees" style="display:none;">
            <li><a href="#">Membership</a></li>
            <li><a href="#">Professional Development Resources</a></li>
            <li><a href="#">Grants & Publishing</a></li>
            <li><a href="#">For Program Directors</a></li>
            <li><a href="#">For Residents</a></li>
            <li><a href="#">Program Directors</a></li>
        </ul>
        <ul class="nav-secondary-v3" id="subnav-guidelines" style="display:none;">
            <li class="active"><a href="#">Browse All Guidelines</a></li>
            <li><a href="#">Guideline Development Policies</a></li>
            <li><a href="#">ACG Guidelines App</a></li>
            <li><a href="#">Another Link</a></li>
            <li><a href="#">To Show</a></li>
            <li><a href="#">A Subnav With</a></li>
            <li><a href="#">Many Items</a></li>
        </ul>
    </div>
</div>
    
<!-- menu modal -->
<div class="modal modal-menu" tabindex="-1">
    <div class="modal-dialog modal-dialog-lg modal-lg">
        <div class="modal-content">
            <div class="modal-body bg-primary-dark text-inverse">
                <div class="text-right">
                    <button type="button" class="circle bg-white text-primary text-xl" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="p-x p-b">
                    <?php include 'nav.php' ?>
                </div>
            </div>
		</div>
    </div>
</div>