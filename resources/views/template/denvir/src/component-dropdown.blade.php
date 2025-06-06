{% set title = 'Dropdown' %}
{% set filename = 'component-dropdown.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Dropdown</h3>
                <p class="text-subtitle text-muted">A carousel without slide control</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dropdown</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="basic-dropdown">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Primary
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Secondary
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Success
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-info dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Info
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Danger
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-warning dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButton5" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Warning
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton7"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dark
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Dropdown End -->

    <!-- Split Button Dropdown Starts -->
    <section id="dropdown-with-split-btn">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Split Dropdowns</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>To create a split button add class <code>.dropdown-toggle-split</code> with your dropdown
                                toggle class
                                And to add divider between dropdown item use class <code>.doprdown-divider</code>
                            </p>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item active" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-secondary">Secondary</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item active" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <h6 class="dropdown-header">Header</h6>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item disabled" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-light">Light</button>
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group dropdown mb-1">
                                <button type="button" class="btn btn-dark">Dark</button>
                                <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <a class="dropdown-item" href="#">Option 3</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Split Button Dropdown Ends -->

    <!-- Dropdown with Icon Starts -->
    <section id="dropdown-with-icon">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Dropdown with Icons & Emoji</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Use <code>.dropdown-item-emoji</code> within <code>.dropdown-item</code> for font-size
                                and
                                spacing of emojis.</p>
                            <div class="btn-group mb-1">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButtonIcon" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="bi bi-error-circle me-50"></i> Icon Left
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIcon">
                                        <a class="dropdown-item" href="#"><i class="bi bi-bar-chart-alt-2 me-50"></i>
                                            Option
                                            1</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-bell me-50"></i> Option 2</a>
                                        <a class="dropdown-item" href="#"><i class="bi bi-time me-50"></i> Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown icon-right">
                                    <button class="btn btn-primary dropdown-toggle me-1" type="button"
                                        id="dropdownMenuButtonIconRight" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Icon Right <i class="bi bi-error-circle ml-50"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonIconRight">
                                        <a class="dropdown-item justify-content-between" href="#">Option 1 <i
                                                class="bi bi-bar-chart-alt-2 ml-50"></i></a>
                                        <a class="dropdown-item justify-content-between" href="#">Option 2 <i
                                                class="bi bi-bell ml-50"></i></a>
                                        <a class="dropdown-item justify-content-between" href="#">Option 3 <i
                                                class="bi bi-time ml-50"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group mb-1">
                                <div class="dropdown dropdown-color-icon">
                                    <button class="btn btn-primary dropdown-toggle" type="button"
                                        id="dropdownMenuButtonEmoji" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <span Class="me-50">🙂</span>Color Emoji icons
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonEmoji">
                                        <a class="dropdown-item" href="#"><span class="dropdown-item-emoji">😆</span>
                                            Option
                                            1</a>
                                        <a class="dropdown-item" href="#"><span class="dropdown-item-emoji">😎</span>
                                            Option
                                            2 </a>
                                        <a class="dropdown-item" href="#"><span class="dropdown-item-emoji">🤩</span>
                                            Option
                                            3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dropdown with Icon End -->

    <!-- Dropdown Direction Starts -->
    <section id="dropdown-directions">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Directions</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Add <code>.dropdown-menu-end</code> to a <code>.dropdown-menu</code> to right align the
                                dropdown menu.
                                Trigger dropdown menus at the up / right / left of the elements by adding
                                <code>.dropup | .dropright | .dropleft </code> to the parent element.
                            </p>
                            <div class="direction-dropdown-default mt-1">
                                <div class="btn-group me-1 mb-1">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Drop bottom right
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item active" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group dropup me-1 mb-1">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Drop up
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item disabled" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                                <div class="btn-group dropend me-1 mb-1">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Drop right
                                    </button>
                                    <div class="dropdown-menu">
                                        <h6 class="dropdown-header">Header</h6>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                                <div class="btn-group dropstart  mb-1">
                                    <button type="button" class="btn btn-secondary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Drop left
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item disabled" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dropdown Direction End -->

    <!-- Dropdown Sizes Starts -->
    <section id="dropdown-sizes">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sizes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Button dropdowns work with buttons of all sizes, including default and split dropdown
                                buttons.</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="btn-group me-1 mb-1">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary btn-lg dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Large
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group me-1 mb-1">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Default
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Small
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Option 1</a>
                                                <a class="dropdown-item" href="#">Option 2</a>
                                                <a class="dropdown-item" href="#">Option 3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="btn-group dropdown me-1 mb-1">
                                        <button type="button" class="btn btn-primary btn-lg">
                                            Large
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary btn-lg dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown me-1 mb-1">
                                        <button type="button" class="btn btn-primary">
                                            Default
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                    <div class="btn-group dropdown mb-1">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Small
                                        </button>
                                        <button type="button"
                                            class="btn btn-primary btn-sm dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Option 1</a>
                                            <a class="dropdown-item" href="#">Option 2</a>
                                            <a class="dropdown-item" href="#">Option 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dropdown Sizes Ends -->

    <!-- Dropdown options Starts -->
    <section id="dropdown-options">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Options</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Use <code>data-offset</code> or <code>data-reference</code> attributes to change the
                                location
                                of the dropdown.</p>
                            <div class="btn-group dropdown me-1 mb-1">
                                <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    data-offset="5,20">
                                    Offset
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                            <div class="btn-group dropdown mb-1">
                                <button type="button" class="btn btn-secondary">Reference</button>
                                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                    id="dropdownMenuReference" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false" data-reference="parent">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dropdown options Ends -->

    <!-- Dropdown variations Starts -->
    <section id="dropdown-variations">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Variations</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>To create a dropdown with groups you can use <code>.dropdown-header</code> for the header
                                of
                                groups
                                and for sepration of group you can use <code>.dropdown-divider</code>.
                            </p>
                            <p>
                                To create a dropdown with icons use class <code>.dropdown-icon-wrapper</code> with
                                <code>.dropdown</code>.
                            </p>
                            <div class="btn-group dropup me-1 mb-1">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton902"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Groups
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton902">
                                    <h6 class="dropdown-header">Group 1</h6>
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Group 2</h6>
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                    <div class="dropdown-divider"></div>
                                    <h6 class="dropdown-header">Group 3</h6>
                                    <a class="dropdown-item" href="#">Option 1</a>
                                    <a class="dropdown-item" href="#">Option 2</a>
                                </div>
                            </div>
                            <div class="btn-group dropup dropdown-icon-wrapper me-1 mb-1">
                                <button type="button" class="btn btn-primary">
                                    Icons
                                </button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-wifi dropdown-icon"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <span class="dropdown-item">
                                        <i class="bi bi-wifi-off"></i>
                                    </span>
                                    <span class="dropdown-item">
                                        <i class="bi bis-volume"></i>
                                    </span>
                                    <span class="dropdown-item">
                                        <i class="bi bis-volume-full"></i>
                                    </span>
                                    <span class="dropdown-item">
                                        <i class="bi bi-bell"></i>
                                    </span>
                                    <span class="dropdown-item">
                                        <i class="bi bi-bell-off"></i>
                                    </span>
                                    <span class="dropdown-item">
                                        <i class="bi bi-phone"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="btn-group dropup mb-1">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Form
                                </button>
                                <div class="dropdown-menu">
                                    <form class="px-2 py-2">
                                        <div class="form-group">
                                            <label for="exampleDropdownFormEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                                placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleDropdownFormPassword1">Password</label>
                                            <input type="password" class="form-control"
                                                id="exampleDropdownFormPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" id="dropdownCheck1">
                                                <label for="dropdownCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                                    <a class="dropdown-item" href="#">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dropdown variations Ends -->

</div>
{% endblock %}