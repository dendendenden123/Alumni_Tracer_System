{% set title = 'Todo List' %}
{% set filename = 'ui-widgets-todolist.blade.php' %}

{% extends 'layouts/master.blade.php' %}
{% block content %}
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Todo List</h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Todo List</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Task App Widget Starts -->
    <section class="tasks">
        <div class="row">
            <div class="col-lg-7">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tasks
                        </h4>
                        <ul class="list-inline d-flex mb-0">
                            <li class="d-flex align-items-center">
                                <i class="bx bx-check-circle font-medium-3 me-50"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle me-1" role="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="bx bx-sort me-50 font-medium-3"></i>
                                <div class="dropdown">
                                    <div class="dropdown-toggle" role="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Task
                                    </div>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <a class="dropdown-item" href="#">Option 1</a>
                                        <a class="dropdown-item" href="#">Option 2</a>
                                        <a class="dropdown-item" href="#">Option 3</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body px-0 py-1">
                        <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                            <label for="checkbox1"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Add SCSS and JS files if
                                            required</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill badge-light-success me-1">frontend</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/1.jpg" alt="" srcset=">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                            <label for="checkbox2"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Check all the changes that you did,
                                            before you commit</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill badge-light-danger me-1">backend</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/2.jpg" alt="" srcset=">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item completed">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox3" checked>
                                            <label for="checkbox3"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs & Pinterest
                                            Post</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill badge-light-primary me-1">UI/UX</div>
                                        <div class="avatar bg-rgba-primary m-0 me-50">
                                            <img src="assets/images/faces/3.jpg" alt="" srcset=">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox4">
                                            <label for="checkbox4"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Fresh Design Web & Responsive
                                            Miracle</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill badge-light-info me-1">Design</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/4.jpg" alt="" srcset=">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox5">
                                            <label for="checkbox5"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Add Calendar page and source and
                                            credit page in
                                            documentation</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill badge-light-warning me-1">Javascript</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/5.jpg" alt="" srcset=">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                            <li class="widget-todo-item">
                                <div
                                    class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                    <div class="widget-todo-title-area d-flex align-items-center">
                                        <i data-feather="list" class="cursor-move"></i>
                                        <div class="checkbox checkbox-shadow">
                                            <input type="checkbox" class="form-check-input" id="checkbox6">
                                            <label for="checkbox6"></label>
                                        </div>
                                        <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                                    </div>
                                    <div class="widget-todo-item-action d-flex align-items-center">
                                        <div class="badge badge-pill badge-light-primary me-1">UI/UX</div>
                                        <div class="avatar bg-warning">
                                            <img src="assets/images/faces/1.jpg" alt="" srcset=">
                                        </div>
                                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card widget-todo">
                    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                        <h4 class="card-title d-flex">
                            <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Progress
                        </h4>

                    </div>
                    <div class="card-body px-0 py-1">
                        <table class="table table-borderless">
                            <tr>
                                <td class="col-3">UI Design</td>
                                <td class="col-6">
                                    <div class="progress progress-info">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">60%</td>
                            </tr>
                            <tr>
                                <td class="col-3">VueJS</td>
                                <td class="col-6">
                                    <div class="progress progress-success">
                                        <div class="progress-bar" role="progressbar" style="width: 35%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">30%</td>
                            </tr>
                            <tr>
                                <td class="col-3">Laravel</td>
                                <td class="col-6">
                                    <div class="progress progress-danger">
                                        <div class="progress-bar" role="progressbar" style="width: 50%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">50%</td>
                            </tr>
                            <tr>
                                <td class="col-3">ReactJS</td>
                                <td class="col-6">
                                    <div class="progress progress-primary">
                                        <div class="progress-bar" role="progressbar" style="width: 80%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">80%</td>
                            </tr>
                            <tr>
                                <td class="col-3">Go</td>
                                <td class="col-6">
                                    <div class="progress progress-secondary">
                                        <div class="progress-bar" role="progressbar" style="width: 65%"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td class="col-3 text-center">65%</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
{% endblock %}
{% block styles %}
<link rel="stylesheet" href="{{ asset('assets/vendors/dragula/dragula.min.css') }}">
{% endblock %}
{% block js %}
<script src="assets/vendors/dragula/dragula.min.js"></script>
<script>
    dragula([document.getElementById("widget-todo-list")], { moves: function (e, a, t) { return t.classList.contains("cursor-move") } })
</script>
{% endblock %}