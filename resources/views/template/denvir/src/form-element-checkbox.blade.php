{% set title = 'Checkbox' %}
{% set filename = 'form-element-checkbox.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Checkbox</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkbox</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section id="basic-checkbox">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Checkboxes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox1" class="form-check-input" checked>
                                            <label for="checkbox1">Touch me!</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                            <label for="checkbox2">Touch me!</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox3" class="form-check-input" disabled
                                                checked>
                                            <label for="checkbox3">Disabled Checked Checkbox</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox4" class="form-check-input" disabled>
                                            <label for="checkbox4">Disabled Unchecked Checkbox</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic Checkbox end -->

    <!-- Custom Checkbox Colored start -->
    <section id="custom-checkbox-colored">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Custom Colored Checkboxes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>To change the color of the Custom CheckBoxes, use the <code>.bg-{colorName}</code> with
                                <code>.form-check-input</code> class.
                            </p>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-primary" checked
                                                name="customCheck" id="customColorCheck1">
                                            <label class="form-check-label" for="customColorCheck1">Primary</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-secondary" checked
                                                name="customCheck" id="customColorCheck2">
                                            <label class="form-check-label" for="customColorCheck2">Secondary</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-success" checked
                                                name="customCheck" id="customColorCheck3">
                                            <label class="form-check-label" for="customColorCheck3">Success</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-danger" checked
                                                name="customCheck" id="customColorCheck4">
                                            <label class="form-check-label" for="customColorCheck4">Danger</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-info" checked
                                                name="customCheck" id="customColorCheck5">
                                            <label class="form-check-label" for="customColorCheck5">Info</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="form-check-input form-check-warning" checked
                                                name="customCheck" id="customColorCheck6">
                                            <label class="form-check-label" for="customColorCheck6">Warning</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Custom Checkbox end -->


    <!-- Checkbox Glow start -->
    <section id="checkbox-glow">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checkboxes Glow</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Use class <code>.form-check-glow</code> class with
                                <code>.form-check-input.form-check-{colorName}</code>
                                for glow effect to Checkboxes. Glow shadow color will be changed according to Colored
                                Checkboxes.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary form-check-glow" checked
                                                name="customCheck" id="customColorCheck1">
                                            <label class="form-check-label" for="customColorCheck1">Primary</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-secondary form-check-glow" checked
                                                name="customCheck" id="customColorCheck2">
                                            <label class="form-check-label" for="customColorCheck2">Secondary</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-success form-check-glow" checked
                                                name="customCheck" id="customColorCheck3">
                                            <label class="form-check-label" for="customColorCheck3">Success</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-danger form-check-glow" checked
                                                name="customCheck" id="customColorCheck4">
                                            <label class="form-check-label" for="customColorCheck4">Danger</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block me-2 mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-info form-check-glow" checked
                                                name="customCheck" id="customColorCheck5">
                                            <label class="form-check-label" for="customColorCheck5">Info</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1">
                                    <div class="form-check">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-warning form-check-glow" checked
                                                name="customCheck" id="customColorCheck6">
                                            <label class="form-check-label" for="customColorCheck6">Warning</label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkbox Glow end -->


    <!-- Checkbox Sizes start -->
    <section id="checkbox-sizes">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checkboxes Sizes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>To add a checkBox with different sizes, we have the <code>.form-check-sm</code> class for
                                small
                                Checkboxes. Add it alongwith <code>.form-check</code> class.</p>
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block mb-1 me-2">
                                    <div class="form-check form-check-sm">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                class="form-check-input form-check-primary form-check-glow" checked
                                                name="customCheck" id="customColorCheck6">
                                            <label class="form-check-label" for="customColorCheck6">Small</label>
                                        </div>
                                    </div>
                                </li>
                                <li class="d-inline-block mb-1 me-2">
                                    <div class="form-check">
                                        <input type="checkbox"
                                            class="form-check-input form-check-primary form-check-glow" checked
                                            name="customCheck" id="customColorCheck6">
                                        <label class="form-check-label" for="customColorCheck6">Default</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkbox Sizes end -->
</div>
{% endblock %}