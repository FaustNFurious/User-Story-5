<x-Layout>

    <!-- Success Message when you create a new article -->
    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif


    <div class="px-4 py-5">
        
        <div class="d-flex justify-content-between align-items-center mb-4 text-light">
            
            <h2>Dashboard</h2>

            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-warning">Logout</button>
            </form>

        </div>
        
        <div class="my-5 text-light">
            <h5 class="card-title">Benvenuto, {{ Auth::user()->name }}!</h5>
            <p class="card-text">Email: {{ Auth::user()->email }}</p>
            <p class="card-text">Registrato il: {{ Auth::user()->created_at->format('d/m/Y H:i') }}</p>
        </div>

    </div>


</x-Layout>