{% set title = 'List Group' %}
{% set filename = 'component-list-group.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>List Group</h3>
                <p class="text-subtitle text-muted">List groups are a flexible and powerful component for displaying a
                    series of content</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Group</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- list groups simple & disabled start -->
    <section id="basic-list-group">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Simple List Group</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                The most basic list group is simply an unordered list with list
                                items, and the proper classes. Build upon it with the options that
                                follow, or your own CSS as needed.
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item active">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Morbi leo risus</li>
                                <li class="list-group-item">Porta ac consectetur ac</li>
                                <li class="list-group-item">chocolate cheesecake candy</li>
                                <li class="list-group-item">Oat cake icing pastry pie carrot</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Disabled items</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear
                                disabled.</p>
                            <div class="list-group">
                                <span class="list-group-item">
                                    Cras justo odio
                                </span>
                                <span class="list-group-item">Dapibus ac facilisis in</span>
                                <span class="list-group-item disabled">Morbi leo risus</span>
                                <span class="list-group-item">Porta ac consectetur ac</span>
                                <span class="list-group-item">Vestibulum at eros</span>
                                <span class="list-group-item">Biscuit jelly beans macaroon danish pudding</span>
                                <span class="list-group-item">Oat cake icing pastry pie carrot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list groups simple & disabled end -->
    <!-- list group button & badge start-->
    <section class="list-group-button-badge">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Button list Group</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="list-group">
                                <button type="button" class="list-group-item list-group-item-action active">Cras justo
                                    odio</button>
                                <button type="button" class="list-group-item list-group-item-action">Dapibus ac
                                    facilisis
                                    in</button>
                                <button type="button" class="list-group-item list-group-item-action">Morbi leo
                                    risus</button>
                                <button type="button" class="list-group-item list-group-item-action">Porta ac
                                    consectetur
                                    ac</button>
                                <button type="button" class="list-group-item list-group-item-action">Vestibulum at
                                    eros</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Badges</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Use Utility classes <code>.d-flex</code> <code>.justify-content-between</code>
                                <code>align-items-center</code> to create space between badge and your content
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> Biscuit jelly beans macaroon danish pudding.</span>
                                    <span class="badge bg-warning badge-pill badge-round ml-1">8</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> chocolate cheesecake candy</span>
                                    <span class="badge bg-info badge-pill badge-round ml-1">7</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span> Oat cake icing pastry pie carrot</span>
                                    <span class="badge bg-danger badge-pill badge-round ml-1">6</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span>space between badgeOat cake icing pastry pie carrot</span>
                                    <span class="badge bg-secondary badge-pill badge-round ml-1">5</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list group button & badge ends -->
    <!-- list group Checkboxes and radios start -->
    <section id="list-group-icons">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Checkboxes and radios</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Place checkboxes and radios within list group items and customize as needed
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                                <li class="list-group-item">
                                    <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                    Vestibulum at eros
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Custom content</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Add nearly any HTML within, even for linked list groups like the
                                one below.
                            </p>
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1 text-white">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                        diam eget risus varius blandit.
                                    </p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                        diam eget risus varius blandit.
                                    </p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small>3 days ago</small>
                                    </div>
                                    <p class="mb-1">
                                        Donec id elit non mi porta gravida at eget metus. Maecenas sed
                                        diam eget risus varius blandit.
                                    </p>
                                    <small>Donec id elit non mi porta.</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list group Checkboxes and radios end -->
    <!-- list group with contextual & horizontal start -->
    <section id="list-group-contextual">
        <div class="row match-height">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Contextual classes</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Use contextual classes to style list items, default or linked.
                                Also includes .active state.
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-primary">
                                    Cras justo odio
                                </li>
                                <li class="list-group-item list-group-item-success">
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item list-group-item-danger">
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item list-group-item-warning">
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item list-group-item-info">
                                    Vestibulum at eros
                                </li>
                                <li class="list-group-item list-group-item-light">
                                    chocolate cheesecake candy
                                </li>
                                <li class="list-group-item list-group-item-dark">
                                    Oat cake icing pastry pie carrot
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>
                                Add <code>.list-group-horizontal</code> to change the layout of list group items from
                                vertical to
                                horizontal across all breakpoints.choose a responsive variantcode <code>
                        .list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that
                                breakpoint’s min-width.
                            </p>
                            <div class="list-group list-group-horizontal-sm mb-1 text-center" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="list-sunday-list"
                                    data-bs-toggle="list" href="#list-sunday" role="tab">Option 1</a>
                                <a class="list-group-item list-group-item-action" id="list-monday-list"
                                    data-bs-toggle="list" href="#list-monday" role="tab">Option 2</a>
                                <a class="list-group-item list-group-item-action" id="list-tuesday-list"
                                    data-bs-toggle="list" href="#list-tuesday" role="tab">Option 3</a>
                            </div>
                            <div class="tab-content text-justify">
                                <div class="tab-pane fade show active" id="list-sunday" role="tabpanel"
                                    aria-labelledby="list-sunday-list">Irure enim occaecat labore sit qui aliquip
                                    reprehenderit amet
                                    velit. Deserunt ullamco ex elit nostrud ut dolore nisi officia magna sit occaecat
                                    laboris sunt dolor.
                                    Nisi eu minim cillum occaecat aute est cupidatat aliqua labore aute occaecat ea
                                    aliquip
                                    sunt amet.
                                    Aute mollit dolor ut exercitation irure commodo non amet consectetur quis amet
                                    culpa.
                                    Quis ullamco
                                    nisi amet qui aute irure eu. Magna labore dolor quis ex labore id nostrud deserunt
                                    dolor
                                    eiusmod eu
                                    pariatur culpa mollit in irure Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Iusto quis
                                    porro doloribus est natus doloremque, eos laudantium
                                    exercitationem impedit sapiente tenetur soluta reiciendis deserunt!</div>
                                <div class="tab-pane fade" id="list-monday" role="tabpanel"
                                    aria-labelledby="list-monday-list">Cupidatat
                                    quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do
                                    cillum ad laborum.
                                    Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex.
                                    Officia
                                    anim incididunt
                                    laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation.
                                    Dolor
                                    nisi culpa ex ad
                                    irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
                                    commodo veniam
                                    incididunt veniam ad. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Exercitationem, porro!
                                    Amet soluta tempora eveniet blanditiis alias eos, dolor qui consectetur!
                                </div>
                                <div class="tab-pane fade" id="list-tuesday" role="tabpanel"
                                    aria-labelledby="list-tuesday-list">Ut ut
                                    do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit
                                    aute
                                    ipsum voluptate.
                                    Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit
                                    consequat enim tempor.
                                    Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure.
                                    Ipsum id
                                    Lorem sit
                                    sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
                                    Consectetur et
                                    fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum. Lorem
                                    ipsum dolor sit
                                    amet consectetur adipisicing elit. Molestias, inventore!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- list group with contextual & horizontal ends -->
    <!-- List group navigation start -->
    <section class="list-group-navigation">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List group navigation</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4">
                                    <div class="list-group" role="tablist">
                                        <a class="list-group-item list-group-item-action active" id="list-home-list"
                                            data-bs-toggle="list" href="#list-home" role="tab">Home</a>
                                        <a class="list-group-item list-group-item-action" id="list-profile-list"
                                            data-bs-toggle="list" href="#list-profile" role="tab">Profile</a>
                                        <a class="list-group-item list-group-item-action" id="list-messages-list"
                                            data-bs-toggle="list" href="#list-messages" role="tab">Messages</a>
                                        <a class="list-group-item list-group-item-action" id="list-settings-list"
                                            data-bs-toggle="list" href="#list-settings" role="tab">Settings</a>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 mt-1">
                                    <div class="tab-content text-justify" id="nav-tabContent">
                                        <div class="tab-pane show active" id="list-home" role="tabpanel"
                                            aria-labelledby="list-home-list">
                                            Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing
                                            exercitation fugiat
                                            tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut.
                                            Mollit
                                            voluptate
                                            reprehenderit
                                            occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id
                                            ut
                                            nulla. Ea et fugiat
                                            aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor.
                                            Anim ad
                                            Lorem aliqua in
                                            cupidatat nisi enim eu nostrud do aliquip veniam minim. Lorem ipsum dolor
                                            sit
                                            amet consectetur,
                                            adipisicing elit. Aliquam itaque nisi obcaecati doloremque et est ex
                                            possimus
                                            quidem dolorem soluta.
                                        </div>
                                        <div class="tab-pane" id="list-profile" role="tabpanel"
                                            aria-labelledby="list-profile-list">
                                            Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur
                                            consectetur
                                            ex nisi eu do cillum
                                            ad
                                            laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex
                                            amet
                                            id ex. Officia anim
                                            incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do
                                            exercitation. Dolor
                                            nisi
                                            culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure
                                            non
                                            commodo enim culpa
                                            commodo veniam incididunt veniam ad.</div>
                                        <div class="tab-pane" id="list-messages" role="tabpanel"
                                            aria-labelledby="list-messages-list">Ut ut
                                            do pariatur aliquip aliqua aliquip exercitation do nostrud commodo
                                            reprehenderit
                                            aute ipsum
                                            voluptate.
                                            Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit
                                            mollit
                                            consequat enim
                                            tempor.
                                            Consectetur est minim nostrud nostrud consectetur irure labore voluptate
                                            irure.
                                            Ipsum id Lorem sit
                                            sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod
                                            deserunt. Consectetur et
                                            fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur
                                            cillum.
                                        </div>
                                        <div class="tab-pane" id="list-settings" role="tabpanel"
                                            aria-labelledby="list-settings-list">Irure
                                            enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt
                                            ullamco
                                            ex elit nostrud ut
                                            dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim
                                            cillum
                                            occaecat aute est
                                            cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit
                                            dolor ut
                                            exercitation irure
                                            commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui
                                            aute
                                            irure eu. Magna labore
                                            dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa
                                            mollit
                                            in irure</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- List group navigation ends -->
</div>
{% endblock %}