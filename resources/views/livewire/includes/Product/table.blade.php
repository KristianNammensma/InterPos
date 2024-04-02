<table class="table">
    <thead>
        <tr>
            <th class="mb-0">Gerechtnaam</th>
            <th>Status</th>
            <th>Prijs</th>
            <th>Korting</th>
            <th>BTW</th>
            <th class="text-center">Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <div>

                    @if ($product->id === $editingProductID)
                        <td><input wire:model="name" class="form-control" id="edit-input" type="text"
                                placeholder="Product Name"></td>

                        @error('editingProductName')
                            <span>{{ $message }}</span>
                        @enderror
                    @else
                        <td class="relative">
                            <div class="demo-inline-spacing">
                                <div class="btn-group" id="hover-dropdown-demo">
                                    <div class=" dropdown-toggle mb-2" data-bs-toggle="dropdown" data-trigger="hover">
                                        {{ $product->name }}
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a wire:click="quickEdit({{ $product->id }})" class="dropdown-item"
                                                href="javascript:void(0);"> <i
                                                    class="ti ti-pencil ti-sm mb-0 "></i>Quick Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    @endif


                    @if ($product->id === $editingProductID)
                        <td>
                            <select wire:model="status" class="form-control" id="edit-select">
                                <option class="option" value="Available">Beschikbaar</option>
                                <option class="option" value="Sold">Uitverkocht</option>
                                <option class="option" value="Upcoming"></option>
                            </select>
                        </td>
                        @error('editingProductStatus')
                            <span>{{ $message }}</span>
                        @enderror
                    @else
                        <td><?php
                        if ($product->status == 'Available') {
                            echo 'Beschikbaar';
                        }
                        if ($product->status == 'Sold') {
                            echo 'Uitverkocht';
                        }
                        if ($product->status == 'Upcoming') {
                            echo 'Verwacht';
                        }
                        ?>
                        </td>
                    @endif

                    @if ($product->id === $editingProductID)
                        <td><input wire:model="price" class="form-control" id="edit-input" type="text"
                                placeholder="Product Price"></td>
                        @error('editingProductPrice')
                            <span>{{ $message }}</span>
                        @enderror
                    @else
                        <td>€{{ $product->price }}</td>
                    @endif
                    @if ($product->id === $editingProductID)
                        <td><input wire:model="salesPrice" class="form-control" id="edit-input" type="text"
                                placeholder="Sales Price"></td>
                    @else
                        <td>€{{ $product->salesPrice }}</td>
                    @endif

                    @if ($product->id === $editingProductID)
                        <td>
                            <input class="form-check-input" wire:model='vat' type="checkbox" value=""
                                id="price-charge-tax" checked="">
                        </td>
                    @else
                        <td>{{ $product->vat }}%</td>
                    @endif

                    @if ($product->id === $editingProductID)
                        <td class="d-flex flex-row">
                            <button class="btn-c" wire:click="cancelEdit"><i class="ti ti-x ti-sm"></i></button>
                            <button class="btn-u" wire:click="update({{ $product->id }})"><i
                                    class="ti ti-check ti-sm"></i></button>
                        </td>
                    @else
                        <td class="d-flex flex-row justify-content-center p-3">
                            <div class="m-2" wire:click="clone({{ $product->id }})"><i
                                    class="ti ti-box-multiple ti-md" id="type-success" style="color: blue;"></i></div>
                            <div class="m-2" wire:click="goToAnotherPage({{ $product->id }})"><i
                                    class="ti ti-edit ti-md" style="color: blue;"></i></div>
                            <div class="m-2">
                                <i class="ti ti-trash ti-md" id="confirm-text"
                                    wire:click="delete('{{ $product->id }}')" style="color: red;"></i>
                            </div>
                        </td>
                    @endif
                </div>

            </tr>
        @endforeach
    </tbody>
</table>
