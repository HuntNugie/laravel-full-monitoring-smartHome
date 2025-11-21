<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>6 Card Bootstrap ON/OFF</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h3 class="text-center mb-4">SMARTHOME</h3>

    <div class="row g-4">

        <!-- Card 1 -->
        @foreach ($smarthome as $s)
            <div class="col-12 col-sm-6 col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <label class="form-label fw-bold">{{ $s->objek }}</label>
                    <p class="text-muted text-status">{{ !$s->status ? "tidak menyala" : "sedang menyala" }}</p>
                    <button class="btn btn-{{ $s->status ? "success" : "secondary" }} tombol" data-id="{{ $s->id }}">{{ !$s->status ? "ON" : "OFF" }}</button>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>


<script src="{{ asset('/js/script.js') }}"></script>

</body>
</html>
