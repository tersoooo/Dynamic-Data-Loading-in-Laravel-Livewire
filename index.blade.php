<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-[#000]">

<nav class="text-white flex items-center mt-1">
    <div class="container px-10">
        <a href="#" class="text-4xl font-bold underline decoration-sky-500 underline-offset-2">terso</a>
    </div>
</nav>
<br>
<div class="text-white px-10 text-wrap">
    <div class="grid grid-cols-4 gap-4">
        <article class="text-wrap border border-[#333] p-4">
            <a href="#">
                <h3 class="text-2xl font-semibold">@username</h3>
            </a>
            <p class="text-sm">@email</p>
        </article>
        <article class="text-wrap border border-[#333] p-4">
            <a href="#">
                <h3 class="text-2xl font-semibold">@username</h3>
            </a>
            <p class="text-sm">@email</p>
        </article>
        <article class="text-wrap border border-[#333] p-4">
            <a href="#">
                <h3 class="text-2xl font-semibold">@username</h3>
            </a>
            <p class="text-sm">@email</p>
        </article>
        <article class="text-wrap border border-[#333] p-4">
            <a href="#">
                <h3 class="text-2xl font-semibold">@username</h3>
            </a>
            <p class="text-sm">@email</p>
        </article>
    </div>
    <div class="bg-[#222] flex justify-center mt-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
    </div>
</div>

@livewireScripts
</body>
</html>
