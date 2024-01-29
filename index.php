<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylesheets/css/app.css">
    <title>cooldown</title>
</head>

<body x-data="{ focusBlobs: false }" x-on:click="focusBlobs = !focusBlobs">
    <div class="pulse"></div>

    <header>
        <div class="brand" x-bind:class="{ 'soften': focusBlobs }">
            <h1>
                cooldown
            </h1>
            <p>
                just a pretty visualizer.<br>
                click anywhere to hide/show this text.
            </p>
        </div>
    </header>

    <div class="blobs">
        <div x-bind:class="{ 'highlight': focusBlobs }" class="blob blob-1"></div>
        <div x-bind:class="{ 'highlight': focusBlobs }" class="blob blob-2"></div>
        <div x-bind:class="{ 'highlight': focusBlobs }" class="blob blob-3"></div>
        <div x-bind:class="{ 'highlight': focusBlobs }" class="blob blob-4"></div>
        <div x-bind:class="{ 'highlight': focusBlobs }" class="blob blob-5"></div>
        <div x-bind:class="{ 'highlight': focusBlobs }" class="blob blob-6"></div>
    </div>

    <footer>
        <img src="assets/images/wide-trees.png" alt="tree silouette" />
    </footer>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>

</html>