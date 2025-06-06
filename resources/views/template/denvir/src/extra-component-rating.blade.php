{% set title = 'Rating' %}
{% set filename = 'extra-component-rating.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Rating</h3>
                <p class="text-subtitle text-muted">Rating with <a href=">rater-js</a>. Pure javascript rating library
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Rating</li>
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
                        <h4 class="card-title">Basic Rating</h4>
                    </div>
                    <div class="card-body">
                        <div id="basic"></div>
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
                        <h4 class="card-title">5 Star Rating with Step</h4>
                    </div>
                    <div class="card-body">
                        <div id="step"></div>
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
                        <h4 class="card-title">Unlimited Number of Stars</h4>
                    </div>
                    <div class="card-body">
                        <div id="unli1"></div>
                        <br>
                        <div id="unli2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}
{% block styles %}
<link rel="stylesheet" href="{{ asset('assets/vendors/rater-js/style.css') }}">
{% endblock %}
{% block js %}
<script src="assets/vendors/rater-js/rater-js.js"></script>
<script src="assets/js/extensions/rater-js.js"></script>
{% endblock %}