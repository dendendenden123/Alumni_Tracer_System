{% set title = 'Radio' %}
{% set filename = 'form-element-radio.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Radio</h3>
                <p class="text-subtitle text-muted">Choose one from the list with checkbox</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Radio</li>
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
                        <h4 class="card-title">Default Radio</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Default checked radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioDisabled"
                                disabled>
                            <label class="form-check-label" for="flexRadioDisabled">
                                Disabled radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                id="flexRadioCheckedDisabled" checked disabled>
                            <label class="form-check-label" for="flexRadioCheckedDisabled">
                                Disabled checked radio
                            </label>
                        </div>
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
                        <h4 class="card-title">Colors</h4>
                    </div>
                    <div class="card-body">
                        <p>Use class <code>.form-check-{color}</code> with <code>.form-check</code> to change radio
                            color</p>
                        <div class="form-check form-check-primary">
                            <input class="form-check-input" type="radio" name="Primary" id="Primary" checked>
                            <label class="form-check-label" for="Primary">
                                Primary
                            </label>
                        </div>
                        <div class="form-check form-check-secondary">
                            <input class="form-check-input" type="radio" name="Secondary" id="Secondary" checked>
                            <label class="form-check-label" for="Secondary">
                                Secondary
                            </label>
                        </div>
                        <div class="form-check form-check-warning">
                            <input class="form-check-input" type="radio" name="Warning" id="Warning" checked>
                            <label class="form-check-label" for="Warning">
                                Warning
                            </label>
                        </div>
                        <div class="form-check form-check-danger">
                            <input class="form-check-input" type="radio" name="Danger" id="Danger" checked>
                            <label class="form-check-label" for="Danger">
                                Danger
                            </label>
                        </div>
                        <div class="form-check form-check-success">
                            <input class="form-check-input" type="radio" name="Success" id="Success" checked>
                            <label class="form-check-label" for="Success">
                                Success
                            </label>
                        </div>
                        <div class="form-check form-check-dark">
                            <input class="form-check-input" type="radio" name="Dark" id="Dark" checked>
                            <label class="form-check-label" for="Dark">
                                Dark
                            </label>
                        </div>
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
                        <h4 class="card-title">Switches</h4>
                    </div>
                    <div class="card-body">
                        <p>A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to
                            render a toggle switch. Switches also support the disabled attribute.</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                            <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                input</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked
                                disabled>
                            <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch
                                checkbox input</label>
                        </div>
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
                        <h4 class="card-title">With Buttons</h4>
                    </div>
                    <div class="card-body">
                        <p>A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to
                            render a toggle switch. Switches also support the disabled attribute.</p>
                        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                            autocomplete="off" checked>
                        <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>

                        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                            autocomplete="off">
                        <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}