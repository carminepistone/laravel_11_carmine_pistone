<x-layout>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center userHeight position-relative">
        

        <div class="position-absolute top-0 start-40 mt-3">
            @if(session()->has('emailSent'))
                <div class="alert alert-success">
                    {{ session('emailSent') }}
                </div>
            @endif
            
            @if(session()->has('emailError'))
                <div class="alert alert-danger">
                    {{ session('emailError') }}
                </div>
            @endif

            @if(session()->has('successMessage'))
                <div class="alert alert-success"> 
                    {{ session('successMessage') }}
                </div>
            @endif
        </div>


        <div class="col-12 col-md-6 text-center">
            <h1 class="display-2 text-white fw-bold homepage">HOMEPAGE</h1>
        </div>

    </div>
</x-layout>
