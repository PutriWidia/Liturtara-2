<!-- register_user -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Liturtara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        h1 {
            color: #333333;
        }
        p {
            color: #555555;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang di Liturtara, {{ $user->name }}!</h1>
        <p>Terima kasih telah mendaftar bersama kami. Kami sangat senang menyambut Anda.</p>
        <p>Untuk memulai, silakan klik tautan di bawah ini untuk mengaktifkan akun Anda:</p>
        <!-- Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'VerifyEmail'])
->middleware(['signed'])->name('verification.verify'); -->
<!-- event(new Registered($user)); -->
        <p><a href="{{  }}">Aktifkan Akun Saya</a></p>
        <div class="footer">
            &copy; {{ date('Y') }} Liturtara. All rights reserved.
        </div>
    </div>
</body>
</html>