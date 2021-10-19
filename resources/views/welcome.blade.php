<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A financial template which can be used to promote business brand and increase sales."/>
        <meta name="theme-color" content="#BFDBFE"/>
        <title>Financial Advisor </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script  src="{{ asset('js/app.js') }}" ></script>
        <script src="https://use.fontawesome.com/af1d23cda8.js"></script>
    </head>
    <body class="
        antialiased 
        relative" 
        x-data="{navbarOpen: false, scrollFromTop: false}" 
        x-init="window.pageYOffset > 422 ? scrollFromTop = true : scrollFromTop = false" 
        @scroll.window="window.pageYOffset > 422 ? scrollFromTop = true : scrollFromTop = false"
        :class="{
            'overflow-hidden': navbarOpen,
            'overflow-auto': !navbarOpen
        }"    
    >
        <div class="flex justify-center items-center bg-white fixed inset-0" id="loader">
            <div class="bg-white p-5 my-6 rounded-full flex shadow-lg space-x-3 loader">
                <div class="w-5 h-5 bg-blue-200 rounded-full animate-bounce"></div>
                <div class="w-5 h-5 bg-blue-200 rounded-full animate-bounce"></div>
                <div class="w-5 h-5 bg-blue-200 rounded-full animate-bounce"></div>
            </div>
        </div>
        <div class="hidden" id="body">        
            <div class="bg-cover bg-no-repeat bg-hero-pattern relative">
                <div class="z-30 inset-0 absolute bg-black opacity-60"></div>
                <header x-data="{ show: false }" class="inset-x-0 z-50 transition-all duration-300" :class="{'bg-transparent absolute': !scrollFromTop, 'bg-white shadow-lg fixed top-0': scrollFromTop}">
                    <div class="flex justify-between items-center w-11/12 mx-auto py-8 text-white" :class="{'text-white': !scrollFromTop, 'text-gray-800': scrollFromTop}">
                        <div>
                            <h1 class="text-3xl font-semibold">
                                <a href="/">
                                    Financial Help
                                </a>
                            </h1>
                        </div>
                        <nav class="md:block hidden">
                            <ul class="flex items-center">
                                <li>
                                    <a href="#" class="pr-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pr-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pr-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pr-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Resources
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pr-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <button class="md:hidden fixed text-2xl right-8 top-8 z-50" @click="navbarOpen = !navbarOpen" aria-label="open menubar">
                            <i class="fa " :class="navbarOpen ? 'fa-times' : 'fa-bars'"></i>
                        </button>
                        <div class="hidden w-full h-full z-40 inset-0 fixed bg-black opacity-60" :class="{'hidden': !navbarOpen, 'block': navbarOpen}"></div>
                        <div class="hidden" :class="{'hidden': !navbarOpen, 'block': navbarOpen}">
                            <ul class="bg-white inset-x-8 z-50 fixed text-blue-400 pb-20 rounded-md top-28">
                                <li>
                                    <a href="#" class="block pt-6 pl-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block pt-6 pl-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block pt-6 pl-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Our Services
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block pt-6 pl-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Resources
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block pt-6 pl-5 font-semibold text-lg tracking-wide hover:text-blue-500 transition ease-in duration-500">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
                <section class="bg-opacity-80 pt-16">
                    <div class="z-40 relative">
                        <div class="md:w-4/5 w-11/12 mx-auto text-center py-24 text-gray-200">
                            <h1 class="md:text-7xl leading-10 text-4xl font-bold">
                                Find your road to financial freedom
                            </h1>
                            <p class="md:text-3xl text-2xl font-semibold pt-4 md:pt-8 pb-12">
                                It's time to make your money work for you.
                            </p>
                            <a href="#" class="bg-blue-300 px-5 py-4 rounded-3xl font-semibold text-lg text-black tracking-wide hover:bg-blue-500 hover:text-white transition ease-in duration-300">
                                Learn more
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <main>
                <section class="py-12">
                    <div>
                        <h1 class="text-center text-4xl font-medium">
                            About Us
                        </h1>
                        <div class="grid md:grid-cols-4 w-11/12 mx-auto justify-items-center py-8">
                            <a href="#" class="text-gray-800 pb-10">
                                <div class="w-32 h-32 rounded-full bg-blue-500 border-8 border-white z-30 relative flex items-center pl-6 mx-auto">
                                    <svg version="1.0" class="fill-current text-white w-3/4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"stroke="none"> <path d="M2476 4178 c-96 -9 -210 -46 -296 -96 -80 -46 -213 -178 -259 -256 -135 -228 -136 -531 -4 -755 48 -80 141 -182 206 -226 33 -23 46 -36 36 -39 -82 -29 -154 -58 -199 -81 -67 -34 -212 -128 -230 -150 -7 -8 -16 -15 -21 -15 -4 0 -43 25 -85 55 -67 48 -177 108 -237 129 -16 5 -8 18 55 84 148 158 199 346 148 546 -125 488 -768 600 -1047 183 -70 -104 -98 -196 -97 -322 0 -171 60 -312 180 -425 l62 -57 -57 -23 c-123 -50 -213 -112 -326 -225 -195 -195 -288 -403 -302 -677 l-6 -118 621 0 621 0 -5 -132 c-7 -156 8 -247 58 -348 43 -88 153 -197 239 -237 125 -60 98 -58 1034 -58 l860 0 71 22 c132 42 263 153 325 274 49 98 62 174 57 337 l-5 142 625 0 625 0 -6 113 c-11 212 -67 377 -189 554 -98 142 -281 291 -429 349 l-66 26 72 72 c115 117 169 249 169 416 -1 247 -159 464 -399 546 -100 35 -244 39 -340 10 -201 -60 -363 -229 -410 -428 -46 -194 9 -389 153 -539 l72 -77 -55 -22 c-68 -28 -175 -91 -233 -137 -23 -19 -48 -33 -55 -30 -7 3 -47 29 -88 59 -88 63 -229 138 -309 163 -30 10 -59 20 -63 22 -5 3 14 20 41 38 64 44 158 147 205 226 131 222 131 522 -1 749 -48 83 -179 214 -262 262 -132 77 -292 111 -454 96z m217 -174 c206 -53 374 -222 422 -425 66 -284 -91 -573 -370 -679 -82 -31 -235 -39 -325 -16 -112 28 -188 72 -270 155 -122 124 -172 242 -171 404 0 169 49 285 171 408 80 81 165 131 263 155 73 17 208 17 280 -2z m-1553 -366 c243 -73 370 -347 266 -573 -79 -174 -262 -275 -445 -246 -229 37 -390 255 -353 477 42 253 291 414 532 342z m3070 0 c242 -73 370 -347 266 -573 -80 -175 -262 -275 -445 -246 -185 30 -322 168 -353 354 -26 160 50 326 192 417 97 62 229 81 340 48z m-1447 -953 c110 -21 216 -58 327 -116 288 -148 500 -413 585 -730 27 -101 50 -318 40 -383 -23 -161 -94 -264 -225 -325 l-55 -26 -880 0 -880 0 -63 29 c-80 37 -161 122 -193 203 -21 52 -23 73 -22 203 0 94 7 173 18 225 100 476 453 825 930 921 88 17 325 17 418 -1z m-1518 -65 c91 -25 192 -73 277 -132 32 -23 58 -42 58 -44 0 -2 -22 -29 -48 -61 -103 -124 -177 -257 -232 -418 l-28 -80 -552 -3 -553 -2 6 50 c3 28 19 89 36 136 98 286 340 499 641 565 110 25 280 20 395 -11z m3079 -5 c242 -71 432 -228 544 -450 34 -69 66 -168 76 -237 l7 -48 -558 0 -559 0 -13 48 c-31 121 -135 316 -237 443 l-53 67 22 20 c80 74 249 151 384 177 114 21 274 13 387 -20z"/> </g> </svg>
                                </div>
                                <div class="pt-16 pb-4 bg-gray-100 px-7 -mt-14">
                                    <p class="text-2xl font-semibold">
                                        1. Our Team
                                    </p>
                                </div>
                            </a>
                            <a href="#" class="pb-10">
                                <div>
                                    <div class="w-32 h-32 rounded-full bg-blue-500 border-8 border-white z-30 relative flex items-center pl-6 justify-items-center mx-auto">
                                        <svg version="1.0" class="fill-current text-white hover:text-gray-600 w-3/4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"> <path d="M2584 5101 c-109 -18 -134 -59 -134 -219 l0 -109 -57 -22 -56 -22 -87 86 c-86 84 -88 85 -137 85 -61 0 -94 -22 -201 -133 -130 -135 -131 -177 -7 -306 l82 -86 -21 -52 -21 -53 -105 0 c-157 -1 -206 -28 -219 -125 l-6 -40 -560 -5 c-308 -3 -562 -7 -565 -8 -24 -12 -466 -465 -476 -489 -12 -27 -14 -217 -14 -1148 0 -1075 1 -1117 19 -1153 23 -46 46 -67 94 -87 31 -13 116 -15 602 -15 l565 0 0 -54 c0 -47 4 -57 26 -75 62 -49 124 0 124 95 l0 34 101 0 c96 0 101 -1 107 -22 3 -13 24 -59 46 -103 57 -114 170 -226 286 -282 198 -97 398 -96 598 2 288 143 430 486 327 792 -74 221 -259 389 -480 438 l-75 17 0 187 c0 169 -2 190 -18 204 -27 24 -85 22 -108 -4 -17 -19 -19 -41 -22 -204 l-3 -184 -55 -11 c-126 -26 -225 -80 -327 -179 -118 -113 -183 -251 -195 -411 l-7 -85 -725 0 -725 0 -3 1095 -2 1095 202 202 203 203 527 0 527 0 6 -37 c9 -60 37 -106 75 -125 27 -14 60 -18 145 -18 l110 0 20 -53 21 -52 -77 -81 c-131 -139 -128 -183 22 -333 108 -109 157 -133 219 -108 l39 15 3 -228 c3 -208 5 -230 22 -249 13 -14 31 -21 57 -21 68 0 69 4 69 342 0 174 4 298 9 298 5 0 30 -9 55 -20 l46 -19 0 -108 c0 -125 14 -165 70 -198 31 -18 52 -20 180 -20 127 0 149 2 179 20 57 34 71 73 71 200 l0 110 53 20 52 21 86 -82 c130 -123 179 -121 313 12 104 104 126 137 126 197 0 49 -1 51 -85 136 l-85 87 23 57 22 57 108 0 c159 0 205 27 217 129 l5 46 63 5 c72 6 92 22 92 76 0 47 -38 74 -105 74 l-52 0 -6 46 c-10 91 -68 124 -220 124 l-104 0 -21 53 -20 52 73 75 c86 88 95 104 95 163 0 51 -33 100 -131 193 -88 83 -107 94 -158 94 -55 0 -73 -11 -166 -100 l-70 -68 -52 20 -53 21 0 106 c0 129 -18 178 -73 204 -41 20 -214 30 -293 18z m185 -147 l31 -6 0 -113 c0 -145 11 -165 125 -214 148 -63 187 -56 300 58 33 34 64 61 71 61 6 0 39 -29 74 -66 l63 -65 -88 -89 -87 -89 4 -53 c7 -78 65 -207 107 -235 30 -21 46 -23 146 -23 130 0 125 4 125 -107 0 -96 3 -93 -117 -93 -113 0 -160 -14 -185 -53 -30 -47 -78 -179 -78 -212 0 -50 12 -69 96 -155 l74 -75 -70 -70 -70 -70 -83 83 c-106 105 -127 111 -249 61 -100 -40 -125 -55 -141 -83 -7 -12 -14 -75 -17 -141 l-5 -120 -97 -3 -98 -3 0 113 c0 157 -8 170 -131 225 -61 27 -110 42 -138 42 -42 1 -47 -3 -133 -86 l-88 -87 -70 69 -70 69 69 71 c37 38 76 81 85 95 24 36 20 89 -15 171 -63 152 -62 152 -224 159 l-120 5 0 95 0 95 122 5 c102 4 126 8 149 26 37 27 103 183 104 243 0 42 -4 48 -87 133 l-87 88 69 70 69 70 81 -80 c45 -43 93 -82 108 -85 43 -11 96 0 182 36 114 49 125 68 125 215 0 99 2 113 18 117 27 7 116 8 151 1z m-374 -3078 c237 -63 399 -287 381 -526 -23 -318 -318 -537 -624 -465 -235 56 -392 253 -392 494 0 228 134 415 350 488 76 26 206 31 285 9z"/> <path d="M2595 4538 c-140 -26 -299 -147 -364 -276 -146 -289 -8 -636 295 -743 245 -87 529 30 644 265 69 140 77 299 21 429 -32 74 -106 86 -140 25 -13 -23 -13 -33 5 -89 59 -195 -19 -385 -194 -471 -61 -30 -74 -33 -162 -33 -82 0 -103 4 -152 27 -177 83 -265 274 -209 454 61 199 255 309 454 259 81 -20 112 -15 132 24 22 43 4 85 -44 104 -84 34 -190 43 -286 25z"/> <path d="M2616 4235 c-85 -30 -145 -119 -146 -216 -1 -203 241 -306 389 -166 95 90 96 233 3 326 -69 68 -156 88 -246 56z m139 -160 c50 -49 17 -135 -53 -135 -48 0 -82 32 -82 77 0 44 37 83 80 83 19 0 40 -9 55 -25z"/> <path d="M2364 1459 l-134 -133 -93 91 c-52 52 -105 95 -121 99 -41 10 -80 -22 -84 -70 -3 -35 3 -43 118 -160 133 -136 163 -155 208 -137 43 18 339 320 348 354 10 42 -22 81 -70 85 -37 3 -43 -2 -172 -129z"/> <path d="M4075 4038 c-46 -25 -57 -67 -31 -116 8 -15 17 -43 21 -63 3 -20 14 -44 25 -54 26 -23 74 -23 100 0 50 45 6 211 -63 234 -16 6 -30 11 -31 11 -1 0 -10 -6 -21 -12z"/> <path d="M4084 3659 c-16 -17 -19 -37 -19 -110 0 -78 3 -91 22 -110 27 -27 75 -29 103 -4 17 16 20 31 20 112 0 80 -3 96 -20 113 -27 27 -81 26 -106 -1z"/> <path d="M606 3379 c-33 -26 -36 -79 -6 -109 20 -20 33 -20 566 -20 365 0 552 4 565 11 48 25 44 105 -7 128 -18 8 -183 11 -558 11 -524 0 -534 0 -560 -21z"/> <path d="M4084 3289 c-16 -17 -19 -37 -19 -110 0 -78 3 -91 22 -110 27 -27 75 -29 103 -4 17 16 20 31 20 112 0 80 -3 96 -20 113 -27 27 -81 26 -106 -1z"/> <path d="M600 3010 c-25 -25 -26 -71 -1 -101 l19 -24 552 0 552 0 24 28 c29 34 30 56 3 91 l-20 26 -555 0 c-541 0 -554 0 -574 -20z"/> <path d="M4084 2919 c-16 -18 -19 -37 -19 -120 l0 -99 -408 0 c-448 0 -451 0 -482 -60 -23 -45 -22 -630 1 -670 36 -60 33 -60 478 -60 l406 0 0 -75 0 -75 -395 0 c-438 0 -448 -1 -485 -62 -19 -31 -20 -50 -20 -338 0 -334 1 -338 59 -377 34 -23 34 -23 437 -23 l404 0 0 -75 0 -75 -404 0 c-403 0 -403 0 -437 -23 -51 -34 -59 -59 -59 -183 l0 -110 -30 -22 c-25 -19 -30 -30 -30 -63 0 -34 4 -42 30 -57 l30 -17 0 -115 c0 -98 3 -120 20 -148 40 -64 1 -62 960 -62 959 0 920 -2 960 62 19 31 20 50 20 336 0 335 -2 345 -63 382 -30 19 -53 20 -439 20 l-408 0 0 75 0 75 113 0 c100 0 116 2 135 20 14 14 22 33 22 55 0 22 -8 41 -22 55 -21 20 -32 20 -585 20 l-563 0 0 250 0 250 830 0 830 0 0 -250 0 -250 -118 0 c-105 0 -121 -2 -140 -20 -30 -28 -30 -82 0 -110 20 -18 35 -20 167 -20 127 0 150 3 178 20 61 37 63 47 63 383 0 300 0 304 -23 338 -13 19 -38 39 -57 46 -25 8 -152 12 -433 12 l-398 1 3 73 3 72 417 5 418 5 32 33 33 32 3 310 c2 273 1 314 -14 346 -31 64 -28 64 -484 64 l-410 0 0 100 c0 87 -3 103 -20 120 -27 27 -81 26 -106 -1z m886 -614 l0 -245 -830 0 -830 0 0 245 0 245 830 0 830 0 0 -245z m0 -1895 l0 -250 -830 0 -830 0 0 250 0 250 830 0 830 0 0 -250z"/> <path d="M3547 2368 c-42 -33 -37 -106 9 -127 18 -8 188 -11 588 -11 555 0 564 0 590 21 34 27 36 79 4 109 -21 20 -32 20 -598 20 -445 0 -580 -3 -593 -12z"/> <path d="M3565 481 c-49 -20 -64 -83 -30 -121 18 -20 30 -20 602 -20 570 0 583 0 603 20 27 27 26 81 -1 106 -20 18 -46 19 -588 21 -311 1 -575 -2 -586 -6z"/> <path d="M600 2650 c-30 -30 -27 -83 6 -109 26 -21 36 -21 560 -21 375 0 540 3 558 11 51 23 55 103 7 128 -13 7 -200 11 -565 11 -533 0 -546 0 -566 -20z"/> <path d="M606 2289 c-33 -26 -36 -79 -6 -109 20 -20 33 -20 566 -20 365 0 552 4 565 11 48 25 44 105 -7 128 -18 8 -183 11 -558 11 -524 0 -534 0 -560 -21z"/> <path d="M600 1920 c-25 -25 -26 -71 -1 -101 l19 -24 267 0 267 0 19 24 c25 30 24 76 -1 101 -19 19 -33 20 -285 20 -252 0 -266 -1 -285 -20z"/> <path d="M3539 1412 c-30 -25 -30 -75 0 -105 l22 -22 578 0 c555 0 580 1 600 19 27 25 28 79 1 106 -20 20 -33 20 -599 20 -548 0 -580 -1 -602 -18z"/> <path d="M1300 930 c-17 -17 -20 -33 -20 -114 0 -90 1 -96 26 -115 31 -24 43 -26 78 -10 31 14 46 55 46 124 0 63 -16 112 -40 125 -30 16 -68 12 -90 -10z"/> <path d="M1310 560 c-39 -39 -20 -111 45 -168 62 -55 127 -54 153 1 18 37 2 77 -38 101 -17 9 -37 30 -45 45 -23 46 -80 56 -115 21z"/> <path d="M1670 483 c-34 -13 -50 -37 -50 -74 0 -56 25 -69 130 -69 105 0 130 13 130 69 0 59 -26 75 -119 78 -42 1 -83 0 -91 -4z"/> <path d="M2040 483 c-34 -13 -50 -37 -50 -74 0 -56 25 -69 130 -69 105 0 130 13 130 69 0 59 -26 75 -119 78 -42 1 -83 0 -91 -4z"/> <path d="M2410 483 c-34 -13 -50 -37 -50 -74 0 -56 25 -69 130 -69 105 0 130 13 130 69 0 59 -26 75 -119 78 -42 1 -83 0 -91 -4z"/> <path d="M2780 483 c-34 -13 -50 -37 -50 -74 0 -56 25 -69 130 -69 105 0 130 13 130 69 0 59 -26 75 -119 78 -42 1 -83 0 -91 -4z"/> </g> </svg>
                                    </div>
                                    <div class="pt-16 pb-4 bg-gray-100 px-7 -mt-14">
                                        <p class="text-2xl mt-2 font-semibold">
                                            2. Our Processes
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="pb-10">
                                <div>
                                    <div class="w-32 h-32 rounded-full bg-blue-500 border-8 border-white z-30 relative flex items-center pl-6 justify-items-center mx-auto">
                                        <svg version="1.0" class="fill-current text-white hover:text-gray-600 w-3/4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"> <path d="M2395 4984 c-88 -74 -183 -157 -211 -185 l-50 -49 -70 10 c-38 5 -183 10 -322 10 l-254 0 4 -307 c4 -287 6 -313 27 -378 67 -206 217 -359 428 -437 51 -19 87 -22 293 -27 l235 -6 3 -123 3 -123 -43 25 c-157 91 -350 69 -482 -54 -74 -70 -114 -144 -129 -238 l-11 -68 -50 -12 c-133 -31 -271 -129 -344 -245 -66 -105 -87 -176 -87 -297 0 -58 4 -122 8 -143 8 -36 7 -37 -23 -37 -46 0 -105 -35 -131 -77 -20 -32 -24 -54 -28 -145 l-3 -108 -72 0 c-93 0 -159 -20 -235 -71 -118 -79 -176 -192 -176 -345 0 -84 3 -95 37 -165 72 -145 196 -227 359 -237 l89 -5 0 -56 c0 -500 322 -923 806 -1058 l99 -28 495 0 495 0 100 28 c373 105 655 380 760 743 24 83 45 233 45 324 l0 50 63 0 c171 1 309 85 382 234 102 205 18 444 -192 548 -57 28 -79 33 -158 36 l-93 4 -4 107 c-3 90 -7 112 -27 144 -26 42 -85 77 -131 77 -30 0 -31 1 -23 38 4 20 8 84 8 142 -1 123 -21 193 -86 296 -73 116 -213 215 -345 246 l-50 12 -11 68 c-15 94 -55 168 -129 238 -132 123 -325 145 -482 54 l-43 -25 3 123 3 123 235 6 c206 5 242 8 293 27 208 77 358 228 424 426 26 80 27 86 31 389 l4 307 -254 0 c-139 0 -284 -5 -322 -10 l-70 -10 -60 58 c-57 55 -361 313 -368 311 -2 0 -75 -61 -163 -135z m298 -188 c136 -114 181 -164 221 -243 74 -149 74 -317 -1 -473 -33 -68 -148 -185 -220 -223 l-53 -28 0 163 0 163 112 112 113 113 -58 57 -57 58 -55 -55 -55 -54 0 107 0 107 -80 0 -80 0 0 -187 0 -187 -53 52 -53 52 -57 -58 -57 -57 110 -110 110 -110 0 -83 0 -83 -52 28 c-73 38 -188 155 -221 223 -91 190 -70 404 56 564 30 38 284 256 298 256 4 0 64 -47 132 -104z m-658 -218 c-4 -13 -17 -60 -29 -105 l-21 -83 -53 52 -52 53 -57 -57 -57 -58 127 -128 c70 -71 127 -136 127 -144 0 -41 86 -184 154 -256 l71 -75 -100 6 c-184 10 -317 83 -407 221 -67 104 -78 158 -78 392 l0 204 191 0 191 0 -7 -22z m1425 -182 c0 -226 -11 -286 -68 -376 -96 -152 -228 -227 -417 -237 l-100 -6 71 75 c68 72 154 215 154 256 0 8 57 73 127 144 l127 128 -57 58 -57 57 -52 -53 -53 -52 -21 83 c-12 45 -25 92 -29 105 l-7 22 191 0 191 0 0 -204z m-1121 -1136 c47 -23 87 -64 115 -115 20 -39 21 -53 24 -442 l3 -403 -332 0 -331 0 6 33 c12 59 82 127 132 127 23 0 24 2 24 86 l0 87 -42 -7 c-142 -23 -263 -145 -276 -277 l-5 -49 -64 0 c-63 0 -64 0 -78 34 -39 92 -25 238 32 335 55 94 173 178 274 196 34 6 37 5 62 -37 37 -63 108 -125 185 -161 60 -28 77 -32 159 -32 50 0 95 3 99 7 4 4 -2 40 -12 80 l-19 73 -61 2 c-73 2 -117 19 -167 62 -100 88 -106 253 -14 349 76 80 191 101 286 52z m660 0 c84 -43 133 -125 132 -221 0 -139 -100 -238 -243 -242 l-63 -2 -19 -73 c-10 -40 -16 -76 -12 -80 4 -4 49 -7 99 -7 82 0 99 4 159 32 77 36 148 98 185 161 25 42 28 43 62 37 110 -19 235 -115 285 -217 48 -98 56 -229 21 -315 -14 -32 -15 -33 -78 -33 l-64 0 -5 49 c-13 132 -134 254 -275 277 l-43 7 0 -87 c0 -84 1 -86 24 -86 50 0 120 -68 132 -127 l7 -33 -332 0 -332 0 3 403 c3 389 4 403 24 442 68 127 213 177 333 115z m789 -1737 c-4 -607 -4 -619 -26 -691 -48 -157 -113 -270 -222 -385 -118 -126 -272 -215 -446 -259 -86 -22 -105 -23 -534 -23 -429 0 -448 1 -534 23 -179 45 -330 134 -455 268 -81 87 -140 179 -181 286 -58 151 -60 172 -60 813 l0 585 1230 0 1231 0 -3 -617z m-2628 202 c0 -47 -2 -85 -5 -85 -3 0 -28 16 -55 35 -27 19 -52 35 -54 35 -9 0 -87 -130 -82 -138 3 -5 48 -37 101 -72 l95 -63 0 -65 0 -65 -72 8 c-86 8 -122 22 -171 64 -101 89 -107 252 -14 349 55 57 110 80 200 81 l57 1 0 -85z m2985 57 c87 -45 138 -127 137 -222 0 -66 -18 -113 -61 -163 -43 -49 -102 -74 -188 -83 l-73 -7 0 65 0 65 95 63 c53 35 98 67 101 72 9 14 -77 139 -90 131 -6 -3 -30 -19 -53 -35 -23 -15 -44 -28 -47 -28 -3 0 -6 39 -6 86 l0 87 73 -5 c45 -3 87 -12 112 -26z"/> <path d="M1662 1761 c10 -100 79 -195 180 -248 46 -24 65 -28 138 -28 71 0 94 4 142 27 101 47 172 142 185 247 l6 51 -80 0 -81 0 -6 -36 c-17 -86 -121 -148 -207 -123 -49 15 -106 75 -115 123 l-6 36 -80 0 -81 0 5 -49z"/> <path d="M2812 1761 c10 -101 85 -202 186 -249 48 -23 71 -27 142 -27 73 0 92 4 138 28 101 53 170 148 180 248 l5 49 -81 0 -80 0 -6 -36 c-9 -48 -66 -108 -115 -123 -86 -25 -190 37 -207 123 l-6 36 -80 0 -81 0 5 -49z"/> <path d="M2966 1022 c-14 -104 -94 -209 -194 -255 -44 -21 -65 -22 -334 -25 l-288 -3 0 -80 0 -79 288 0 c315 0 349 5 447 60 137 78 245 249 245 386 l0 44 -79 0 -78 0 -7 -48z"/> <path d="M757 4512 l-57 -57 115 -115 115 -115 57 58 58 57 -115 115 -115 115 -58 -58z"/> <path d="M4187 4452 l-117 -117 53 -53 c29 -28 57 -52 62 -52 6 0 61 51 123 113 l112 112 -58 58 -57 57 -118 -118z"/> <path d="M1107 4162 l-57 -57 173 -173 172 -172 58 58 57 57 -173 173 -172 172 -58 -58z"/> <path d="M3780 4045 l-175 -175 58 -57 57 -58 175 175 175 175 -58 58 -57 57 -175 -175z"/> <path d="M440 4125 c-24 -36 -41 -67 -39 -69 2 -2 187 -125 410 -274 l407 -271 45 69 46 68 -407 271 c-224 149 -410 271 -413 271 -4 0 -26 -29 -49 -65z"/> <path d="M4228 3926 c-218 -146 -399 -269 -403 -275 -7 -12 71 -131 86 -131 15 0 809 533 809 543 0 12 -79 127 -88 127 -4 0 -185 -119 -404 -264z"/> <path d="M207 3688 c-15 -39 -24 -75 -20 -79 20 -18 285 -121 293 -113 10 11 61 136 57 140 -5 5 -289 124 -296 124 -3 0 -19 -32 -34 -72z"/> <path d="M4726 3699 c-77 -33 -141 -61 -143 -62 -3 -4 51 -134 59 -143 6 -6 277 102 292 116 11 11 -43 150 -58 149 -6 0 -74 -27 -150 -60z"/> <path d="M677 3533 c-9 -21 -22 -54 -31 -74 l-15 -36 221 -92 c121 -51 225 -90 230 -89 9 3 71 139 65 144 -5 4 -443 184 -449 184 -3 0 -13 -17 -21 -37z"/> <path d="M4195 3479 c-115 -49 -213 -90 -217 -91 -9 -4 53 -148 64 -148 9 0 448 180 448 184 0 18 -63 141 -72 143 -7 0 -107 -39 -223 -88z"/> <path d="M77 3282 c-12 -20 -28 -144 -21 -151 12 -10 943 -193 953 -187 9 6 35 145 29 152 -3 2 -205 44 -449 93 -550 109 -507 102 -512 93z"/> <path d="M4555 3193 c-258 -52 -472 -96 -474 -98 -8 -8 24 -147 35 -152 15 -5 936 177 948 188 11 10 -15 152 -29 155 -6 1 -221 -41 -480 -93z"/> <path d="M10 2710 l0 -80 165 0 165 0 0 80 0 80 -165 0 -165 0 0 -80z"/> <path d="M510 2710 l0 -80 245 0 245 0 0 80 0 80 -245 0 -245 0 0 -80z"/> <path d="M4120 2710 l0 -80 245 0 245 0 0 80 0 80 -245 0 -245 0 0 -80z"/> <path d="M4780 2710 l0 -80 165 0 165 0 0 80 0 80 -165 0 -165 0 0 -80z"/> <path d="M530 2392 c-261 -52 -477 -96 -478 -98 -2 -1 2 -36 9 -78 10 -67 14 -76 33 -76 21 0 938 181 945 186 5 4 -20 136 -28 150 -4 7 -163 -21 -481 -84z"/> <path d="M4107 2483 c-11 -20 -29 -145 -21 -152 13 -12 941 -194 952 -187 9 6 37 145 30 152 -3 2 -211 45 -464 94 -252 50 -466 93 -476 96 -9 3 -18 1 -21 -3z"/> </g> </svg>
                                    </div>
                                    <div class="pt-16 pb-4 bg-gray-100 px-7 -mt-14">
                                        <p class="text-2xl mt-2 font-semibold">
                                            3. Our Philosophy
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="pb-10">
                                <div>
                                    <div class="w-32 h-32 rounded-full bg-blue-500 border-8 border-white z-30 relative flex items-center pl-6 justify-items-center mx-auto">
                                        <svg version="1.0" class="fill-current text-white hover:text-gray-600 w-3/4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"> <path d="M3621 5103 c-51 -18 -109 -72 -136 -128 -19 -38 -20 -62 -20 -435 0 -386 0 -396 22 -435 12 -22 36 -54 55 -72 57 -55 98 -66 251 -71 l138 -4 -5 -27 c-18 -87 -77 -444 -74 -451 2 -5 179 101 393 236 l390 244 117 0 c64 0 140 5 168 11 69 15 129 62 162 128 l28 55 0 390 c0 358 -2 394 -19 431 -23 51 -98 118 -149 133 -28 9 -211 12 -658 11 -531 0 -625 -3 -663 -16z m1304 -178 l25 -24 0 -351 c0 -358 -2 -379 -39 -407 -11 -8 -64 -12 -165 -13 l-150 0 -258 -161 c-142 -89 -260 -160 -262 -158 -2 2 9 75 24 162 l27 157 -224 0 -224 0 -24 25 -25 24 0 362 c0 359 0 363 22 386 l21 23 614 0 614 0 24 -25z"/> <path d="M3792 4708 l3 -83 493 -3 492 -2 0 85 0 85 -495 0 -496 0 3 -82z"/> <path d="M3792 4378 l3 -83 328 -3 327 -2 0 85 0 85 -330 0 -331 0 3 -82z"/> <path d="M4620 4375 l0 -85 80 0 80 0 0 85 0 85 -80 0 -80 0 0 -85z"/> <path d="M2335 4864 c-103 -11 -296 -48 -392 -75 -391 -110 -733 -309 -1018 -594 -284 -283 -480 -613 -589 -991 l-33 -117 -73 122 c-40 67 -77 124 -82 127 -6 4 -108 -50 -137 -72 -3 -3 223 -387 278 -473 7 -10 61 18 247 129 132 79 240 144 242 145 2 2 -70 127 -82 142 0 1 -48 -27 -106 -62 -58 -36 -108 -65 -112 -65 -10 0 30 135 77 256 251 648 795 1129 1471 1304 334 86 719 87 1057 0 l107 -27 24 76 c18 56 21 78 12 83 -21 12 -173 48 -293 69 -91 16 -168 22 -338 24 -121 2 -238 1 -260 -1z"/> <path d="M2395 4283 c-205 -32 -417 -135 -572 -277 -138 -127 -257 -327 -310 -523 l-27 -98 -1 -410 0 -410 26 -55 c38 -81 82 -126 161 -164 l71 -34 27 -86 c16 -48 48 -121 72 -163 48 -86 174 -221 250 -268 34 -21 48 -37 48 -52 0 -25 24 -19 -352 -88 -135 -24 -271 -54 -301 -65 -160 -60 -282 -187 -343 -358 -15 -43 -30 -80 -34 -84 -3 -5 -72 59 -153 140 -199 201 -200 172 25 399 l173 173 -305 305 -305 306 -221 -223 c-186 -188 -226 -233 -252 -288 -49 -102 -65 -178 -60 -294 5 -112 26 -184 80 -272 21 -35 248 -269 657 -677 585 -582 631 -625 695 -656 180 -85 399 -76 556 23 27 17 153 126 279 241 l230 210 -62 62 -61 63 882 0 c485 0 882 3 882 8 0 26 -204 612 -231 664 -43 80 -146 183 -224 225 -83 43 -133 56 -420 108 -332 60 -305 53 -304 78 0 15 23 39 76 77 42 30 95 78 120 106 l44 52 117 4 c94 3 125 8 157 25 51 27 91 67 119 118 21 40 21 45 21 630 0 530 -2 598 -18 673 -89 413 -382 723 -787 833 -57 16 -113 21 -235 24 -88 2 -173 1 -190 -2z m308 -168 c327 -57 602 -289 708 -598 40 -117 49 -188 49 -399 l0 -186 -40 15 c-39 16 -40 17 -40 65 l0 48 -95 0 c-243 0 -472 99 -654 284 l-74 75 -88 -83 c-198 -189 -401 -276 -644 -276 l-95 0 0 -48 c0 -48 -1 -49 -41 -65 l-41 -16 5 232 c5 259 11 292 78 435 120 258 355 449 620 506 143 30 228 33 352 11z m-78 -988 c130 -107 318 -192 480 -217 44 -7 86 -14 93 -16 9 -3 12 -62 12 -256 0 -272 -7 -323 -54 -430 l-26 -58 -287 -2 -288 -3 0 -80 0 -80 215 -5 215 -5 -47 -33 c-71 -49 -163 -90 -246 -108 -99 -22 -252 -15 -342 15 -203 69 -358 228 -427 436 -25 76 -26 92 -31 339 -5 283 -6 276 54 276 48 0 212 44 294 80 77 32 251 142 284 179 11 12 23 21 28 21 5 0 37 -24 73 -53z m-895 -489 l0 -141 -26 24 c-14 13 -32 36 -40 51 -17 32 -18 111 -3 141 15 28 50 67 61 67 4 0 8 -64 8 -142z m1712 81 c35 -65 20 -146 -36 -198 l-26 -24 0 142 0 143 22 -14 c12 -8 30 -30 40 -49z m18 -444 c0 -67 -3 -79 -25 -100 -19 -20 -34 -25 -73 -25 l-49 0 23 68 c13 37 24 74 24 82 0 13 58 43 93 49 4 0 7 -33 7 -74z m-2580 -460 l-45 -45 -190 190 -189 190 44 45 45 45 190 -190 190 -190 -45 -45z m-194 -200 c-52 -75 -58 -173 -17 -252 30 -58 667 -688 716 -709 77 -32 196 -14 250 36 21 19 21 19 210 -171 l190 -190 -52 -49 c-29 -27 -79 -61 -110 -77 -54 -26 -67 -28 -173 -28 -188 0 -135 -42 -847 669 -667 666 -649 645 -675 786 -22 118 19 250 109 350 l46 52 189 -190 190 -189 -26 -38z m1874 42 c81 0 144 6 180 16 30 8 56 14 57 13 1 -1 -53 -57 -120 -124 l-122 -122 -124 124 -124 124 64 -16 c42 -10 106 -16 189 -15z m-188 -274 l178 -178 179 179 179 179 314 -57 c253 -46 325 -62 374 -86 68 -33 130 -88 169 -150 22 -34 155 -406 155 -432 0 -4 -384 -8 -853 -8 l-852 0 -155 155 c-85 85 -159 155 -163 155 -5 0 -73 -58 -151 -128 -226 -206 -234 -212 -268 -212 -26 0 -48 17 -133 101 l-103 101 39 115 c44 131 83 198 143 248 78 63 135 81 441 139 160 29 299 54 310 55 13 1 80 -59 197 -176z m-154 -890 l-53 -53 -190 190 -190 191 54 50 54 51 188 -188 189 -189 -52 -52z"/> <path d="M4576 3558 c-8 -13 -73 -121 -145 -241 l-130 -217 42 -26 c23 -14 52 -32 64 -40 12 -8 26 -14 30 -14 5 0 39 52 77 116 46 76 72 111 77 102 4 -7 19 -56 33 -108 170 -626 48 -1299 -329 -1825 -32 -44 -59 -85 -62 -91 -4 -10 102 -104 118 -104 12 0 123 159 191 273 214 360 320 751 321 1177 0 230 -33 462 -93 659 -11 36 -18 66 -17 68 3 2 90 -49 204 -118 l32 -20 42 71 c23 39 40 72 38 74 -5 5 -433 262 -459 276 -16 8 -22 6 -34 -12z"/> </g> </svg>
                                    </div>
                                    <div class="pt-16 pb-4 bg-gray-100 px-7 -mt-14">
                                        <p class="text-2xl mt-2 font-semibold">
                                            4. Who we serve
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="relative py-12 bg-cover bg-no-repeat" style="background-image: url(images/finance-min.jpg);">
                    <div class="z-40 inset-0 absolute bg-black opacity-80"></div>
                    <div class="relative z-40">
                        <h1 class="text-center text-4xl font-medium text-gray-300">
                            Our Services
                        </h1>
                        <div class="w-11/12 mx-auto grid md:grid-cols-2 justify-items-center py-8 text-white">
                            <div class="flex pb-20 md:pb-0">
                                <div class="w-28">
                                    <img src="images/save-money.svg" class="w-full" alt="Financial Planning">
                                </div>
                                <div class="pl-4 md:pr-7">
                                    <h2 class="text-3xl pb-7 font-semibold tracking-wider">
                                        Financial Planning
                                    </h2>
                                    <p class="tracking-wide text-gray-200">
                                        We'll work to analyse your unique financial situation and provide easy-to -understand recommendation for your business.
                                    </p>
                                </div>
                            </div>
                            <div class="flex pb-20">
                                <div class="w-40">
                                    <img src="images/handshake.svg" class="w-full" alt="Retirement Planning">
                                </div>
                                <div class="pl-4 md:pr-7">
                                    <h2 class="text-2xl md:text-3xl pb-7 font-semibold tracking-wider">
                                        Retirement Planning
                                    </h2>
                                    <p class="tracking-wide text-gray-200">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi neque voluptatibus corrupti, itaque porro voluptatum rem accusamus et laborum iure? Aspernatur optio et pariatur minus eveniet vel. Atque, vero officia!
                                    </p>
                                </div>
                            </div>
                            <div class="flex pb-20 md:pb-0">
                                <div class="w-40">
                                    <img src="images/deal.svg" class="w-full" alt="Estate Planning">
                                </div>
                                <div class="pl-4 md:pr-7">
                                    <h2 class="text-3xl pb-7 font-semibold tracking-wider">
                                        Estate Planning
                                    </h2>
                                    <p class="tracking-wide text-gray-200">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima aliquid saepe asperiores cum facilis, inventore fuga eaque beatae dolores ullam architecto sapiente eius. Veritatis voluptates magnam quas deserunt saepe harum?
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="w-40">
                                    <img src="images/stock-exchange-app.svg" class="w-full" alt="Investment Planning">
                                </div>
                                <div class="pl-4 md:pr-7">
                                    <h2 class="text-3xl pb-7 font-semibold tracking-wider">
                                        Investment Planning
                                    </h2>
                                    <p class="tracking-wide text-gray-200">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio velit minus illo laudantium totam. Repellendus accusantium assumenda, labore autem facilis quas dicta minima eveniet mollitia adipisci impedit neque eligendi itaque.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-12 text-center bg-gray-200">
                    <p class="text-3xl md:text-5xl font-semibold tracking-wide py-5 text-gray-700 pb-10">
                        Not sure where to start
                    </p>
                    <a href="#" class="py-4 px-8 rounded-3xl bg-blue-300  text-base md:text-lg font-semibold hover:bg-blue-500 hover:text-white transition ease-in duration-300">
                        Schedule a time to talk
                    </a>
                </section>
                <section class="py-12">
                    <h1 class="text-center text-4xl font-medium pb-14">
                        Featured By
                    </h1>
                    <div class="grid md:grid-cols-4 w-4/5 mx-auto">
                        <a href="#" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-1-min.png" alt="Clients" class="w-32 mx-auto filter grayscale group-hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="#" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-2-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-3-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-4-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-5-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-6-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-7-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                        <a href="#" class="mx-auto w-full border flex group items-center p-10">
                            <img src="images/client-8-min.png" alt="Clients" class="w-32 mx-auto filter grayscale hover:grayscale-0 transition duration-300 ease-in">
                        </a>
                    </div>
                </section>
                <section class="py-12 bg-gray-200">
                    <h1 class="text-center text-4xl font-medium pb-14">
                        Our Team
                    </h1>
                    <div class="grid md:grid-cols-4 w-4/5 gap-10 mx-auto">
                        <div>
                            <img src="images/team-1-min.jpg" alt="team">
                            <p class="font-semibold text-xl pt-4 text-center tracking-wider">
                                Mr man 1
                            </p>
                            <span class="text-center text-medium block text-gray-600 font-thin tracking-wider">
                                CEO
                            </span>
                        </div>
                        <div>
                            <img src="images/team-2-min.jpg" alt="team">
                            <p class="font-semibold text-xl pt-4 text-center tracking-wider">
                                Mrs. woman 1
                            </p>
                            <span class="text-center text-medium block text-gray-600 font-thin tracking-wider">
                                Secretary
                            </span>
                        </div>
                        <div>
                            <img src="images/team-3-min.jpg" alt="team">
                            <p class="font-semibold text-xl pt-4 text-center tracking-wider">
                                Mr. man 2
                            </p>
                            <span class="text-center text-medium block text-gray-600 font-thin tracking-wider">
                                Tax Expert
                            </span>
                        </div>
                        <div>
                            <img src="images/team-4-min.jpg" alt="team">
                            <p class="font-semibold text-xl pt-4 text-center tracking-wider">
                                Dr. woman 2
                            </p>
                            <span class="text-center text-medium block text-gray-600 font-thin tracking-wider">
                                Financial Expert
                            </span>
                        </div>
                    </div>
                </section>
                <section style="background-image:url(images/map-min.jpg)" class="py-12 relative">
                    <div class="z-30 inset-0 absolute bg-black opacity-80"></div>
                    <h1 class="text-center text-4xl text-blue-200 relative z-40 font-medium pb-14">
                        Contact Us
                    </h1>
                    <div class="md:flex justify-between w-4/5 mx-auto relative z-40">
                        <div class="text-gray-200 text-lg tracking-wider">
                            <div>
                                <h2 class="text-3xl font-semibold">
                                    Office
                                </h2>
                                <p>
                                    Ambassador layout street
                                </p>
                                <p>
                                    P.M.B 001992
                                </p>
                                <p>
                                    Your State
                                </p>
                            </div>

                            <div class="py-10">
                                <p class="pb-10">Phone: <br /><a href="tel:"></a> 12 2392384 </p>
                                <p>Email: <br /> <a href="mailto:google.com"> thefinancialhelp@gmail.com</a></p>
                            </div>

                            <div>
                                <h2>
                                    Opening hours:
                                </h2>
                                <p>
                                    Monday - Fridays - 8:00 - 23:00
                                </p>
                                <p>
                                    Saturdays - Sundays - 12:00 - 16:00
                                </p>
                            </div>
                        </div>
                        <div class="bg-white w-full mt-16 md:mt-0 md:w-1/3 py-8 px-5 rounded-md">
                            <form action="">
                                <div>
                                    <input type="text" name="username" placeholder="Name" class="border p-2 rounded-lg mb-7 w-full"> 
                                </div>
                                <div>
                                    <input type="email" name="email" placeholder="Email" class="border p-2 rounded-lg mb-7 w-full">
                                </div>
                                <div>
                                    <textarea name="message" id="message" placeholder="Your message..." class="border p-2 rounded-lg mb-7 w-full h-44"></textarea>
                                </div>
                                <input type="submit" value="Submit" class="py-3 w-full rounded-lg text-lg tracking-wide bg-blue-300 hover:bg-blue-500 hover:text-white transition ease-in duration-300">
                            </form>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="bg-blue-100">
                <div class="md:flex w-4/5 mx-auto py-14 text-gray-700 text-base tracking-wider border-b border-gray-400">
                    <div class="w-full md:w-3/12 mb-16 text-center md:text-left">
                        <ul>
                            <li>
                                <a href="#" class="pb-4 block">
                                    About us
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Our services
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Team
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Contact us
                                </a>
                            </li>
                        </ul>
                    </div>
                                
                    <div class="w-full md:w-2/6 mb-16 text-center md:text-left">
                        <ul>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Financial Planning
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Investment Management
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Strategic Planning
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    Risk Analysis
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pb-4 block">
                                    View all
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="md:pl-8">
                        <p class="leading-8">
                            Subscribe to our newsletter to receive weekly tips on financial topics that interest you the most
                        </p>
                        <form action="" class="mt-5 tracking-widest">
                            <input type="text" name="subscribe" placeholder="Subscribe" class="py-3 pl-5 rounded-lg tracking-wider w-3/5 ">
                            <input type="submit" name="subscribeSubmit" value="Submit" class="py-3 px-5 rounded-lg tracking-wider bg-blue-300 hover:bg-blue-500 hover:text-white transition ease-in duration-300">
                        </form>
                        <div>
                            <ul class="flex w-full md:w-3/5 mt-7 p-5 justify-between">
                                <li>
                                    <a href="https://facebook.com">
                                        <i class="fa fa-facebook text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com">
                                        <i class="fa fa-twitter text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com">
                                        <i class="fa fa-instagram text-2xl"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://whatsapp.com">
                                        <i class="fa fa-whatsapp text-2xl"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-4/5 mx-auto text-gray-700 tracking-wider text-sm py-5">
                    <p>2021 &copy;Financial help. All Rights Reserved | <a href="#">Privacy Policy</a></p>
                    <p class="text-xs mt-1">Design by <a href="mailto:codejutsu@protonmail.com" class="text-black">Dunu Daniel (Codejutsu)</a></p>
                </div>
            </footer>
        </div>
        <script>
            Alpine.start();

            var loader = document.getElementById('loader');
            var body = document.getElementById('body');
            
            window.addEventListener('load', function(){
                loader.style.display = 'none';
                body.style.display = 'block';
            })
        </script>
    </body>
</html>
