
<header id="header-main">
    <?php include 'hud.php' ?>
    <div class="header-main" role="banner">
        
        <div class="container">
            <div class="item-flex">
                <div class="item-flex-main item-flex p-y">
                    <div class="logo"> 
                        <a href="/" rel="home"><img src="/svg/logo.svg" class="img-circle"></a>
                    </div>
                    <div class="m-l-sm text-primary logo-description">
                        <a href="/" rel="home"><img src="/svg/logo-type-gotham.svg" width="220"></a>
                    </div>
                </div>
                <div class="item-flex-addon align-self-flex-end">
                    <!-- <div class="text-right header-main-search item-flex justify-content-flex-end">
                        <div class="input-group header-main-search-form">
                            <input type="text" class="form-control form-control-sm" id="search" placeholder="Search Gi.org">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary br-a-0" type="button">Go</button>
                            </span>
                        </div>
                        <button class="btn-link text-xl p-xl-r-0" style="right" id="search-toggle"><svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg></button>
                    </div> -->
                    <div class="item-flex position-relative">
                        <button class="btn-link display-2 m-r-sm" id="menu-toggle" data-toggle="modal" data-target=".modal-menu"><svg class="icon icon-menu"><use xlink:href="#icon-menu"></use></svg></button>
                        <ul class="nav-primary">
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Clinical Guidelines</a></li>
                            <li><a href="#">Publications</a></li>
                            <li><a href="/trainees">Trainees</a></li>
                            <li><a href="#">Patients & Families</a></li>
                        </ul>
                        <div class="input-group header-main-search-form position-absolute" style="top: -25px; right: 0;">
                            <input type="text" class="form-control form-control-sm" id="search" placeholder="Search Gi.org">
                            <span class="input-group-btn">
                                <button class="btn btn-sm btn-secondary br-a-0" type="button">Go</button>
                            </span>
                        </div>
                        <button class="btn-link display-2 p-x-0 m-l" style="right" id="search-toggle"><svg class="icon icon-search"><use xlink:href="#icon-search"></use></svg></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-primary">
            <nav class="container text-right">
                <ul class="nav-secondary">
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Professional Development Resources</a></li>
                    <li><a href="#">Grants & Publishing</a></li>
                    <li><a href="#">For Program Directors</a></li>
                    <li><a href="#">For Residents</a></li>
                    <li><a href="#">Program Directors</a></li>
                </nav>
            </div>
        </div>

    </div>
</header>
    
<!-- menu modal -->
<div class="modal modal-menu fade" tabindex="-1">
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