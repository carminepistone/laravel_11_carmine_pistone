<div class="col-4 col-md-4 mb-4">
    <div class="card h-60 cardcustom">

        @if (!$menu->img)
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="{{ $menu->nome }}">
        @else
            <img src="{{ Storage::url($menu->img) }}" class="card-img-top" alt="{{ $menu->nome }}">
        @endif

        <div class="card-body">
            <h5 class="card-title">{{ $menu->nome }}</h5>
            <h6 class="text-muted">{{ $menu->categoria }}</h6>
            <p class="card-text">{{ $menu->ingredienti }}</p>
            <h6 class="fw-bold">€ {{ number_format($menu->prezzo, 2) }}</h6>
            <a href="{{ route('menu.show', $menu) }}" class="btn custombtn">Leggi di più</a>
            <a href="{{ route('menu.edit', $menu) }}" class="btn custombtn">Modifica</a>
        </div>
    </div>
</div>