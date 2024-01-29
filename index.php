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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script>

        /*
        $(document).ready(function () {
            function wobbleAnimation($element) {
                const startTime = Date.now();
                const duration = 1100; // duration of each phase of the animation

                function animatePhase(phase) {
                    const currentTime = Date.now();
                    const timeElapsed = currentTime - startTime;
                    const phaseProgress = (timeElapsed % duration) / duration;
                    let transform;

                    switch (phase) {
                        case 0:
                            // First phase (0% - 33%)
                            const phase0Progress = phaseProgress;
                            const translateX0 = Math.round(60 * phase0Progress);
                            const translateY0 = Math.round(-30 * phase0Progress);
                            const scale0 = (1 + 0.1 * phase0Progress).toFixed(2);
                            const rotate0 = (6 * phase0Progress).toFixed(1);

                            transform = `translate3d(${translateX0}px, ${translateY0}px, 0) scale(${scale0}) skew(${rotate0}deg)`;
                            break;
                        case 1:
                            // Second phase (33% - 66%)
                            const phase1Progress = phaseProgress;
                            const translateX1 = Math.round(60 - (50 * phase1Progress));
                            const translateY1 = Math.round(-30 + (60 * phase1Progress));
                            const scale1 = (1.1 - (0.2 * phase1Progress)).toFixed(2);
                            const rotate1 = (6 - (9 * phase1Progress)).toFixed(1);

                            transform = `translate3d(${translateX1}px, ${translateY1}px, 0) scale(${scale1}) skew(${rotate1}deg)`;
                            break;
                        case 2:
                            // Third phase (66% - 100%)
                            const phase2Progress = phaseProgress;
                            const translateX2 = Math.round(10 - (10 * phase2Progress));
                            const translateY2 = Math.round(30 - (30 * phase2Progress));
                            const scale2 = (0.9 + (0.1 * phase2Progress)).toFixed(2);
                            const rotate2 = (-3 + (3 * phase2Progress)).toFixed(1);

                            transform = `translate3d(${translateX2}px, ${translateY2}px, 0) scale(${scale2}) skew(${rotate2}deg)`;
                            break;
                    }

                    $element.css('transform', transform);
                    if (timeElapsed < duration * 3) {
                        // Continue the animation
                        requestAnimationFrame(() => animatePhase(Math.floor(timeElapsed / duration) % 3));
                    } else {
                        // Reset and loop the animation
                        $element.css('transform', 'translate3d(0, 0, 0) scale(1) rotate(0deg)');
                        requestAnimationFrame(() => wobbleAnimation($element));
                    }
                }

                animatePhase(0);
            }

            // Start the wobble animation for each blob with random delay
            $('.blob').each(function () {
                const $blob = $(this);
                const randomDelay = Math.random() * 4000; // Random delay between 0 and 4000 milliseconds

                setTimeout(() => {
                    wobbleAnimation($blob);
                }, randomDelay);
            });
        });
*/
    </script>
</body>

</html>