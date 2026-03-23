<x-layout>
    
    <section>
        <div class="container userHeight">
            <div class="row h-100 justify-content-center align-items-center ">

                    <div class="row h-100 justify-content-center align-items-center p-5">
                        <div class="col-12 md-8 text-white">
                            <form method="post" action="{{route('contactUsForm')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="user" class="form-label">Inserisci il tuo nome</label>
                                    <input type="text" name="name" class="form-control" id="user" aria-describedby="emailHelp">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Inserisci la tua mail</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                    <label for="message" class="form-label">Scrivi qui il tuo messaggio</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                <button type="submit" class="btn custombtn mt-2">Submit</button>
                                </form>
                        </div>
                    </div>

                
            </div>
        </div>
    </section>

</x-layout>
