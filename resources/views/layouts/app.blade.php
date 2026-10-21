
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard Akademik')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
        }

        .navbar {
            background: #1e3a8a;
            color: white;
            padding: 18px 25px;
        }

        .container {
            display: flex;
            min-height: 85vh;
        }

        .sidebar {
            width: 200px;
            background: white;
            padding: 20px;
        }

        .sidebar a {
            display: block;
            padding: 12px;
            margin-bottom: 8px;
            color: #1e3a8a;
            text-decoration: none;
            border-radius: 6px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #dbeafe;
        }

        .content {
            flex: 1;
            padding: 25px;
        }

        .footer {
            padding: 15px;
            text-align: center;
            color: #666;
        }
        
/* Komponen Blade */
.card {
    background: white;
    padding: 20px;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

.alert {
    padding: 14px 18px;
    border-radius: 8px;
    margin-bottom: 16px;
}

.alert-info {
    background: #dbeafe;
    color: #1e40af;
}

.alert-success {
    background: #dcfce7;
    color: #166534;
}

.alert-warning {
    background: #fef3c7;
    color: #92400e;
}

.alert-danger {
    background: #fee2e2;
    color: #991b1b;
}

.badge {
    display: inline-block;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
}

.badge-success {
    background: #dcfce7;
    color: #166534;
}

.badge-warning {
    background: #fef3c7;
    color: #92400e;
}

.badge-danger {
    background: #fee2e2;
    color: #991b1b;
}

.badge-secondary {
    background: #e5e7eb;
    color: #374151;
}

.btn {
    display: inline-block;
    padding: 10px 15px;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    text-decoration: none;
}

.btn-primary {
    background: #1d4ed8;
    color: white;
}

.btn-secondary {
    background: #e5e7eb;
    color: #1f2937;
}

    </style>
    
</head>
<body>

    @include('partials.navbar')

    <div class="container">
        @include('partials.sidebar')

        <main class="content">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
        Dashboard Akademik Laravel 12
    </footer>

</body>
</html>
