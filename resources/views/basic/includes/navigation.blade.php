<!-- Navigation -->
<div class="bg-white">
    <div class="content py-3">
        <!-- Toggle Main Navigation -->
        <div class="d-lg-none">
            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
            <button type="button"
                class="btn btn-block btn-alt-secondary d-flex justify-content-between align-items-center"
                data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- END Toggle Main Navigation -->

        <!-- Main Navigation -->
        <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
            <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="bd_dashboard.html">
                        <i class="nav-main-link-icon si si-compass"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Pages</li>
                <li class="nav-main-item">
                    <a class="nav-main-link active nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="true" href="#">
                        <i class="nav-main-link-icon si si-puzzle"></i>
                        <span class="nav-main-link-name">Variations</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="bd_simple_1.html">
                                <span class="nav-main-link-name">Simple 1</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="bd_simple_2.html">
                                <span class="nav-main-link-name">Simple 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="bd_image_1.html">
                                <span class="nav-main-link-name">Image 1</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="bd_image_2.html">
                                <span class="nav-main-link-name">Image 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="bd_video_1.html">
                                <span class="nav-main-link-name">Video 1</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="bd_video_2.html">
                                <span class="nav-main-link-name">Video 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <span class="nav-main-link-name">More Options</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Another Link</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Another Link</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Another Link</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="bd_search.html">
                        <i class="nav-main-link-icon si si-magnifier"></i>
                        <span class="nav-main-link-name">Search</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-action-undo"></i>
                        <span class="nav-main-link-name">Go Back</span>
                    </a>
                </li>
                <li class="nav-main-heading">Extra</li>
                <li class="nav-main-item ml-lg-auto">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                        aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-drop"></i>
                        <span class="nav-main-link-name d-lg-none">Themes</span>
                    </a>
                    <ul class="nav-main-submenu nav-main-submenu-right">
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                                <i class="nav-main-link-icon fa fa-square text-default"></i>
                                <span class="nav-main-link-name">Default</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme"
                                data-theme="{{ asset('dashboard/assets/css/themes/amethyst.min.css') }}"
                                href="#">
                                <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                                <span class="nav-main-link-name">Amethyst</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme"
                                data-theme="{{ asset('dashboard/assets/css/themes/city.min.css') }}" href="#">
                                <i class="nav-main-link-icon fa fa-square text-city"></i>
                                <span class="nav-main-link-name">City</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme"
                                data-theme="{{ asset('dashboard/assets/css/themes/flat.min.css') }}" href="#">
                                <i class="nav-main-link-icon fa fa-square text-flat"></i>
                                <span class="nav-main-link-name">Flat</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme"
                                data-theme="{{ asset('dashboard/assets/css/themes/modern.min.css') }}" href="#">
                                <i class="nav-main-link-icon fa fa-square text-modern"></i>
                                <span class="nav-main-link-name">Modern</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" data-toggle="theme"
                                data-theme="{{ asset('dashboard/assets/css/themes/smooth.min.css') }}" href="#">
                                <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                                <span class="nav-main-link-name">Smooth</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- END Main Navigation -->
    </div>
</div>
<!-- END Navigation -->
<!-- Hero -->
<!-- jQuery Vide for video backgrounds, for more examples you can check out https://github.com/VodkaBears/Vide -->
<div class="bg-video" data-vide-bg="{{ asset('dashboard/assets/media/videos/hero_sunrise') }}"
    data-vide-options="posterType: jpg">
    <div class="bg-primary-dark-op">
        <div class="content content-full">
            <div class="py-5 text-center">
                <h1 class="text-white mb-2">
                    Dashboard
                </h1>
                <h2 class="h4 text-white-75 font-w400 text-muted mb-0">
                    Welcome to your app, everything looks great!
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->
