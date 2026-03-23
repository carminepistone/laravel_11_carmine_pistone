<x-layout>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 text-center dashboard">
                <h2 class="mb-4 mt-4">Profilo di {{ Auth::user()->name }}</h2>

                @forelse (Auth::user()->menu as $menu)
                    <div class="row justify-content-center">
                        <x-card :menu="$menu" />
                    </div>
                @empty
                    <h3 class="text-center mb-4">Nessun piatto caricato.</h3>
                    <a href="{{ route('menu.create') }}" class="btn custombtn w-50 mb-5">
                        Pubblica la tua prima voce nel Menù
                    </a>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>