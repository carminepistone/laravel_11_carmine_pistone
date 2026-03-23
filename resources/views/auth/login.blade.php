<x-layout>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 text-center mb-4 mt-4">
                <h2 class="display-3 text-white form-label">Login</h2>
            </div>




            <div class="col-12 col-md-8">


                <form method="POST" action="{{ route('login') }}">

                    @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
                </form>



            </div>
        </div>
    </div>
</x-layout>
