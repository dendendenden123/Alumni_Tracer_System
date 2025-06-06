{% set title = 'Input Group' %}
{% set filename = 'form-element-input-group.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input Group</h3>
                <p class="text-subtitle text-muted">A group for input to display information in before or after input
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Group</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section id="basic-input-groups">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Input Groups</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add span with <code>.input-group-text</code> class <b>before</b>
                                <code>&lt;input&gt;</code>
                                for input-group-prepend and add span with <code>.input-group-text</code> class
                                <b>after</b>
                                <code>&lt;input&gt;</code> for input-group-append.
                            </p>
                            <div class="row">
                                <div class="col-lg-4 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                        <input type="text" class="form-control" placeholder="Addon to left"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-1">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Addon to right"
                                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="text" class="form-control"
                                            aria-label="Amount (to the nearest dollar)"
                                            placeholder="Addon on both side">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Inputs Groups end -->

    <!-- Multiple Inputs start -->
    <section id="multiple-inputs">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Inputs</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are
                                only
                                available for input groups with a single <code>&lt;input&gt;</code>.</p>
                            <div class="row">
                                <div class="col-12">
                                    <fieldset>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">First and last name</span>
                                            </div>
                                            <input type="text" aria-label="First name" class="form-control"
                                                placeholder="First Name">
                                            <input type="text" aria-label="Last name" class="form-control"
                                                placeholder="Last Name">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Multiple Inputs end -->

    <!-- Multiple addons start -->
    <section id="multiple-addons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Addons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.
                            </p>
                            <div class="row">
                                <div class="col-sm-6 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                        <input type="text" class="form-control"
                                            aria-label="Dollar amount (with dot and two decimal places)">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-1">
                                    <div class="input-group">
                                        <input type="text" class="form-control"
                                            aria-label="Dollar amount (with dot and two decimal places)">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Multiple addons end -->

    <!-- Inputs Group Checkbox and Radio Buttons end -->
    <section id="input-group-checkbox-radio">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Groups with Checkboxes and Radios</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Input Groups can use with checkboxes and radio buttons also. For it add code for
                                <code>.checkbox</code> class and <code>.radio</code> class respectively.
                            </p>
                            <div class="row">
                                <div class="col-sm-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Checkbox for following text input">
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with checkbox">
                                    </div>

                                </div>
                                <div class="col-sm-6 mb-1">
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <input class="form-check-input" type="radio" value=""
                                                aria-label="Radio button for following text input">
                                        </div>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with radio button">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inputs Group Checkbox and Radio Buttons end -->

    <!-- Inputs Group Sizes -->
    <section id="input-group-size">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Groups with different sizes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add <code>.input-group-{lg/sm}</code> class to <code>.input-group</code> for Large/Small
                                addon/prepend.</p>
                            <div class="row">
                                <div class="col-sm-4 mb-1">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-sm">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-default">
                                    </div>
                                </div>
                                <div class="col-sm-4 mb-1">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                            aria-describedby="inputGroup-sizing-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inputs Group Sizes end -->

    <!-- Inputs Group with Buttons -->
    <section id="input-group-buttons">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Groups with Buttons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add <code>{{ "<button>" | escape }}</code> before or after
                                <code>{{ "<input>" | escape }}</code> tag</p>
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary" type="button" id="button-addon1">Button</button>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="bi bi-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Recipient's username"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary" type="button"
                                            id="button-addon2">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inputs Group with Buttons end -->

    <!-- Inputs Group with Dropdown -->
    <section id="input-group-dropdown">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Groups with Dropdown</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add <code>&lt;button&gt;</code> with <code>.dropdown-toggle</code> class and add
                                dropdown-menu after it to get input group with dropdown.</p>
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with dropdown button">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action before</a></li>
                                            <li><a class="dropdown-item" href="#">Another action before</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                        <input type="text" class="form-control"
                                            aria-label="Text input with 2 dropdown buttons">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inputs Group with Dropdown end -->

    <!-- Custom file input start -->
    <section id="custom-file-input">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Custom file input</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="input-group mb-3">
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="inputGroupFile01"><i
                                                    class="bi bi-upload"></i></label>
                                            <input type="file" class="form-control" id="inputGroupFile01">
                                        </div>
                                    </div>

                                    </fieldset>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <fieldset>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile04"
                                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                            <button class="btn btn-primary" type="button"
                                                id="inputGroupFileAddon04">Upload</button>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Custom file input end -->
</div>
{% endblock %}