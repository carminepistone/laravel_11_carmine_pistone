<x-layout>
    <div class="container-fluid vociMenu">
        <div class="row justify-content-center">

            <div class="col-12 text-center mb-4 mt-4">
                <h2 class="display-3 text-white form-label">Il Nostro Menù</h2>
            </div>


                @foreach ($vociMenu as $menu)
                    <x-card :menu="$menu"></x-card>
                @endforeach

        </div>
    </div>
</x-layout>
