{% set title = 'Select' %}
{% set filename = 'form-element-select.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Select</h3>
                <p class="text-subtitle text-muted">Customize the native &laquo;select&raquo; with custom CSS that
                    changes the element’s initial appearance..</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Select</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="bootstrap-select">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bootstrap Select</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h6>Basic Select</h6>
                                    <p>Use <code>.form-select</code> class for basic select control.</p>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect">
                                            <option>IT</option>
                                            <option>Blade Runner</option>
                                            <option>Thor Ragnarok</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>Disabled Select</h6>
                                    <p>Use <code>disabled</code> attribute for disabled select control.</p>
                                    <fieldset class="form-group">
                                        <select class="form-select" disabled="disabled" id="disabledSelect">
                                            <option>Green</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap Select end -->

    <!-- Input Group Select start -->
    <section class="input-group-select">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Group Select</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h6>Basic Select with Input Group</h6>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>Input group append</h6>
                                    <div class="input-group mb-3">
                                        <select class="form-select" id="inputGroupSelect01">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap Select end -->

    <!-- Basic choices start -->
    <section class="basic-choices">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Choices</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-light-primary">
                                        <a href="https://choices.org/getting-started/installation" target="_blank">Click
                                            here</a> for more information
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>Basic Choices</h6>
                                    <p>Use <code>.choices</code> class for basic choices control.</p>
                                    <div class="form-group">
                                        <select class="choices form-select">
                                            <option value="square">Square</option>
                                            <option value="rectangle">Rectangle</option>
                                            <option value="rombo">Rombo</option>
                                            <option value="romboid">Romboid</option>
                                            <option value="trapeze">Trapeze</option>
                                            <option value="traible">Triangle</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>Single Select with Label</h6>
                                    <p>Use <code>optgroup</code> attribute for basic choices with Label control.</p>
                                    <div class="form-group">
                                        <select class="choices form-select">
                                            <optgroup label="Figures">
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze">Trapeze</option>
                                                <option value="triangle">Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </optgroup>
                                            <optgroup label="Colors">
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                                <option value="blue">Blue</option>
                                                <option value="purple">Purple</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic choices end -->

    <!-- Multiple choices start -->
    <section class="multiple-choices">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple choices</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <h6>Basic Multiple choices</h6>
                                    <p>Use <code>.choices</code> class for basic choices control. Use
                                        <code>multiple="multiple"</code>
                                        attribute for multiple select box.
                                    </p>
                                    <div class="form-group">
                                        <select class="choices form-select" multiple="multiple">
                                            <option value="square">Square</option>
                                            <option value="rectangle" selected>Rectangle</option>
                                            <option value="rombo">Rombo</option>
                                            <option value="romboid">Romboid</option>
                                            <option value="trapeze">Trapeze</option>
                                            <option value="traible" selected>Triangle</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>Multiple Select with Label</h6>
                                    <p>Use <code>optgroup</code> attribute for multiple select box with Label control.
                                    </p>
                                    <div class="form-group">
                                        <select class="choices form-select" multiple="multiple">
                                            <optgroup label="Figures">
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze" selected>Trapeze</option>
                                                <option value="triangle">Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </optgroup>
                                            <optgroup label="Colors">
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                                <option value="blue" selected>Blue</option>
                                                <option value="purple">Purple</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>Multiple Select with Remove Button</h6>
                                    <p>Use <code>.multiple-remove</code> attribute for multiple select box with remove
                                        button.</p>
                                    <div class="form-group">
                                        <select class="choices form-select multiple-remove" multiple="multiple">
                                            <optgroup label="Figures">
                                                <option value="romboid">Romboid</option>
                                                <option value="trapeze" selected>Trapeze</option>
                                                <option value="triangle">Triangle</option>
                                                <option value="polygon">Polygon</option>
                                            </optgroup>
                                            <optgroup label="Colors">
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                                <option value="blue" selected>Blue</option>
                                                <option value="purple">Purple</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <h6>choices with Light Background Options</h6>
                                    <p>Use <code>.select-light-{colorName}</code> class for light background to selected
                                        Options.</p>
                                    <div class="form-group">
                                        <select class="choices form-select select-light-danger" multiple="multiple">
                                            <option value="square">Square</option>
                                            <option value="rectangle" selected>Rectangle</option>
                                            <option value="rombo">Rombo</option>
                                            <option value="romboid">Romboid</option>
                                            <option value="trapeze">Trapeze</option>
                                            <option value="traible" selected>Triangle</option>
                                            <option value="polygon">Polygon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Multiple choices end -->
</div>
{% endblock %}
{% block stylesfirst %}
<!-- Include Choices CSS -->
<link rel="stylesheet" href="{{ asset('assets/vendors/choices.js/choices.min.css') }}" />
{% endblock %}
{% block js %}
<!-- Include Choices JavaScript -->
<script src="assets/vendors/choices.js/choices.min.js"></script>
{% endblock %}