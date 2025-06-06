{% set title = 'Divider' %}
{% set filename = 'extra-component-divider.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Divider</h3>
                <p class="text-subtitle text-muted">A Component</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Divider</li>
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
                        <h4 class="card-title">Default</h4>
                    </div>
                    <div class="card-body">
                        <p>You can use default divider with <code>{{ "<hr>" | escape }}</code><code><hr></code></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum numquam
                            reprehenderit facilis. Dolor blanditiis commodi voluptate esse voluptatum aut natus,
                            distinctio at, officiis ipsam molestiae doloribus ratione corrupti dolorum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Divider with Text</h4>
                    </div>
                    <div class="card-body">
                        <p>Use <code>.divider-text</code> and wrapped by <code>.divider</code> to create a divider text
                        </p>
                        <div class="divider">
                            <div class="divider-text">Hello there!</div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nostrum numquam
                            reprehenderit facilis. Dolor blanditiis commodi voluptate esse voluptatum aut natus,
                            distinctio at, officiis ipsam molestiae doloribus ratione corrupti dolorum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Divider Position</h4>
                    </div>
                    <div class="card-body">
                        <p>Use <code>.divider-{left|left-center|right-center|right}</code> and with
                            <code>.divider</code> to change the text position </p>
                        <div class="divider divider-left">
                            <div class="divider-text">Left</div>
                        </div>
                        <div class="divider divider-left-center">
                            <div class="divider-text">Left Center</div>
                        </div>
                        <div class="divider">
                            <div class="divider-text">Center</div>
                        </div>
                        <div class="divider divider-right-center">
                            <div class="divider-text">Right Center</div>
                        </div>
                        <div class="divider divider-right">
                            <div class="divider-text">Right</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}