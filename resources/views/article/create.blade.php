<x-Layout>



    <div class="container-fluid">

        <div class="row justify-content-center my-5">
            <div class="col-12 text-center">
                <h2 class="display-5 text-white">Pubblica un nuovo articolo</h2>
            </div>
        </div>

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <div class="card">

                    <!-- Card Header and Body, creation form -->
                    <div class="card-header">
                        <h4 class="mb-0">Crea Nuovo Articolo</h4>
                    </div>
                    <div class="card-body">
                        <livewire:create-article />
                    </div>

                </div>
            </div>
        </div>

    </div>
    


</x-Layout>