<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-5">
            <h2 class="text-white form-label">Inserire Piatto</h2>
    </div>


            <div class="row justify-content-center">
                <div class="col-6 col-md-8">
                    <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria:</label>
                            <input type="text" class="form-control" id="categoria" name="categoria" value="{{ old('categoria') }}" >
                        </div>
                        <div class="mb-3">
                            <label for="ingredienti" class="form-label">Ingredienti:</label>
                            <textarea name="ingredienti" id="ingredienti" cols="30" rows="6" class="form-control">{{ old('ingredienti') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="prezzo" class="form-label">Prezzo:</label>
                            <input type="number" class="form-control" id="prezzo" name="prezzo" step="0.01" min="0" value="{{ old('prezzo') }}">
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Inserire un'immagine:</label>
                            <input type="file" class="form-control" id="img" name="img">
                        </div>
                        <button type="submit" class="btn custombtn">Invia</button>
                    </form>
                </div>
            </div>

            

</x-layout>