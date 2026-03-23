<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-12 text-center mb-4 mt-4">
                <h2 class="display-3 text-white form-label">Registrati</h2>
            </div>
            
            
            
            
            <div class="col-12 col-md-8">
                


                <form method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" >
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="confermaPassword" class="form-label">Conferma Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="confermaPassword">
                </div>
                
                <button type="submit" class="btn btn-primary">Registrati</button>
                </form>



            </div>
        </div>
    </div>
</x-layout>