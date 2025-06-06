{% set title = 'Textarea' %}
{% set filename = 'form-element-select.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Textarea</h3>
                <p class="text-subtitle text-muted">Big input where you can input a lot of text</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Textarea</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Default Textarea
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Floating Labels
                    </div>
                    <div class="card-body">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Textarea with Title
                    </div>
                    <div class="card-body">
                        <div class="form-group with-title mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <label>Your experience</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}