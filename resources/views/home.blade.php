<x-layouts.layout titulo="League of legends">
    @guest
        <div class="carousel carousel-center w-full h-full bg-blue-950">
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Aatrox_0.jpg" alt="Aatrox" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Ahri_0.jpg" alt="Ahri" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Yasuo_0.jpg" alt="Yasuo" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Garen_0.jpg" alt="Garen" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/LeeSin_0.jpg" alt="Lee Sin" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Thresh_0.jpg" alt="Thresh" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Jinx_0.jpg" alt="Jinx" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Seraphine_0.jpg" alt="Seraphine" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vayne_0.jpg" alt="Vayne" />
            </div>
            <div class="carousel-item w-full h-full flex justify-center items-center">
                <img class="w-full h-full object-contain" src="https://ddragon.leagueoflegends.com/cdn/img/champion/splash/Vi_0.jpg" alt="Vi" />
            </div>
        </div>
    @endguest
    @auth
            <div class="bg-blue-950 min-h-full p-4">
                <div class="flex justify-center space-x-4">
                    <div class="p-4 card bg-base-100 image-full w-96 shadow-xl">
                        <figure>
                            <img src="{{asset("/images/lol.jpg")}}" alt="League of legends" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">CRUD League Of Legends!</h2>
                            <p>Página para ver todos los campeones de league of legends</p>
                            <div class="card-actions justify-end">
                                <a class="btn btn-primary" href="/champs">Ver Campeones</a>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 card bg-base-100 image-full w-96 shadow-xl">
                        <figure>
                            <img src="{{asset("/images/lol.jpg")}}" alt="League of legends" />
                        </figure>
                        <div class="card-body">
                            <h2 class="card-title">CRUD League Of Legends!</h2>
                            <p>Página para ver los Campeones con sus respectivos Objetos de league of legends</p>
                            <div class="card-actions justify-end">
                                <a class="btn btn-primary" href="/items">Ver Campeones y Objetos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endauth
</x-layouts.layout>
