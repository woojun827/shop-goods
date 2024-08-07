<div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">

    @foreach ($rows as $i => $item)
    <div class="col mb-5 mb-5 mb-xl-0">
        <div class="text-center">
            @if(isset($item['image']))
            <img class="w-24 mb-4 px-4"
                src="{{$item['image']}}"
                alt="..." />
            @else
            <img class="w-24 mb-4 px-4"
                src="https://dummyimage.com/150x150/ced4da/6c757d"
                alt="..." />
            @endif
            <h5 class="fw-bolder" wire:click="edit({{$i}})">{{$item['name']}}</h5>

        </div>
    </div>
    @endforeach

</div>
