<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Personal Task Manager')</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }
        nav {
            background: #2563eb;
            color: white;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a { color: white; text-decoration: none; }
        .brand { font-size: 21px; font-weight: 700; }
        .container { width: 86%; max-width: 1100px; margin: 32px auto; }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 22px;
        }
        h1 { margin: 0 0 6px; }
        .muted { color: #6b7280; }
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 22px;
        }
        .stat, .card {
            background: white;
            border-radius: 14px;
            padding: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,.06);
        }
        .stat strong { display: block; font-size: 28px; margin-top: 6px; }
        .table-wrap { overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 15px; border-bottom: 1px solid #e5e7eb; text-align: left; vertical-align: top; }
        th { background: #f8fafc; }
        .badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
        }
        .pending { background: #fff7ed; color: #c2410c; }
        .completed { background: #ecfdf5; color: #047857; }
        .actions { display: flex; flex-wrap: wrap; gap: 7px; }
        .btn {
            display: inline-block;
            border: 0;
            border-radius: 8px;
            padding: 9px 13px;
            text-decoration: none;
            cursor: pointer;
            font-weight: 600;
            font-size: 14px;
        }
        .btn-primary { background: #2563eb; color: white; }
        .btn-secondary { background: #e5e7eb; color: #111827; }
        .btn-success { background: #059669; color: white; }
        .btn-danger { background: #dc2626; color: white; }
        .form-group { margin-bottom: 17px; }
        label { display: block; font-weight: 700; margin-bottom: 7px; }
        input, textarea, select {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            font: inherit;
        }
        textarea { min-height: 120px; resize: vertical; }
        .alert {
            padding: 12px 15px;
            background: #dcfce7;
            color: #166534;
            border-radius: 9px;
            margin-bottom: 18px;
        }
        .error {
            color: #b91c1c;
            font-size: 14px;
            margin-top: 5px;
        }
        footer { text-align: center; color: #6b7280; padding: 30px; }
        @media (max-width: 700px) {
            .stats { grid-template-columns: 1fr; }
            .topbar { align-items: flex-start; flex-direction: column; }
            nav { padding: 16px 5%; }
            .container { width: 92%; }
            th, td { padding: 11px; }
        }
    </style>
</head>
<body>
<nav>
    <a class="brand" href="{{ route('tasks.index') }}">✓ My Task Manager</a>
    <a href="{{ route('tasks.create') }}">+ Add Task</a>
</nav>

<main class="container">
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @yield('content')
</main>

<footer>Personal Task Manager • Laravel Mini Project</footer>
</body>
</html>
