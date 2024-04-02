<div>
    <div class="col-lg-2 col-md-4">
        <div class="mt-3">
            <div class="offcanvas offcanvas-end @if ($showOffcanvas) show @endif w-25" tabindex="-1"
                id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasEndLabel" class="offcanvas-title">Bestelling</h5>
                    <h5 class="m-0 ms-3">{{ $cartCounter }} Items</h5>
                    <button type="button" class="btn-close text-reset" wire:click="close()" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div>
                    <hr>
                </div>
                <div class="">
                    @foreach ($cartItems as $item)
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th class="mb-0">Gerecht</th>
                                        <th>Hoeveelheid</th>
                                        <th>Prijs</th>
                                        <th class="text-center">Totaal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="">
                                                <p class="text-black fw-bold fs-6 ">
                                                    {{ $item['product']['name'] }}
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p>{{ $item['product']['qty'] }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <p class="text-black fw-bold fs-6  ">
                                                    €{{ $item['product']['price'] }}
                                                </p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <p class="text-black fw-bold ">
                                                    €{{ $item['product']['price'] }}</p>
                                                <button wire:click="up()"></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
