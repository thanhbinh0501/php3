<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiêu đề trang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .container > header { height: 220px;}
        .container > nav { height: 60px;}
        .container > footer { height: 90px;}
        .container > main { display: flex; min-height: 500px;}
    </style>
</head>
<body>
    <div class="container">
        <header class="bg-primary"></header>
        <nav class="bg-warning">
            @include('menu')
        </nav>
        <main>
            <article class="col-9 bg-light">
                @yield('noidung')
            </article>
            <aside class="col-3 bg-info">
                @yield('tieudetrang')
            </aside>
        </main>
        <footer class="bg-dark text-white text-center py-3">PHÁT TRIỂN BỞI CU BÌNH</footer>
    </div>
</body>
</html>