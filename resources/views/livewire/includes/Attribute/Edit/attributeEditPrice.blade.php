<div class="product-price  d-flex flex-column flex-shrink-1 ">
    @error('price')
        <p>{{ $message }}</p>
    @enderror

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

                    <option class="option" value="" hidden selected>Nog geen optie gekozen</option>
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

            <h6 class="mb-2  mt-4">Geselecteerde Producten <span class="badge bg-label-danger mb-1">Optioneel</span>
            </h6>

            <div class="input-group input-group-sm mb-4">

                <select id="selectpickerMultiple" wire:model="selectedProducts" class="selectpicker w-100"
                    data-style="btn-default" multiple data-icon-base="ti" data-tick-icon="ti-check text-white">
                    @foreach ($allProducts as $c)
                        @if (in_array($c->id, $attributeProductIds))
                            <option selected id="{{ $c->id }}" value="{{ $c->id }}">
                                {{ $c->name }}
                            </option>
                        @else
                            <option id="{{ $c->id }}" value="{{ $c->id }}"> {{ $c->name }} </option>
                        @endif
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
