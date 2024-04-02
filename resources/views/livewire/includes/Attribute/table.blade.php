    <table class="table">
        <thead>
            <tr>
                <th class="mb-0">HoofdEigenschap naam</th>
                <th>status</th>
                <th>id</th>
                <th class="text-center">Acties</th>
            </tr>
        </thead>
        <tbody>
            @if (session()->has('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif

            @foreach ($Attribute as $Attribute)
                @if ($Attribute->parentId === 0)
                    <tr>
                        <div>

                            @if ($Attribute->id === $editingAttributeID)
                                <td>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">@</label>
                                        <input type="text" wire:model="name" class="form-control mb-0"
                                            aria-label="Dollar amount (with dot and two decimal places)">
                                    </div>
                                </td>

                                {{-- @error('editingProductName')
                                <span>{{ $message }}</span>
                            @enderror --}}
                            @else
                                <td class="relative">
                                    <div class="demo-inline-spacing">
                                        <div class="btn-group" id="hover-dropdown-demo">
                                            <div class=" dropdown-toggle mb-2" data-bs-toggle="dropdown"
                                                data-trigger="hover">
                                                {{ $Attribute->name }}
                                            </div>
                                            <ul class="dropdown-menu">
                                                <li><a wire:click="quickEdit({{ $Attribute->id }})"
                                                        class="dropdown-item" href="javascript:void(0);"> <i
                                                            class="ti ti-pencil ti-sm mb-0 "></i>Quick Edit</a></li>
                                                <hr>
                                                <li><a wire:click="subAttribute({{ $Attribute->id }}, '{{ $Attribute->name }}')"
                                                        class="dropdown-item" href="javascript:void(0);">Sub
                                                        Eigenshappen</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            @endif


                            @if ($Attribute->id === $editingAttributeID)
                                <td>
                                    <select wire:model="status" class="form-control" id="edit-select">
                                        <option class="option" value="Available">Beschikbaar</option>
                                        <option class="option" value="Sold">Uitverkocht</option>
                                        <option class="option" value="Upcoming">Verwacht</option>
                                    </select>
                                </td>
                                {{-- @error('editingAttributePrice')
                                <span>{{ $message }}</span>
                            @enderror --}}
                            @else
                                <td>
                                    <?php
                                    if ($Attribute->status == 'Available') {
                                        echo 'Beschikbaar';
                                    }
                                    if ($Attribute->status == 'Sold') {
                                        echo 'Uitverkocht';
                                    }
                                    if ($Attribute->status == 'Upcoming') {
                                        echo 'Verwacht';
                                    }
                                    ?>
                                </td>
                            @endif


                            @if ($Attribute->id === $editingAttributeID)
                                <td>

                                    @if ($Attribute->parentId !== 0)
                                        <p class="mb-0 text-muted"><span class="badge bg-label-success">child id:
                                                {{ $Attribute->parentId }}</span>
                                        </p>
                                    @else
                                        <span class="badge bg-label-danger">Parent id: {{ $Attribute->id }}</span>
                                    @endif

                                </td>
                            @else
                                <td>
                                    @if ($Attribute->parentId !== 0)
                                        <span class="badge bg-label-success">child id:
                                            {{ $Attribute->parentId }}</span>
                                    @else
                                        <span class="badge bg-label-danger">Parent id: {{ $Attribute->id }}</span>
                                    @endif
                                </td>
                            @endif

                            @if ($Attribute->id === $editingAttributeID)
                                <td class="d-flex flex-row">
                                    <button class="btn-c" wire:click="cancelEdit"><i
                                            class="ti ti-x ti-sm"></i></button>
                                    <button class="btn-u" wire:click="update({{ $Attribute->id }})"><i
                                            class="ti ti-check ti-sm"></i></button>
                                </td>
                            @else
                                <td class="d-flex flex-row justify-content-center p-3">
                                    <div class="m-2" wire:click="clone({{ $Attribute->id }})"><i
                                            class="ti ti-box-multiple ti-md" style="color: blue;"></i></div>
                                    <div class="m-2" wire:click="goToAnotherPage({{ $Attribute->id }})"><i
                                            class="ti ti-edit ti-md" style="color: blue;"></i></div>
                                    <div class="m-2"><i class="ti ti-trash ti-md"
                                            wire:click="delete({{ $Attribute->id }})"
                                            wire:confirm="Weet je zeker dat je deze post wilt verwijderen?"
                                            style="color: red;"></i></div>
                                </td>
                            @endif
                        </div>

                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
