{% set title = 'TinyMCE' %}
{% set filename = 'form-editor-tinymce.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>TinyMCE </h3>
                <p class="text-subtitle text-muted">Super simple WYSIWYG editor. But you must include jQuery</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">TinyMCE</li>
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
                        <h4 class="card-title">Default Editor</h4>
                    </div>
                    <div class="card-body">
                        <textarea name="" id="default" cols="30" rows="10"></textarea>
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
                        <h4 class="card-title">Code Toolbar</h4>
                    </div>
                    <div class="card-body">
                        <textarea id="dark" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}

{% block styles %}
<!-- <link rel="stylesheet" href="{{ asset('assets/vendors/tinymce/summernote-lite.min.css') }}"> -->
{% endblock %}
{% block js %}
<script src="assets/vendors/tinymce/tinymce.min.js"></script>
<script src="assets/vendors/tinymce/plugins/code/plugin.min.js"></script>
<script>
    tinymce.init({ selector: '#default' });
    tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
</script>
{% endblock %}