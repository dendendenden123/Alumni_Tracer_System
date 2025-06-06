{% set title = 'Form Editor' %}
{% set filename = 'form-editor-quill.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Quill Form Editor </h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Editor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Quill.js Snow Editor</h4>
            </div>
            <div class="card-body">
                <p>Snow is a clean editor theme</p>
                <div id="snow">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>

                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Bubble Editor</h4>
            </div>
            <div class="card-body">
                <p>Block some text to display options in poppovers </p>
                <div id="bubble">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Full Editor</h4>
            </div>
            <div class="card-body">
                <p>Block some text to display options in poppovers </p>
                <div id="full">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br></p>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}
{% block styles %}
<link rel="stylesheet" href="{{ asset('assets/vendors/quill/quill.bubble.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/quill/quill.snow.css') }}">
{% endblock %}
{% block js %}
<script src="assets/vendors/quill/quill.min.js"></script>
<script src="assets/js/pages/form-editor.js"></script>
{% endblock %}