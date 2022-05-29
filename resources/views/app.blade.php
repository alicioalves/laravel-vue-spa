<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <title>Laracasts Assets</title>

</head>

<body class="font-open-Sans">
    <div id="app">


        <div class="container mx-auto pb-10">

            <header class="mb-8" style="background: url('/images/splash.svg') 5px 8px no-repeat; padding: 30px">
                <h1 class="text-3xl font-bold">
                    <img alt="Laracasts" src="/images/logo.svg">
                </h1>
            </header>

            <main class="flex">
                <aside class="w-64 pt-8">
                    <section class="mb-8">
                        <h5 class="uppercase font-bold mb-3 text-base">The Brand</h5>
                        <ul class="list-reset">
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/" exact>Logo</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/colors">Colors</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/typography">Typography</router-link>
                            </li>
                        </ul>
                    </section>

                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-3 text-base">Doodles</h5>
                        <ul class="list-reset">
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="mascot">Mascot</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/illustrations">Illustrations</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/loaders-and-animations">Loaders and Animations
                                </router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/wallpapers">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>

                    <section class="mb-6">
                        <h5 class="uppercase font-bold mb-3 text-base">Stats</h5>
                        <ul class="list-reset">
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/site-stats">Site Stats</router-link>
                            </li>
                        </ul>
                    </section>

                    <section class="mb-6">
                        <h5 class="uppercase font-bold mb-3 text-base">About Laracasts</h5>
                        <ul class="list-reset">
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/site-stats">The Team</router-link>
                            </li>
                            <li class="text-sm leading-10">
                                <router-link class="text-black" to="/achievements">Your Achievements</router-link>
                            </li>
                        </ul>
                    </section>
                </aside>

                <div class="primary flex-1">
                    <router-view></router-view>
                </div>
            </main>

        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>