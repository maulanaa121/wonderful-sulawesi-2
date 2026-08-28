<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Landing Page</title>

{{-- Tailwind CSS v4 CDN --}}
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

{{-- Google Font - Poppins --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

{{-- Lucide Icons --}}
<script src="https://unpkg.com/lucide@latest"></script>

{{-- Custom Tailwind Theme --}}
<style type="text/tailwindcss">
    @theme {
        --font-poppins: "Poppins", sans-serif;
    }
</style>


</head>

<body>

    @include('partials.Navbar')

<div class="min-h-screen bg-gray-50">

    <div class="flex min-h-screen items-center justify-center">
        <div class="text-center">

            <i data-lucide="rocket" class="mx-auto mb-4 h-12 w-12 text-blue-600"></i>

            <h1 class="font-poppins text-4xl font-bold text-gray-900">
                Hello Laravel
            </h1>

            <p class="font-poppins mt-3 text-gray-600">
                Tailwind CSS + Poppins + Lucide Icons
            </p>

            <button
                class="font-poppins mt-6 inline-flex items-center gap-2 rounded-lg bg-blue-600 px-6 py-3 font-medium text-white transition hover:bg-blue-700">

                Mulai Sekarang

                <i data-lucide="arrow-right" class="h-5 w-5"></i>

            </button>

        </div>
    </div>

</div>

<script>
    lucide.createIcons();
</script>

</body>

</html>
