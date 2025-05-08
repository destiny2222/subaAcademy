<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registeration </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <div class="success-header">
        <h1>Registration</h1>
    </div>
    <div class="success-content text-center pt-5">
        <div class="pb-5">
            <img src="/assets/image/failed.png"  alt="Success Icon" width="200" class=" success-icon">
        </div>
        <h2 class="succ-title text-danger" >Failed!</h2>
        <p class="fail-p">
            We're sorry, but there was an issue with your registration. Please double-check your information and try again. If the problem persists, reach out to us at support@subacapital.co
        </p>
        <div class="mt-5 py-3">
            <a href="{{ route('enrollment') }}" class="btn btn-primary done">Review payment</a>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</html>