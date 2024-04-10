<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black mx-10 my-5 text-white flex items-center flex-col gap-20 text-xl">
        <h1 class="text-3xl font-bold text-gray-400">Create a blog:</h1>
        
        <form action="/blog" method="POST" class="flex flex-col gap-2 w-1/2">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="rounded bg-gray-300 text-slate-900 px-3 py-2 font-thin">
            
            <label for="content">Content:</label>
            <textarea name="content" id="content" class="rounded bg-gray-300 text-slate-900 px-3 py-2 font-thin min-h-48"></textarea>
            
            <label for="preview">Preview:</label>
            <input type="text" name="preview" class="rounded bg-gray-300 text-slate-900 px-3 py-2 font-thin" id="preview">

            <label for="preview_image">Preview image:</label>
            <input type="text" name="preview_image" class="rounded bg-gray-300 text-slate-900 px-3 py-2 font-thin" id="preview_image">
        </form>

    </body>
</html>
