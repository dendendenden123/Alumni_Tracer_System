<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dripicons - denvir Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/dripicons/webfont.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/dripicons.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index"><img src="assets/images/logo/logo.png" alt="Logo" srcset="></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="index"" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert">Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge">Badge</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-breadcrumb">Breadcrumb</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-button">Button</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-card">Card</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-carousel">Carousel</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-dropdown">Dropdown</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-list-group">List Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-modal">Modal</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-navs">Navs</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-pagination">Pagination</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-progress">Progress</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-spinner">Spinner</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-tooltip">Tooltip</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar">Avatar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-sweetalert">Sweet Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-toastify">Toastify</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-rating">Rating</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider">Divider</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="layout-default">Default Layout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-1-column">1 Column</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-navbar">Vertical with Navbar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-horizontal">Horizontal Menu</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="form-element-input">Input</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-input-group">Input Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-select">Select</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-radio">Radio</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-checkbox">Checkbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-element-textarea">Textarea</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="form-layout"" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Form Layout</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Form Editor</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="form-editor-quill">Quill</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-ckeditor">CKEditor</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-summernote">Summernote</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-tinymce">TinyMCE</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="table"" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="table-datatable"" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Datatable</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Extra UI</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-widgets-chatbox">Chatbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-pricing">Pricing</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-widgets-todolist">To-do List</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item ">
                                    <a href="ui-icons-bootstrap-icons">Bootstrap Icons </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-fontawesome">Fontawesome</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="ui-icons-dripicons">Dripicons</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-chart-chartjs">ChartJS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-chart-apexcharts">Apexcharts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="ui-file-uploader"" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>File Uploader</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-map-google-map">Google Map</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-map-jsvectormap">JS Vector Map</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item  ">
                            <a href="application-email"" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-chat"" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-gallery"" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="application-checkout"" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout Page</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="login">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="register">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="forgot-password">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Errors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="error-403">403</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-404">404</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="error-500">500</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Raise Support</li>

                        <li class="sidebar-item  ">
                            <a href="https://zuramai.github.io/denvir/docs" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/denvir/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Contribute</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/denvir#donate" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Donate</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Dripicons</h3>
                            <p class="text-subtitle text-muted">Get over 1,000+ icons with Dripicons </p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dripicons</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Icon List</h4>
                        </div>
                        <div class="card-body">
                            <ul class="icons">
                                <ul class="glyphs css-mapping">
                                    <li>
                                        <div class="icon dripicons-alarm"></div>
                                        <input type="text" readonly="readonly" value="alarm">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-align-center"></div>
                                        <input type="text" readonly="readonly" value="align-center">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-align-justify"></div>
                                        <input type="text" readonly="readonly" value="align-justify">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-align-left"></div>
                                        <input type="text" readonly="readonly" value="align-left">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-align-right"></div>
                                        <input type="text" readonly="readonly" value="align-right">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-anchor"></div>
                                        <input type="text" readonly="readonly" value="anchor">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-archive"></div>
                                        <input type="text" readonly="readonly" value="archive">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-down"></div>
                                        <input type="text" readonly="readonly" value="arrow-down">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-left"></div>
                                        <input type="text" readonly="readonly" value="arrow-left">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-right"></div>
                                        <input type="text" readonly="readonly" value="arrow-right">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-thin-down"></div>
                                        <input type="text" readonly="readonly" value="arrow-thin-down">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-thin-left"></div>
                                        <input type="text" readonly="readonly" value="arrow-thin-left">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-thin-right"></div>
                                        <input type="text" readonly="readonly" value="arrow-thin-right">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-thin-up"></div>
                                        <input type="text" readonly="readonly" value="arrow-thin-up">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-arrow-up"></div>
                                        <input type="text" readonly="readonly" value="arrow-up">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-article"></div>
                                        <input type="text" readonly="readonly" value="article">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-backspace"></div>
                                        <input type="text" readonly="readonly" value="backspace">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-basket"></div>
                                        <input type="text" readonly="readonly" value="basket">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-basketball"></div>
                                        <input type="text" readonly="readonly" value="basketball">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-battery-empty"></div>
                                        <input type="text" readonly="readonly" value="battery-empty">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-battery-full"></div>
                                        <input type="text" readonly="readonly" value="battery-full">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-battery-low"></div>
                                        <input type="text" readonly="readonly" value="battery-low">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-battery-medium"></div>
                                        <input type="text" readonly="readonly" value="battery-medium">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-bell"></div>
                                        <input type="text" readonly="readonly" value="bell">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-blog"></div>
                                        <input type="text" readonly="readonly" value="blog">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-bluetooth"></div>
                                        <input type="text" readonly="readonly" value="bluetooth">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-bold"></div>
                                        <input type="text" readonly="readonly" value="bold">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-bookmark"></div>
                                        <input type="text" readonly="readonly" value="bookmark">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-bookmarks"></div>
                                        <input type="text" readonly="readonly" value="bookmarks">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-box"></div>
                                        <input type="text" readonly="readonly" value="box">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-briefcase"></div>
                                        <input type="text" readonly="readonly" value="briefcase">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-brightness-low"></div>
                                        <input type="text" readonly="readonly" value="brightness-low">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-brightness-max"></div>
                                        <input type="text" readonly="readonly" value="brightness-max">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-brightness-medium"></div>
                                        <input type="text" readonly="readonly" value="brightness-medium">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-broadcast"></div>
                                        <input type="text" readonly="readonly" value="broadcast">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-browser"></div>
                                        <input type="text" readonly="readonly" value="browser">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-browser-upload"></div>
                                        <input type="text" readonly="readonly" value="browser-upload">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-brush"></div>
                                        <input type="text" readonly="readonly" value="brush">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-calendar"></div>
                                        <input type="text" readonly="readonly" value="calendar">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-camcorder"></div>
                                        <input type="text" readonly="readonly" value="camcorder">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-camera"></div>
                                        <input type="text" readonly="readonly" value="camera">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-card"></div>
                                        <input type="text" readonly="readonly" value="card">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-cart"></div>
                                        <input type="text" readonly="readonly" value="cart">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-checklist"></div>
                                        <input type="text" readonly="readonly" value="checklist">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-checkmark"></div>
                                        <input type="text" readonly="readonly" value="checkmark">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-chevron-down"></div>
                                        <input type="text" readonly="readonly" value="chevron-down">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-chevron-left"></div>
                                        <input type="text" readonly="readonly" value="chevron-left">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-chevron-right"></div>
                                        <input type="text" readonly="readonly" value="chevron-right">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-chevron-up"></div>
                                        <input type="text" readonly="readonly" value="chevron-up">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-clipboard"></div>
                                        <input type="text" readonly="readonly" value="clipboard">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-clock"></div>
                                        <input type="text" readonly="readonly" value="clock">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-clockwise"></div>
                                        <input type="text" readonly="readonly" value="clockwise">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-cloud"></div>
                                        <input type="text" readonly="readonly" value="cloud">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-cloud-download"></div>
                                        <input type="text" readonly="readonly" value="cloud-download">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-cloud-upload"></div>
                                        <input type="text" readonly="readonly" value="cloud-upload">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-code"></div>
                                        <input type="text" readonly="readonly" value="code">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-contract"></div>
                                        <input type="text" readonly="readonly" value="contract">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-contract-2"></div>
                                        <input type="text" readonly="readonly" value="contract-2">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-conversation"></div>
                                        <input type="text" readonly="readonly" value="conversation">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-copy"></div>
                                        <input type="text" readonly="readonly" value="copy">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-crop"></div>
                                        <input type="text" readonly="readonly" value="crop">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-cross"></div>
                                        <input type="text" readonly="readonly" value="cross">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-crosshair"></div>
                                        <input type="text" readonly="readonly" value="crosshair">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-cutlery"></div>
                                        <input type="text" readonly="readonly" value="cutlery">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-device-desktop"></div>
                                        <input type="text" readonly="readonly" value="device-desktop">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-device-mobile"></div>
                                        <input type="text" readonly="readonly" value="device-mobile">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-device-tablet"></div>
                                        <input type="text" readonly="readonly" value="device-tablet">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-direction"></div>
                                        <input type="text" readonly="readonly" value="direction">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-disc"></div>
                                        <input type="text" readonly="readonly" value="disc">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-document"></div>
                                        <input type="text" readonly="readonly" value="document">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-document-delete"></div>
                                        <input type="text" readonly="readonly" value="document-delete">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-document-edit"></div>
                                        <input type="text" readonly="readonly" value="document-edit">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-document-new"></div>
                                        <input type="text" readonly="readonly" value="document-new">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-document-remove"></div>
                                        <input type="text" readonly="readonly" value="document-remove">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-dot"></div>
                                        <input type="text" readonly="readonly" value="dot">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-dots-2"></div>
                                        <input type="text" readonly="readonly" value="dots-2">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-dots-3"></div>
                                        <input type="text" readonly="readonly" value="dots-3">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-download"></div>
                                        <input type="text" readonly="readonly" value="download">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-duplicate"></div>
                                        <input type="text" readonly="readonly" value="duplicate">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-enter"></div>
                                        <input type="text" readonly="readonly" value="enter">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-exit"></div>
                                        <input type="text" readonly="readonly" value="exit">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-expand"></div>
                                        <input type="text" readonly="readonly" value="expand">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-expand-2"></div>
                                        <input type="text" readonly="readonly" value="expand-2">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-experiment"></div>
                                        <input type="text" readonly="readonly" value="experiment">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-export"></div>
                                        <input type="text" readonly="readonly" value="export">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-feed"></div>
                                        <input type="text" readonly="readonly" value="feed">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-flag"></div>
                                        <input type="text" readonly="readonly" value="flag">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-flashlight"></div>
                                        <input type="text" readonly="readonly" value="flashlight">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-folder"></div>
                                        <input type="text" readonly="readonly" value="folder">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-folder-open"></div>
                                        <input type="text" readonly="readonly" value="folder-open">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-forward"></div>
                                        <input type="text" readonly="readonly" value="forward">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-gaming"></div>
                                        <input type="text" readonly="readonly" value="gaming">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-gear"></div>
                                        <input type="text" readonly="readonly" value="gear">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-graduation"></div>
                                        <input type="text" readonly="readonly" value="graduation">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-graph-bar"></div>
                                        <input type="text" readonly="readonly" value="graph-bar">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-graph-line"></div>
                                        <input type="text" readonly="readonly" value="graph-line">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-graph-pie"></div>
                                        <input type="text" readonly="readonly" value="graph-pie">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-headset"></div>
                                        <input type="text" readonly="readonly" value="headset">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-heart"></div>
                                        <input type="text" readonly="readonly" value="heart">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-help"></div>
                                        <input type="text" readonly="readonly" value="help">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-home"></div>
                                        <input type="text" readonly="readonly" value="home">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-hourglass"></div>
                                        <input type="text" readonly="readonly" value="hourglass">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-inbox"></div>
                                        <input type="text" readonly="readonly" value="inbox">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-information"></div>
                                        <input type="text" readonly="readonly" value="information">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-italic"></div>
                                        <input type="text" readonly="readonly" value="italic">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-jewel"></div>
                                        <input type="text" readonly="readonly" value="jewel">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-lifting"></div>
                                        <input type="text" readonly="readonly" value="lifting">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-lightbulb"></div>
                                        <input type="text" readonly="readonly" value="lightbulb">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-link"></div>
                                        <input type="text" readonly="readonly" value="link">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-link-broken"></div>
                                        <input type="text" readonly="readonly" value="link-broken">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-list"></div>
                                        <input type="text" readonly="readonly" value="list">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-loading"></div>
                                        <input type="text" readonly="readonly" value="loading">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-location"></div>
                                        <input type="text" readonly="readonly" value="location">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-lock"></div>
                                        <input type="text" readonly="readonly" value="lock">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-lock-open"></div>
                                        <input type="text" readonly="readonly" value="lock-open">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-mail"></div>
                                        <input type="text" readonly="readonly" value="mail">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-map"></div>
                                        <input type="text" readonly="readonly" value="map">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-loop"></div>
                                        <input type="text" readonly="readonly" value="media-loop">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-next"></div>
                                        <input type="text" readonly="readonly" value="media-next">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-pause"></div>
                                        <input type="text" readonly="readonly" value="media-pause">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-play"></div>
                                        <input type="text" readonly="readonly" value="media-play">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-previous"></div>
                                        <input type="text" readonly="readonly" value="media-previous">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-record"></div>
                                        <input type="text" readonly="readonly" value="media-record">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-shuffle"></div>
                                        <input type="text" readonly="readonly" value="media-shuffle">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-media-stop"></div>
                                        <input type="text" readonly="readonly" value="media-stop">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-medical"></div>
                                        <input type="text" readonly="readonly" value="medical">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-menu"></div>
                                        <input type="text" readonly="readonly" value="menu">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-message"></div>
                                        <input type="text" readonly="readonly" value="message">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-meter"></div>
                                        <input type="text" readonly="readonly" value="meter">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-microphone"></div>
                                        <input type="text" readonly="readonly" value="microphone">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-minus"></div>
                                        <input type="text" readonly="readonly" value="minus">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-monitor"></div>
                                        <input type="text" readonly="readonly" value="monitor">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-move"></div>
                                        <input type="text" readonly="readonly" value="move">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-music"></div>
                                        <input type="text" readonly="readonly" value="music">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-network-1"></div>
                                        <input type="text" readonly="readonly" value="network-1">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-network-2"></div>
                                        <input type="text" readonly="readonly" value="network-2">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-network-3"></div>
                                        <input type="text" readonly="readonly" value="network-3">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-network-4"></div>
                                        <input type="text" readonly="readonly" value="network-4">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-network-5"></div>
                                        <input type="text" readonly="readonly" value="network-5">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-pamphlet"></div>
                                        <input type="text" readonly="readonly" value="pamphlet">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-paperclip"></div>
                                        <input type="text" readonly="readonly" value="paperclip">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-pencil"></div>
                                        <input type="text" readonly="readonly" value="pencil">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-phone"></div>
                                        <input type="text" readonly="readonly" value="phone">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-photo"></div>
                                        <input type="text" readonly="readonly" value="photo">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-photo-group"></div>
                                        <input type="text" readonly="readonly" value="photo-group">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-pill"></div>
                                        <input type="text" readonly="readonly" value="pill">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-pin"></div>
                                        <input type="text" readonly="readonly" value="pin">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-plus"></div>
                                        <input type="text" readonly="readonly" value="plus">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-power"></div>
                                        <input type="text" readonly="readonly" value="power">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-preview"></div>
                                        <input type="text" readonly="readonly" value="preview">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-print"></div>
                                        <input type="text" readonly="readonly" value="print">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-pulse"></div>
                                        <input type="text" readonly="readonly" value="pulse">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-question"></div>
                                        <input type="text" readonly="readonly" value="question">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-reply"></div>
                                        <input type="text" readonly="readonly" value="reply">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-reply-all"></div>
                                        <input type="text" readonly="readonly" value="reply-all">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-return"></div>
                                        <input type="text" readonly="readonly" value="return">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-retweet"></div>
                                        <input type="text" readonly="readonly" value="retweet">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-rocket"></div>
                                        <input type="text" readonly="readonly" value="rocket">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-scale"></div>
                                        <input type="text" readonly="readonly" value="scale">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-search"></div>
                                        <input type="text" readonly="readonly" value="search">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-shopping-bag"></div>
                                        <input type="text" readonly="readonly" value="shopping-bag">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-skip"></div>
                                        <input type="text" readonly="readonly" value="skip">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-stack"></div>
                                        <input type="text" readonly="readonly" value="stack">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-star"></div>
                                        <input type="text" readonly="readonly" value="star">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-stopwatch"></div>
                                        <input type="text" readonly="readonly" value="stopwatch">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-store"></div>
                                        <input type="text" readonly="readonly" value="store">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-suitcase"></div>
                                        <input type="text" readonly="readonly" value="suitcase">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-swap"></div>
                                        <input type="text" readonly="readonly" value="swap">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-tag"></div>
                                        <input type="text" readonly="readonly" value="tag">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-tag-delete"></div>
                                        <input type="text" readonly="readonly" value="tag-delete">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-tags"></div>
                                        <input type="text" readonly="readonly" value="tags">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-thumbs-down"></div>
                                        <input type="text" readonly="readonly" value="thumbs-down">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-thumbs-up"></div>
                                        <input type="text" readonly="readonly" value="thumbs-up">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-ticket"></div>
                                        <input type="text" readonly="readonly" value="ticket">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-time-reverse"></div>
                                        <input type="text" readonly="readonly" value="time-reverse">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-to-do"></div>
                                        <input type="text" readonly="readonly" value="to-do">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-toggles"></div>
                                        <input type="text" readonly="readonly" value="toggles">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-trash"></div>
                                        <input type="text" readonly="readonly" value="trash">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-trophy"></div>
                                        <input type="text" readonly="readonly" value="trophy">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-upload"></div>
                                        <input type="text" readonly="readonly" value="upload">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-user"></div>
                                        <input type="text" readonly="readonly" value="user">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-user-group"></div>
                                        <input type="text" readonly="readonly" value="user-group">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-user-id"></div>
                                        <input type="text" readonly="readonly" value="user-id">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-vibrate"></div>
                                        <input type="text" readonly="readonly" value="vibrate">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-view-apps"></div>
                                        <input type="text" readonly="readonly" value="view-apps">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-view-list"></div>
                                        <input type="text" readonly="readonly" value="view-list">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-view-list-large"></div>
                                        <input type="text" readonly="readonly" value="view-list-large">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-view-thumb"></div>
                                        <input type="text" readonly="readonly" value="view-thumb">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-volume-full"></div>
                                        <input type="text" readonly="readonly" value="volume-full">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-volume-low"></div>
                                        <input type="text" readonly="readonly" value="volume-low">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-volume-medium"></div>
                                        <input type="text" readonly="readonly" value="volume-medium">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-volume-off"></div>
                                        <input type="text" readonly="readonly" value="volume-off">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-wallet"></div>
                                        <input type="text" readonly="readonly" value="wallet">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-warning"></div>
                                        <input type="text" readonly="readonly" value="warning">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-web"></div>
                                        <input type="text" readonly="readonly" value="web">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-weight"></div>
                                        <input type="text" readonly="readonly" value="weight">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-wifi"></div>
                                        <input type="text" readonly="readonly" value="wifi">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-wrong"></div>
                                        <input type="text" readonly="readonly" value="wrong">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-zoom-in"></div>
                                        <input type="text" readonly="readonly" value="zoom-in">
                                    </li>
                                    <li>
                                        <div class="icon dripicons-zoom-out"></div>
                                        <input type="text" readonly="readonly" value="zoom-out">
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; denvir</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="#">D. De Jesus</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/fontawesome/all.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>