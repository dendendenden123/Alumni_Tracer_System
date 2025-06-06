{% set title = 'Avatar' %}
{% set filename = 'extra-component-avatar.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Avatar</h3>
                <p class="text-subtitle text-muted">A Component</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Avatar</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Default Avatar</h4>
            </div>
            <div class="card-body">
                <p>Wrap your content with <code>.avatar</code> class and wrap your text in <code>.avatar</code>-content
                    to create a avatar.You have to use inline
                    attributes to set height width of image in default avatar.</p>
                <div class="avatar bg-primary me-3">
                    <span class="avatar-content"><i class="bi bi-envelope"></i></span>
                </div>
                <div class="avatar bg-warning me-3">
                    <span class="avatar-content">AS</span>
                </div>
                <div class="avatar bg-warning me-3">
                    <img src="assets/images/faces/1.jpg" alt="" srcset=">
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Avatar Sizes</h4>
            </div>
            <div class="card-body">
                <p>use class <code>.avatar-{sm|lg|xl}</code> with <code>.avatar</code> to modify size of your avatar.
                </p>
                <div class="avatar avatar-sm bg-primary me-3">
                    <span class="avatar-content"><i class="bi bi-envelope"></i></span>
                </div>
                <div class="avatar bg-warning me-3">
                    <span class="avatar-content">AS</span>
                </div>
                <div class="avatar me-3">
                    <img src="assets/images/faces/1.jpg" alt="" srcset=">
                </div>
                <div class="avatar avatar-lg me-3">
                    <img src="assets/images/faces/2.jpg" alt="" srcset=">
                </div>
                <div class="avatar avatar-xl me-3">
                    <img src="assets/images/faces/3.jpg" alt="" srcset=">
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Avatar Status</h4>
            </div>
            <div class="card-body">
                <p>use class <code>.avatar-status</code> and <code>.bg-{color}</code> after <code>.avatar-content</code>
                </p>

                <div class="avatar bg-warning me-3">
                    <span class="avatar-content">AS</span>
                    <span class="avatar-status bg-success"></span>
                </div>
                <div class="avatar bg-warning me-3">
                    <img src="assets/images/faces/1.jpg" alt="" srcset=">
                    <span class="avatar-status bg-danger"></span>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}