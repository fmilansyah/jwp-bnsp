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

<body>
    <script src="/admin-assets/dist/js/demo-theme.min.js"></script>
    <div class="page">
        <x-admin.navigation />
        <div class="page-wrapper">
            {{ $slot }}
            <x-admin.footer />
        </div>
    </div>

    <script src="/admin-assets/dist/js/tabler.min.js" defer></script>
    <script src="/admin-assets/dist/js/demo.min.js" defer></script>

    <script src="/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script>
        $('.btn-to-inpatient').on('click', function () {
            $('input[name="registration_id"]').val($(this).data('id'));
        });
    </script>
</body>
</html>