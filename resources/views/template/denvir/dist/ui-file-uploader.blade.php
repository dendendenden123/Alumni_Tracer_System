<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader - denvir Admin Dashboard</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    
<link rel="stylesheet" href="{{ asset('assets/vendors/toastify/toastify.css') }}">
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

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
            
            <li class="sidebar-item active ">
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
                <h3>File Uploader</h3>
                <p class="text-subtitle text-muted">File uploader that makes user easier to upload their files</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">File Uploader</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic File Uploader</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic file uploader up, upload here to see how
                                <code>.basic-filepond</code> look.
                            </p>
                            <!-- Basic file uploader -->
                            <input type="file" class="basic-filepond">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">ImgBB Uploader</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic file uploader up, upload here to see how
                                <code>.imgbb-filepond</code>-based basic file uploader look. You must use
                                <code>name=image</code> or by FormData fieldName for your 
                                input <code>type=file</code> to upload in imgBB.
                            </p>
                            <!-- imgBB file uploader -->
                            <input type="file" name="image" class="imgbb-filepond">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Multiple Files</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.multiple-files-filepond</code>-based basic file uploader look. You can use
                                <code>allowMultiple</code> or <code>multiple</code> attribute too to implement multiple upload.
                            </p>
                            <!-- File uploader with multiple files upload -->
                            <input type="file" class="multiple-files-filepond" multiple>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">With Validation</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.with-validation-filepond</code>-based basic file uploader look. You can use 
                                <a href="https://pqina.nl/filepond/docs/patterns/plugins/file-validate-size/#properties" target="_blank">see here</a>
                                or <code>required (to make your input required), data-max-file-size (to limit your input file size), 
                                data-max-files (to limit your uploaded files), etc (start with data-)</code> attribute too to implement validation.
                            </p>
                            <!-- File uploader with validation -->
                            <input type="file" class="with-validation-filepond" required multiple data-max-file-size="1MB" data-max-files="3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Image Preview</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.image-preview-filepond</code>-based basic file uploader look. This
                                preview for uploaded or dropped images.
                            </p>
                            <!-- File uploader with image preview -->
                            <input type="file" class="image-preview-filepond">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Image Exif Orientation</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.image-exif-filepond</code>-based basic file uploader look. This 
                                helps in correctly orienting photos taken on mobile devices.
                            </p>
                            <!-- Auto image crop file uploader -->
                            <input type="file" class="image-exif-filepond">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Image Auto Crop</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.image-crop-filepond</code>-based basic file uploader look. You can use
                                <code>imageCropAspectRatio</code> or <code>image-crop-aspect-ratio</code> to
                                set aspect ratio.
                            </p>
                            <!-- Auto crop image file uploader -->
                            <input type="file" class="image-crop-filepond" image-crop-aspect-ratio="1:1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Image Auto Filter</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.image-filter-filepond</code>-based basic file uploader look. 
                            </p>
                            <!-- Auto filter image file uploader -->
                            <input type="file" class="image-filter-filepond">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Image Auto Resize</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p class="card-text">Using the basic table up, upload here to see how
                                <code>.image-resize-filepond</code>-based basic file uploader look. 
                            </p>
                            <!-- Auto resize image file uploader -->
                            <input type="file" class="image-resize-filepond">
                        </div>
                    </div>
                </div>
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
    
<!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="assets/vendors/toastify/toastify.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script>
    // register desired plugins...
	FilePond.registerPlugin(
        // validates the size of the file...
        FilePondPluginFileValidateSize,
        // validates the file type...
        FilePondPluginFileValidateType,

        // calculates & dds cropping info based on the input image dimensions and the set crop ratio...
        FilePondPluginImageCrop,
        // preview the image file type...
        FilePondPluginImagePreview,
        // filter the image file
        FilePondPluginImageFilter,
        // corrects mobile image orientation...
        FilePondPluginImageExifOrientation,
        // calculates & adds resize information...
        FilePondPluginImageResize,
    );
    
    // Filepond: Basic
    FilePond.create( document.querySelector('.basic-filepond'), { 
        allowImagePreview: false,
        allowMultiple: false,
        allowFileEncode: false,
        required: false
    });

    // Filepond: Multiple Files
    FilePond.create( document.querySelector('.multiple-files-filepond'), { 
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: false
    });

    // Filepond: With Validation
    FilePond.create( document.querySelector('.with-validation-filepond'), { 
        allowImagePreview: false,
        allowMultiple: true,
        allowFileEncode: false,
        required: true,
        acceptedFileTypes: ['image/png'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: ImgBB with server property
    FilePond.create( document.querySelector('.imgbb-filepond'), { 
        allowImagePreview: false, 
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort) => {
                // We ignore the metadata property and only send the file

                const formData = new FormData();
                formData.append(fieldName, file, file.name);

                const request = new XMLHttpRequest();
                // you can change it by your client api key
                request.open('POST', 'https://api.imgbb.com/1/upload?key=762894e2014f83c023b233b2f10395e2');

                request.upload.onprogress = (e) => {
                    progress(e.lengthComputable, e.loaded, e.total);
                };

                request.onload = function() {
                    if (request.status >= 200 && request.status < 300) {
                        load(request.responseText);
                    }
                    else {
                        error('oh no');
                    }
                };

                request.onreadystatechange = function() {
                    if (this.readyState == 4) {
                        if(this.status == 200) {
                            let response = JSON.parse(this.responseText);
                            
                            Toastify({
                                text: "Success uploading to imgbb! see console f12",
                                duration: 3000,
                                close:true,
                                gravity:"bottom",
                                position: "right",
                                backgroundColor: "#4fbe87",
                            }).showToast();
                
                            console.log(response);
                        } else {
                            Toastify({
                                text: "Failed uploading to imgbb! see console f12",
                                duration: 3000,
                                close:true,
                                gravity:"bottom",
                                position: "right",
                                backgroundColor: "#ff0000",
                            }).showToast();   

                            console.log("Error", this.statusText);
                        }
                    }
                };

                request.send(formData);
            }
        }
    });

    // Filepond: Image Preview
    FilePond.create( document.querySelector('.image-preview-filepond'), { 
        allowImagePreview: true, 
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Crop
    FilePond.create( document.querySelector('.image-crop-filepond'), { 
        allowImagePreview: true, 
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: true,
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

        // Filepond: Image Exif Orientation
    FilePond.create( document.querySelector('.image-exif-filepond'), { 
        allowImagePreview: true, 
        allowImageFilter: false,
        allowImageExifOrientation: true,
        allowImageCrop: false,
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Filter
    FilePond.create( document.querySelector('.image-filter-filepond'), {
        allowImagePreview: true, 
        allowImageFilter: true,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        imageFilterColorMatrix: [
            0.299, 0.587, 0.114, 0, 0,
            0.299, 0.587, 0.114, 0, 0,
            0.299, 0.587, 0.114, 0, 0,
            0.000, 0.000, 0.000, 1, 0
        ],
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });

    // Filepond: Image Resize
    FilePond.create( document.querySelector('.image-resize-filepond'), {
        allowImagePreview: true, 
        allowImageFilter: false,
        allowImageExifOrientation: false,
        allowImageCrop: false,
        allowImageResize: true,
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        imageResizeMode: 'cover',
        imageResizeUpscale: true,
        acceptedFileTypes: ['image/png','image/jpg','image/jpeg'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            // Do custom type detection here and return with promise
            resolve(type);
        })
    });
</script>

    <script src="assets/js/main.js"></script>
</body>

</html>
