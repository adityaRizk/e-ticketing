<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Dashboard</title>
    {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
</head>
<body>
    <div class="z-n1">

        <img src="/storage/images/pesawat.jpg" class=" absolute -z-10 " width="1500px" alt="">
    </div>
    @extends('components.navbar')
    @section('content')

        <div class="mx-auto max-w-6xl px-2">
            <div class="">
                <p>Selamat Datang Di Website Pemesanan Tiket Online</p>
                <p>Deksprisi Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores excepturi quos et numquam, temporibus molestiae impedit deleniti vel blanditiis, eaque, voluptatum perspiciatis iste rerum dolorum voluptate quisquam voluptatem! Fugiat iure fuga recusandae minus error, voluptate cum accusamus? Harum non autem tempora. Distinctio harum aliquid minima, accusantium neque odio! Iusto, nihil!</p>
                <a href="/login">Sign In</a>
                <a href="/register">Sign Up</a>
            </div>
        </div>

    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
