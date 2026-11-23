<x-layout />
  <div class="container mt-5">

    <h1 class="text-center mb-4">I nostri iscritti</h1>

    <div class="row">

        @foreach ($data as $utente)

            <div class="col-md-4 mb-4">

                <div class="card">

                    <div class="card-body">

                        <h5 class="card-title">
                            {{ $utente['name'] }}
                        </h5>

                        <p class="card-text">
                            Email: {{ $utente['email'] }}
                        </p>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</div>