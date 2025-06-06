{% set title = 'Button' %}
{% set filename = 'component-button.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Button</h3>
                <p class="text-subtitle text-muted">Use Bootstrap’s custom button styles for actions in forms, dialogs,
                    and more with support for multiple sizes, states,
                    and more.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Button</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Basic Buttons</h4>
                    </div>
                    <div class="card-body">
                        <h6>Default</h6>
                        <p class="text-muted">Use the <code>.btn .btn-{color}</code> classes.</p>
                        <div class="buttons">
                            <a href="#" class="btn btn-primary">Primary</a>
                            <a href="#" class="btn btn-secondary">Secondary</a>
                            <a href="#" class="btn btn-info">Info</a>
                            <a href="#" class="btn btn-warning">Warning</a>
                            <a href="#" class="btn btn-danger">Danger</a>
                            <a href="#" class="btn btn-success">Success</a>
                            <a href="#" class="btn btn-light">Light</a>
                            <a href="#" class="btn btn-dark">Dark</a>
                        </div>
                        <hr>
                        <h6>Rounded</h6>
                        <p>Use a class <code>.rounded-pill</code> with <code>.btn</code> class to create round button.</p>
                        <div class="buttons">
                            <a href="#" class="btn btn-primary rounded-pill">Primary</a>
                            <a href="#" class="btn btn-secondary rounded-pill">Secondary</a>
                            <a href="#" class="btn btn-info rounded-pill">Info</a>
                            <a href="#" class="btn btn-warning rounded-pill">Warning</a>
                            <a href="#" class="btn btn-danger rounded-pill">Danger</a>
                            <a href="#" class="btn btn-success rounded-pill">Success</a>
                            <a href="#" class="btn btn-light rounded-pill">Light</a>
                            <a href="#" class="btn btn-dark rounded-pill">Dark</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Buttons <code>.btn-outline</code></h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.btn .btn-outline-{color}</code> classes.</p>
                        <div class="buttons">
                            <a href="#" class="btn btn-outline-primary">Primary</a>
                            <a href="#" class="btn btn-outline-secondary">Secondary</a>
                            <a href="#" class="btn btn-outline-info">Info</a>
                            <a href="#" class="btn btn-outline-warning">Warning</a>
                            <a href="#" class="btn btn-outline-danger">Danger</a>
                            <a href="#" class="btn btn-outline-success">Success</a>
                            <a href="#" class="btn btn-outline-light">Light</a>
                            <a href="#" class="btn btn-outline-dark">Dark</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Button Sizes</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.btn-lg</code> or <code>.btn-sm</code> classes.</p>
                        <div class="buttons">
                            <a href="#" class="btn btn-sm btn-warning">Small</a>
                            <a href="#" class="btn btn-danger">Normal</a>
                            <a href="#" class="btn btn-lg btn-dark">Large</a>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn btn-sm btn-outline-primary">Small</a>
                            <a href="#" class="btn btn-outline-primary">Normal</a>
                            <a href="#" class="btn btn-lg btn-outline-primary">Large</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Button States</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.disabled</code> or <code>.btn-progress</code> classes.</p>
                        <div class="buttons">
                            <a href="#" class="btn btn-primary">Normal</a>
                            <a href="#" class="btn disabled btn-primary">Disabled</a>
                            <a href="#" class="btn disabled btn-primary btn-progress">Progress</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Icon Button</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.icon</code> and <code>.icon-left</code> classes.</p>
                        <div class="buttons">
                            <a href="#" class="btn icon icon-left"><i data-feather="user"></i> Default</a>
                            <a href="#" class="btn icon icon-left btn-primary"><i data-feather="edit"></i> Primary</a>
                            <a href="#" class="btn icon icon-left btn-secondary"><i data-feather="user"></i>
                                Secondary</a>
                            <a href="#" class="btn icon icon-left btn-info"><i data-feather="info"></i> Info</a>
                            <a href="#" class="btn icon icon-left btn-warning"><i data-feather="alert-triangle"></i>
                                Warning</a>
                            <a href="#" class="btn icon icon-left btn-danger"><i data-feather="alert-circle"></i>
                                Danger</a>
                            <a href="#" class="btn icon icon-left btn-success"><i data-feather="check-circle"></i>
                                Success</a>
                            <a href="#" class="btn icon icon-left btn-light"><i data-feather="star"></i> Light</a>
                            <a href="#" class="btn icon icon-left btn-dark"><i data-feather="file"></i> Dark</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Only Icon Button</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">Use the <code>.icon</code> class.</p>
                        <div class="buttons">
                            <a href="#" class="btn icon btn-primary"><i data-feather="edit"></i></a>
                            <a href="#" class="btn icon btn-secondary"><i data-feather="user"></i></a>
                            <a href="#" class="btn icon btn-info"><i data-feather="info-circle"></i></a>
                            <a href="#" class="btn icon btn-warning"><i data-feather="exclamation-triangle"></i></a>
                            <a href="#" class="btn icon btn-danger"><i data-feather="times"></i></a>
                            <a href="#" class="btn icon btn-success"><i data-feather="check"></i></a>
                            <a href="#" class="btn icon btn-light"><i data-feather="star"></i></a>
                            <a href="#" class="btn icon btn-dark"><i data-feather="file"></i></a>
                        </div>
                        <p class="text-muted mt-2">Sizes.</p>
                        <div class="buttons">
                            <a href="#" class="btn icon btn-sm btn-warning"><i
                                    data-feather="exclamation-triangle"></i></a>
                            <a href="#" class="btn icon btn-danger"><i data-feather="times"></i></a>
                            <a href="#" class="btn icon btn-lg btn-success"><i data-feather="check"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Button Group</h4>
                    </div>
                    <div class="card-body">
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                        </div>
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-danger">Left</button>
                            <button type="button" class="btn btn-warning">Middle</button>
                            <button type="button" class="btn btn-success">Right</button>
                        </div>
                        <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-danger">Left</button>
                            <button type="button" class="btn btn-danger">Middle</button>
                            <button type="button" class="btn btn-danger">Right</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                            <button type="button" class="btn">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn">Right</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Vertical Variation</h4>
                    </div>
                    <div class="card-body">
                        <div class="btn-group-vertical" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Left</button>
                            <button type="button" class="btn btn-secondary">Middle</button>
                            <button type="button" class="btn btn-secondary">Right</button>
                            <button type="button" class="btn btn-secondary">Justify</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}