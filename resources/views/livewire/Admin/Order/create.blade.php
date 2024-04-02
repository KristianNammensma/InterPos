<div class="card-body flex-column ">

    @if (session('success'))
        <span class="success-msg">{{ session('success') }}</span>
    @endif



    <form class="form-body" wire:submit=''>

        <div wire:ignore id="sticky-wrapper" class="sticky-wrapper flex-shrink-1 position-relative  ">
            <div
                class="submit-f bg-label-secondary sticky-element
          d-flex justify-content-between align-items-sm-center flex-column flex-sm-row text-center mt-5">
                <ul class="nav nav-pills card-header-pills" role="tablist">

                    <li class="nav-item">
                        <button type="button" class="nav-link active" wire:click="sort(0)" role="tab"
                            data-bs-toggle="tab" data-bs-target="#navs-pills-tab-all" aria-controls="navs-pills-tab-all"
                            aria-selected="true">
                            All
                        </button>
                    </li>

                    @foreach ($categories as $categorie)
                        <li class="nav-item">
                            <button type="button" class="nav-link" wire:click="sort({{ $categorie->id }})"
                                role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-tab-{{ $categorie->name }}"
                                aria-controls="navs-pills-tab-{{ $categorie->name }}" aria-selected="false">
                                {{ $categorie->name }}
                            </button>
                        </li>
                    @endforeach

                </ul>
            </div>

            <div class="shopping  bg-primary text-white " data-bs-toggle="offcanvas" data-bs-target="#offcanvasEnd"
                aria-controls="offcanvasEnd" wire:click="openCart()">
                <i class="ti ti-shopping-cart ti-sm"></i>
            </div>

        </div>


        <div class="d-flex flex-row flex-wrap justify-content-start ">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-2 m-4 ms-0">
                        <div class="row g-0">

                            <div class="col-md-12 h-100">
                                <div class="card-body pt-3">
                                    <div class="p-0 w-100">
                                        <div class="tab-pane fade show active " id="navs-pills-tab-home"
                                            role="tabpanel">
                                            <div class="d-flex flex-row justify-content-between align-items-center">
                                                <i class="ti ti-soup ti-sm"></i>
                                                <h4 class="m-0">{{ $product->name }}</h4>
                                                    <i class="ti ti-square-rounded-plus ti-sm" wire:click="selectProduct({{ $product->id }})"></i>
                                            </div>

                                            <hr>

                                            <div class="d-flex justify-content-between ">
                                                <p class="card-text">
                                                    {{ $product->description }}
                                                </p>

                                                <p class="card-text">
                                                    €{{ $product->price }}
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <x-modal name="test" Title="Zie Gerecht">
                <x-slot:body>


                    <div class="offcanvas-header d-flex justify-content-center flex-column text-center">
                        <h5 id="offcanvasTopLabel" class="offcanvas-title ">
                            {{ $selectedProduct->name ?? '' }}
                        </h5>
                    </div>
                    <!-- Andere offcanvas-inhoud -->

                    <div
                        class="offcanvas-body w-100 d-flex justify-content-center align-items-center  flex-column text-center">
                        <div class="w-50">
                            <div class="d-flex justify-content-center align-items-center flex-column ">
                                <p>Hoeveelheid</p>
                                <input class="form-control w-25" id="defaultFormControlInput" type="number"
                                    wire:model="quantity.{{ $selectedProduct->id ?? '' }}" min="1"
                                    max="100">
                            </div>


                            <div class="input-group input-group-sm mb-4">
                                <p>Ingredienten</p>

                                <div class="mb-3">
                                    <label for="selectpickerMultiple" class="form-label">Multiple</label>
                                    <select id="selectpickerMultiple" class="selectpicker w-100"
                                        data-style="btn-default" multiple data-icon-base="ti"
                                        data-tick-icon="ti-check text-white">
                                        <option>Rocky</option>
                                        <option>Pulp Fiction</option>
                                        <option>The Godfather</option>
                                    </select>
                                </div>
                            </div>

                            <button type="button" wire:click="addToCart({{ $selectedProductId ?? '20' }})"
                                class="btn btn-primary me-2">Toevoegen</button>
                            <button type="button" class="btn btn-label-secondary" wire:click="close()">Annuleren</button>
                        </div>

                        <script>
                            window.addEventListener('alert', (event) => {
                          let data = event.detail

                          Swal.fire({
                              position: data.position,
                              icon: data.type,
                              title: data.title,
                              timer: data.timer,
                              showCancelButton: false,
                              showConfirmButton: false
                          });
                        });
                        </script>



                    </div>
                </x-slot:body>
            </x-modal>


        </div>




    </form>


</div>
