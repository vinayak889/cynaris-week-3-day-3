<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Management')</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 960px; margin: 40px auto; padding: 0 20px; }
        nav { display: flex; gap: 16px; margin-bottom: 24px; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        label { display: block; margin-top: 14px; }
        input { width: 100%; max-width: 420px; padding: 8px; box-sizing: border-box; }
        button, .button { display: inline-block; margin-top: 14px; padding: 8px 12px; cursor: pointer; }
        .success { padding: 10px; background: #e8f7e8; }
        .error { color: #b91c1c; }
        form.inline { display: inline; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('students.create') }}">Add Student</a>
    </nav>

    @if (session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div class="error">
            <p>Please correct the following errors:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <main>@yield('content')</main>
</body>
</html>
