<table class="table">
    <thead>
        <tr>
            <th class="mb-0">Categorienaam</th>
            <th>Status</th>
            <th class="text-center">Acties</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $category)
            <tr>
                <div>

                    @if ($category->id === $editingCategoryID)
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
                                        {{ $category->name }}
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a wire:click="quickEdit({{ $category->id }})" class="dropdown-item"
                                                href="javascript:void(0);"> <i
                                                    class="ti ti-pencil ti-sm mb-0 "></i>Quick Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    @endif


                    @if ($category->id === $editingCategoryID)
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
                        if ($category->status == 'Available') {
                            echo 'Beschikbaar';
                        }
                        if ($category->status == 'Sold') {
                            echo 'Uitverkocht';
                        }
                        if ($category->status == 'Upcoming') {
                            echo 'Verwacht';
                        }
                        ?>
                        </td>
                    @endif




                    @if ($category->id === $editingCategoryID)
                        <td class="d-flex flex-row">
                            <button class="btn-c" wire:click="cancelEdit"><i class="ti ti-x ti-sm"></i></button>
                            <button class="btn-u" wire:click="updateCategory({{ $category->id }})"><i
                                    class="ti ti-check ti-sm"></i></button>
                        </td>
                    @else
                        <td class="d-flex flex-row justify-content-center p-3">
                            <div class="m-2" wire:click="clone({{ $category->id }})"><i
                                    class="ti ti-box-multiple ti-md" id="type-success" style="color: blue;"></i></div>
                            <div class="m-2" wire:click="goToAnotherPage({{ $category->id }})"><i
                                    class="ti ti-edit ti-md" style="color: blue;"></i></div>
                            <div class="m-2">
                                <i class="ti ti-trash ti-md" id="confirm-text"
                                    wire:click="delete('{{ $category->id }}')" style="color: red;"></i>
                            </div>
                        </td>
                    @endif
                </div>

            </tr>
        @endforeach
    </tbody>
</table>
