{% set title = 'Checkout Page' %}
{% set filename = 'application-checkout.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Checkout Page</h3>
                <p class="text-subtitle text-muted">A page for user to checkout</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout Page</li>
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
                        <h5 class="card-title">Coming Soon!</h5>
                    </div>
                    <div class="card-body">
                        If you want to contribute. Check out this <a href="https://github.com/zuramai/denvir"
                            target="_blank">template repository</a>.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}