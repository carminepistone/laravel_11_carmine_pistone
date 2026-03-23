<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center align-items-center g-4">

            <div class="col-12 col-md-5 text-center bg-white rounded-4 p-4 shadow">
                <h2 class="mb-2">{{ $menu->nome }}</h2>
                <h3 class="text-muted fs-5 mb-3">{{ $menu->categoria }}</h3>
                <p class="mb-3">{{ $menu->ingredienti }}</p>
                <p class="fs-4"><strong>€ {{ $menu->prezzo }}</strong></p>

                @auth
                    @if ($menu->user_id == Auth::id())
                        <a href="{{ route('menu.edit', $menu) }}" class="btn btn-warning me-2">Modifica</a>
                        <form action="{{ route('menu.destroy', $menu) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Sei sicuro di voler eliminare questo piatto?')">
                                Elimina
                            </button>
                        </form>
                    @endif
                @endauth
            </div>

            <div class="col-12 col-md-5 text-center">
                <img src="{{ Storage::url($menu->img) }}"
                    alt="Poster di '{{ $menu->nome }}'"
                    class="img-fluid rounded-4 shadow"
                    style="max-height: 400px; object-fit: cover; width: 100%;">
            </div>

        </div>
    </div>
</x-layout>