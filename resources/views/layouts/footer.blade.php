<footer class="bg-black py-20 mt-20">
    <div class="sm:grid grid-cols-2 w-4/5 pb-10 m-auto border-b-2 border-gray-800">
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1">
                    <a href="/">
                        Home
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/blog">
                        Blog
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/login">
                        Login
                    </a>
                </li>
                <li class="pb-1">
                    <a href="/register">
                        Register
                    </a>
                </li>
                <li class="pb-1">
                    <a href="https://game.immature.live">
                        Game
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <h3 class="text-l sm:font-bold text-gray-100">
                Developers
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                @foreach ($developers as $developer)
                <li class="pb-1">
                    <a href="/">
                        {{ $developer->name }}
                    </a>
                </li>
                @endforeach
        </div>

<p class= "w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
    © Copyright 2021 Team 26. </p>
    </div>
