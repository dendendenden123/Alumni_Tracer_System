<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Vertical 1 Column - denvir</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container d-block">
            <a href="index"><i class="bi bi-chevron-left"></i></a>
            <a class="navbar-brand ms-4" href="index">
                <img src="assets/images/logo/logo.png">
            </a>
        </div>
    </nav>
    {% block content %}{% endblock %}
</body>

</html>