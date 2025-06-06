<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Group - denvir Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

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

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu active">
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
                                <li class="submenu-item active">
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

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="ui-icons-bootstrap-icons">Bootstrap Icons </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="ui-icons-fontawesome">Fontawesome</a>
                                </li>
                                <li class="submenu-item ">
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
                            <h3>List Group</h3>
                            <p class="text-subtitle text-muted">List groups are a flexible and powerful component for
                                displaying a
                                series of content</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List Group</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- list groups simple & disabled start -->
                <section id="basic-list-group">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Simple List Group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            The most basic list group is simply an unordered list with list
                                            items, and the proper classes. Build upon it with the options that
                                            follow, or your own CSS as needed.
                                        </p>
                                        <ul class="list-group">
                                            <li class="list-group-item active">Cras justo odio</li>
                                            <li class="list-group-item">Dapibus ac facilisis in</li>
                                            <li class="list-group-item">Morbi leo risus</li>
                                            <li class="list-group-item">Porta ac consectetur ac</li>
                                            <li class="list-group-item">chocolate cheesecake candy</li>
                                            <li class="list-group-item">Oat cake icing pastry pie carrot</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Disabled items</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out
                                            to appear
                                            disabled.</p>
                                        <div class="list-group">
                                            <span class="list-group-item">
                                                Cras justo odio
                                            </span>
                                            <span class="list-group-item">Dapibus ac facilisis in</span>
                                            <span class="list-group-item disabled">Morbi leo risus</span>
                                            <span class="list-group-item">Porta ac consectetur ac</span>
                                            <span class="list-group-item">Vestibulum at eros</span>
                                            <span class="list-group-item">Biscuit jelly beans macaroon danish
                                                pudding</span>
                                            <span class="list-group-item">Oat cake icing pastry pie carrot</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- list groups simple & disabled end -->
                <!-- list group button & badge start-->
                <section class="list-group-button-badge">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Button list Group</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="list-group">
                                            <button type="button"
                                                class="list-group-item list-group-item-action active">Cras justo
                                                odio</button>
                                            <button type="button" class="list-group-item list-group-item-action">Dapibus
                                                ac
                                                facilisis
                                                in</button>
                                            <button type="button" class="list-group-item list-group-item-action">Morbi
                                                leo
                                                risus</button>
                                            <button type="button" class="list-group-item list-group-item-action">Porta
                                                ac
                                                consectetur
                                                ac</button>
                                            <button type="button"
                                                class="list-group-item list-group-item-action">Vestibulum at
                                                eros</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Badges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Use Utility classes <code>.d-flex</code>
                                            <code>.justify-content-between</code>
                                            <code>align-items-center</code> to create space between badge and your
                                            content
                                        </p>
                                        <ul class="list-group">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Biscuit jelly beans macaroon danish pudding.</span>
                                                <span class="badge bg-warning badge-pill badge-round ml-1">8</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> chocolate cheesecake candy</span>
                                                <span class="badge bg-info badge-pill badge-round ml-1">7</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span> Oat cake icing pastry pie carrot</span>
                                                <span class="badge bg-danger badge-pill badge-round ml-1">6</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                <span>space between badgeOat cake icing pastry pie carrot</span>
                                                <span class="badge bg-secondary badge-pill badge-round ml-1">5</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- list group button & badge ends -->
                <!-- list group Checkboxes and radios start -->
                <section id="list-group-icons">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Checkboxes and radios</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Place checkboxes and radios within list group items and customize as needed
                                        </p>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Cras justo odio
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Dapibus ac facilisis in
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Morbi leo risus
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Porta ac consectetur ac
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Vestibulum at eros
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Vestibulum at eros
                                            </li>
                                            <li class="list-group-item">
                                                <input class="form-check-input me-1" type="checkbox" value=""
                                                    aria-label="...">
                                                Vestibulum at eros
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Custom content</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Add nearly any HTML within, even for linked list groups like the
                                            one below.
                                        </p>
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1 text-white">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                                    diam eget risus varius blandit.
                                                </p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                                    diam eget risus varius blandit.
                                                </p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <h5 class="mb-1">List group item heading</h5>
                                                    <small>3 days ago</small>
                                                </div>
                                                <p class="mb-1">
                                                    Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                                    diam eget risus varius blandit.
                                                </p>
                                                <small>Donec id elit non mi porta.</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- list group Checkboxes and radios end -->
                <!-- list group with contextual & horizontal start -->
                <section id="list-group-contextual">
                    <div class="row match-height">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contextual classes</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Use contextual classes to style list items, default or linked.
                                            Also includes .active state.
                                        </p>
                                        <ul class="list-group">
                                            <li class="list-group-item list-group-item-primary">
                                                Cras justo odio
                                            </li>
                                            <li class="list-group-item list-group-item-success">
                                                Dapibus ac facilisis in
                                            </li>
                                            <li class="list-group-item list-group-item-danger">
                                                Morbi leo risus
                                            </li>
                                            <li class="list-group-item list-group-item-warning">
                                                Porta ac consectetur ac
                                            </li>
                                            <li class="list-group-item list-group-item-info">
                                                Vestibulum at eros
                                            </li>
                                            <li class="list-group-item list-group-item-light">
                                                chocolate cheesecake candy
                                            </li>
                                            <li class="list-group-item list-group-item-dark">
                                                Oat cake icing pastry pie carrot
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>
                                            Add <code>.list-group-horizontal</code> to change the layout of list group
                                            items from
                                            vertical to
                                            horizontal across all breakpoints.choose a responsive variantcode <code>
                        .list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that
                                            breakpoint’s min-width.
                                        </p>
                                        <div class="list-group list-group-horizontal-sm mb-1 text-center"
                                            role="tablist">
                                            <a class="list-group-item list-group-item-action active"
                                                id="list-sunday-list" data-bs-toggle="list" href="#list-sunday"
                                                role="tab">Option 1</a>
                                            <a class="list-group-item list-group-item-action" id="list-monday-list"
                                                data-bs-toggle="list" href="#list-monday" role="tab">Option 2</a>
                                            <a class="list-group-item list-group-item-action" id="list-tuesday-list"
                                                data-bs-toggle="list" href="#list-tuesday" role="tab">Option 3</a>
                                        </div>
                                        <div class="tab-content text-justify">
                                            <div class="tab-pane fade show active" id="list-sunday" role="tabpanel"
                                                aria-labelledby="list-sunday-list">Irure enim occaecat labore sit qui
                                                aliquip
                                                reprehenderit amet
                                                velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit
                                                occaecat
                                                laboris sunt dolor.
                                                Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute
                                                occaecat ea
                                                aliquip
                                                sunt amet.
                                                Aute mollit dolor ut exercitation irure commodo non amet consectetur
                                                quis amet
                                                culpa.
                                                Quis ullamco
                                                nisi amet qui aute irure eu. Magna labore dolor quis ex labore id
                                                nostrud deserunt
                                                dolor
                                                eiusmod eu
                                                pariatur culpa mollit in irure Lorem, ipsum dolor sit amet consectetur
                                                adipisicing
                                                elit.
                                                Iusto quis
                                                porro doloribus est natus doloremque, eos laudantium
                                                exercitationem impedit sapiente tenetur soluta reiciendis deserunt!
                                            </div>
                                            <div class="tab-pane fade" id="list-monday" role="tabpanel"
                                                aria-labelledby="list-monday-list">Cupidatat
                                                quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex
                                                nisi eu do
                                                cillum ad laborum.
                                                Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet
                                                id ex.
                                                Officia
                                                anim incididunt
                                                laboris deserunt anim aute dolor incididunt veniam aute dolore do
                                                exercitation.
                                                Dolor
                                                nisi culpa ex ad
                                                irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non
                                                commodo enim culpa
                                                commodo veniam
                                                incididunt veniam ad. Lorem ipsum dolor sit amet consectetur,
                                                adipisicing elit.
                                                Exercitationem, porro!
                                                Amet soluta tempora eveniet blanditiis alias eos, dolor qui consectetur!
                                            </div>
                                            <div class="tab-pane fade" id="list-tuesday" role="tabpanel"
                                                aria-labelledby="list-tuesday-list">Ut ut
                                                do pariatur aliquip aliqua aliquip exercitation do nostrud commodo
                                                reprehenderit
                                                aute
                                                ipsum voluptate.
                                                Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit
                                                mollit
                                                consequat enim tempor.
                                                Consectetur est minim nostrud nostrud consectetur irure labore voluptate
                                                irure.
                                                Ipsum id
                                                Lorem sit
                                                sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit
                                                eiusmod deserunt.
                                                Consectetur et
                                                fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur
                                                cillum. Lorem
                                                ipsum dolor sit
                                                amet consectetur adipisicing elit. Molestias, inventore!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- list group with contextual & horizontal ends -->
                <!-- List group navigation start -->
                <section class="list-group-navigation">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">List group navigation</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-4">
                                                <div class="list-group" role="tablist">
                                                    <a class="list-group-item list-group-item-action active"
                                                        id="list-home-list" data-bs-toggle="list" href="#list-home"
                                                        role="tab">Home</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-profile-list" data-bs-toggle="list"
                                                        href="#list-profile" role="tab">Profile</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-messages-list" data-bs-toggle="list"
                                                        href="#list-messages" role="tab">Messages</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-settings-list" data-bs-toggle="list"
                                                        href="#list-settings" role="tab">Settings</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-8 mt-1">
                                                <div class="tab-content text-justify" id="nav-tabContent">
                                                    <div class="tab-pane show active" id="list-home" role="tabpanel"
                                                        aria-labelledby="list-home-list">
                                                        Velit aute mollit ipsum ad dolor consectetur nulla officia culpa
                                                        adipisicing
                                                        exercitation fugiat
                                                        tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident
                                                        ea ut.
                                                        Mollit
                                                        voluptate
                                                        reprehenderit
                                                        occaecat nisi ad non minim tempor sunt voluptate consectetur
                                                        exercitation id
                                                        ut
                                                        nulla. Ea et fugiat
                                                        aliquip nostrud sunt incididunt consectetur culpa aliquip
                                                        eiusmod dolor.
                                                        Anim ad
                                                        Lorem aliqua in
                                                        cupidatat nisi enim eu nostrud do aliquip veniam minim. Lorem
                                                        ipsum dolor
                                                        sit
                                                        amet consectetur,
                                                        adipisicing elit. Aliquam itaque nisi obcaecati doloremque et
                                                        est ex
                                                        possimus
                                                        quidem dolorem soluta.
                                                    </div>
                                                    <div class="tab-pane" id="list-profile" role="tabpanel"
                                                        aria-labelledby="list-profile-list">
                                                        Cupidatat quis ad sint excepteur laborum in esse qui. Et
                                                        excepteur
                                                        consectetur
                                                        ex nisi eu do cillum
                                                        ad
                                                        laborum. Mollit et eu officia dolore sunt Lorem culpa qui
                                                        commodo velit ex
                                                        amet
                                                        id ex. Officia anim
                                                        incididunt laboris deserunt anim aute dolor incididunt veniam
                                                        aute dolore do
                                                        exercitation. Dolor
                                                        nisi
                                                        culpa ex ad irure in elit eu dolore. Ad laboris ipsum
                                                        reprehenderit irure
                                                        non
                                                        commodo enim culpa
                                                        commodo veniam incididunt veniam ad.</div>
                                                    <div class="tab-pane" id="list-messages" role="tabpanel"
                                                        aria-labelledby="list-messages-list">Ut ut
                                                        do pariatur aliquip aliqua aliquip exercitation do nostrud
                                                        commodo
                                                        reprehenderit
                                                        aute ipsum
                                                        voluptate.
                                                        Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do
                                                        ut velit
                                                        mollit
                                                        consequat enim
                                                        tempor.
                                                        Consectetur est minim nostrud nostrud consectetur irure labore
                                                        voluptate
                                                        irure.
                                                        Ipsum id Lorem sit
                                                        sint voluptate est pariatur eu ad cupidatat et deserunt culpa
                                                        sit eiusmod
                                                        deserunt. Consectetur et
                                                        fugiat anim do eiusmod aliquip nulla laborum elit adipisicing
                                                        pariatur
                                                        cillum.
                                                    </div>
                                                    <div class="tab-pane" id="list-settings" role="tabpanel"
                                                        aria-labelledby="list-settings-list">Irure
                                                        enim occaecat labore sit qui aliquip reprehenderit amet velit.
                                                        Deserunt
                                                        ullamco
                                                        ex elit nostrud ut
                                                        dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi
                                                        eu minim
                                                        cillum
                                                        occaecat aute est
                                                        cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute
                                                        mollit
                                                        dolor ut
                                                        exercitation irure
                                                        commodo non amet consectetur quis amet culpa. Quis ullamco nisi
                                                        amet qui
                                                        aute
                                                        irure eu. Magna labore
                                                        dolor quis ex labore id nostrud deserunt dolor eiusmod eu
                                                        pariatur culpa
                                                        mollit
                                                        in irure</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- List group navigation ends -->
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

    <script src="assets/js/main.js"></script>
</body>

</html>