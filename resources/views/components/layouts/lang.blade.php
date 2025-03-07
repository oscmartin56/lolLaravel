<div class="hidden sm:flex sm:items-center sm:ml-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="class= bg-blue-400 bg-opacity-20 text-green-400 font-semibold rounded-2xl px-5 py-2  backdrop-blur-md transition transform hover:scale-105 hover:bg-opacity-40">
                <div>
                    {{ config('languages')[App::getLocale()]['name'] ?? 'Idioma no disponible' }}
                </div>
            </button>
        </x-slot>
        <x-slot name="content">
            @foreach(config('languages') ?? [] as $locale => $language)
                <x-dropdown-link :href="route('language', $locale)">
                    {{ $language['name'] }}
                </x-dropdown-link>
            @endforeach
        </x-slot>
    </x-dropdown>
</div>
