<div class="product-price position-relative   d-flex flex-column flex-shrink-1 ">
    @error('price')
        <p>{{ $message }}</p>
    @enderror

    <div class="d-flex position-absolute top-1 align-content-end justify-content-end w-75 ">
        <i class="ti ti-info-square-rounded-filled ti-sm btn btn-info m-0 p-1 bg-dark  " id="type-info"></i>
    </div>

    <div class="info">
        <h4><i class="ti ti-cash ti-sm"></i> Prijs / Optioneel <i class="ti ti-check ti-sm"></i></h4>
    </div>



    <div class="mb-3 mt-3">
        <div class="form-price">

            <h6 class="mb-2 mt-2">Hoofdeigenschap <span class="badge bg-label-danger mb-1 ">Optioneel</span>
            </h6>

            <div class="input-group input-group-sm mb-4">
                <label class="input-group-text" for="inputGroupSelect01"><i class="ti-md ti ti-link"></i></label>
                <select wire:model="parentId" class="form-control w-75" id="inputGroupSelect01">
                    <option class="option" value="" hidden selected>Kies een optie</option>
                    @foreach ($allAttributes as $a)
                        @if ($a->parentId === 0)
                            <option class="option" value="{{ $a->id }}">
                                {{ $a->name }}
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>

            <hr>

            <h6 class="mb-2  mt-4">Selecteer een Product <span class="badge bg-label-danger mb-1">Optioneel</span>
            </h6>

            <div class="input-group input-group-sm mb-4">
                <select class="form-select" multiple aria-label="Multiple select example">
                    @foreach ($allProducts as $c)
                        <option id="{{ $c->id }}" value="{{ $c->id }}"> {{ $c->name }} </option>
                    @endforeach
                </select>

            </div>

            <hr>

            <div class="form-tax d-flex flex-row">
                <div class="form-price mt-3">
                    <label for="price" class="form-label"><i class="ti ti-currency-euro ti-sm"></i> Prijs <span
                            class="badge bg-label-danger mb-1">Optioneel</span></label>

                    <div class=" input-group d-flex  flex-wrap-reverse ">
                        <input type="text" class="form-control w-50 " wire:model='price'
                            aria-label="Dollar amount (with dot and two decimal places)">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                </div>
            </div>


            <hr>


        </div>

    </div>
