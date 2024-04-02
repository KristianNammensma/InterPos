@props(['name', 'title'])

<div x-data = "{ show : false , name : '{{ $name }}'}" x-show= "show"
    x-on:open-modal.window = "show = ($event.detail.name === name)"
    x-on:close-modal.window = "show = !($event.detail.name === name)" x-on:keydown.escape.window = "show = false"
    x-transition.duration.200ms class="position-fixed  w-100 h-100 m-0 p-0 top-0"
    style="left:0; z-index: 500000; display:none;">
    <div x-on:click="show = false" class="position-fixed w-100 h-100 m-0 p-0 bg-black opacity-25 "></div>

    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="card  position-fixed p-4 w-50 h-50">
            <div>
                @if (isset($title))
                    <div class="p-2 d-flex justify-content-center align-items-center">
                        {{ $title }}
                    </div>
                @endif
            </div>
            <div>
                {{ $body }}
            </div>
        </div>
    </div>


</div>
