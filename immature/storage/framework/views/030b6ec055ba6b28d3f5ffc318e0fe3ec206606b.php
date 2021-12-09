<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <!-- META INFO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Team 26 presents Immature an online turn-based multiplayer card game" />
    <meta name="keywords" content="" />
    <meta name="author" content="Team 26/Dylan" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
</head>
<!-- NAVIGATION MENU -->
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header>
            <div class="py-4 px-2 lg:mx-4 xl:mx-12 ">
                <div class="">
                    <nav class="flex items-center justify-between flex-wrap  ">
                        <div class="flex items-center flex-no-shrink text-white mr-6 ">
                            <a href="/"><img src="<?php echo e(url('/images')); ?>/logo-2.png" alt=""
                                    class="h-12 xl:h-20  mr-2  "></a>
                        </div>
                        <div class="block lg:hidden">
                            <button
                                class="navbar-burger flex items-center px-3 py-2 border rounded text-white border-white hover:text-white hover:border-white">
                                <svg class="fill-current h-6 w-6 text-gray-700" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Menu</title>
                                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                                </svg>
                            </button>
                        </div>
                        <div id="main-nav" class="w-full flex-grow lg:flex items-center lg:w-auto hidden  ">
                            <div class="text-sm lg:flex-grow mt-2 animated jackinthebox xl:mx-8">
                                <a href="/"
                                    class="block lg:inline-block text-md font-bold  text-orange-500  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    HOME
                                </a>
                                <a href="/blog"
                                    class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                    BLOG
                                </a>
                                <?php if(auth()->guard()->guest()): ?>
                                    <a href="<?php echo e(route('login')); ?>"
                                        class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                        LOGIN
                                    </a>
                                    <?php if(Route::has('register')): ?>
                                        <a href="<?php echo e(route('register')); ?>"
                                            class="block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                            REGISTER
                                        </a>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <a href="/<?php echo e(Auth::user()->username); ?>"
                                        class="uppercase block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg">
                                        <?php echo e(Auth::user()->name); ?>

                                    </a>
                                    <a href="<?php echo e(route('logout')); ?>"
                                        class="uppercase block lg:inline-block text-md font-bold  text-gray-900  sm:hover:border-indigo-400  hover:text-orange-500 mx-2 focus:text-blue-500  p-1 hover:bg-gray-300 sm:hover:bg-transparent rounded-lg"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?>

                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>"
                                        method="POST" class="hidden">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
                    </nav>

                </div>
            </div>
        </div>
        </header>



<!-- SCREEN SIZE SCRIPT -->

        <script>
            // Navbar Toggle
            document.addEventListener('DOMContentLoaded', function () {

                // Get all "navbar-burger" elements
                var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                // Check if there are any navbar burgers
                if ($navbarBurgers.length > 0) {

                    // Add a click event on each of them
                    $navbarBurgers.forEach(function ($el) {
                        $el.addEventListener('click', function () {

                            // Get the "main-nav" element
                            var $target = document.getElementById('main-nav');

                            // Toggle the class on "main-nav"
                            $target.classList.toggle('hidden');

                        });
                    });
                }

            });

        </script>
        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div>
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
</body>

</html>
<?php /**PATH C:\University\Aston - CompSci\YEAR 2\TP\Submission 3\Website\GitHub\immature-web\immature\resources\views/layouts/app.blade.php ENDPATH**/ ?>