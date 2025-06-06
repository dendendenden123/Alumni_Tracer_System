{% set title = 'ChartJS' %}
{% set filename = 'ui-chart-chartjs.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>ChartJS</h3>
                <p class="text-subtitle text-muted">A chart for user </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ChartJS</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bar Chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="bar"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Line Chart</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="line"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}

{% block styles %}
<link rel="stylesheet" href="{{ asset('assets/vendors/chartjs/Chart.min.css') }}">
{% endblock %}
{% block js %}
<script src="assets/vendors/chartjs/Chart.min.js"></script>
<script src="assets/js/pages/ui-chartjs.js"></script>
{% endblock %}