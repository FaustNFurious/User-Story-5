<x-Layout>


    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card">

                    <div class="card-header">
                        <h4 class="mb-0">Login</h4>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Ricordami</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Accedi</button>
                            </div>

                        </form>

                        <div class="text-center mt-3">
                            <a href="{{ route('register') }}" class="text-decoration-none">Non hai un account? Registrati</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </div>


</x-Layout>