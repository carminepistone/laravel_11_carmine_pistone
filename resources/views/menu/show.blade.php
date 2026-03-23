<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6 text-center bg-white rounded-4 p-4">
                <h2>{{ $menu->nome }}</h2>
                <h3>{{ $menu->categoria }}</h3>
                <p>{{ $menu->ingredienti }}</p>
                <p><strong>€ {{ $menu->prezzo }}</strong></p>
            </div>
            <div class="col-12 col-md-6 text-center mt-3 mt-md-0">
                <img src="{{ Storage::url($menu->img) }}" 
                    alt="Poster di '{{ $menu->nome }}'">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 text-center">
                <form action="{{ route('menu.destroy', $menu) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        Elimina
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>