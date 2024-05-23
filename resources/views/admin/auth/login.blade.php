<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name') }}</title>

    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <link href="/admin-assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="/admin-assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="/admin-assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="/admin-assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="/admin-assets/dist/css/demo.min.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column">
    <script src="/admin-assets/dist/js/demo-theme.min.js"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="/" class="navbar-brand navbar-brand-autodark">
                    <img src="/logo.png" height="75" alt="Logo">
                </a>
            </div>
            <div class="card card-md">
                <div class="card-body">
                    <h2 class="h2 text-center mb-4">Masuk Ke Sistem Admin</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Ketik di sini ..." autocomplete="email" required />
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">
                                Kata Sandi
                            </label>
                            <div class="input-group input-group-flat">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Ketik di sini ..." autocomplete="off" required />
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/admin-assets/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="/admin-assets/dist/js/demo.min.js?1684106062" defer></script>
</body>
</html>