<div>
    <header class="bg-light py-3 px-4 z-1 bg-body-secondary">
        <form class="row align-items-center h-100" role="search">
            <div class="col-md-7">
                <div class="input-group mb-3 my-3 me-4">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span>
                    <input type="text"
                           wire:model.live="search"
                           class="form-control bg-white"
                           placeholder="Search building by name"
                           aria-label="search room"
                           aria-describedby="search-addon"
                    >
                </div>
            </div>

            <div class="col-md-5" wire:ignore>
                <select class="form-select" id="basic-usage" data-placeholder="Choose Location">
                    <option></option>
                    <option>Medan</option>
                    <option>Jakarta Selatan</option>
                </select>
            </div>
        </form>
    </header>
    <div class="row p-4 gx-4 gy-4">
        @foreach($rooms as $room)
            <div class="col-6" wire:key="{{ $room->id }}">
                <div class="card bg-white">
                    <a href="{{ route('rooms.show', $room->slug) }}"
                       class="text-decoration-none text-dark">
                        <div class="overflow-hidden img-building">
                            <img
                                src="{{
                                    count($room->images) > 0  &&
                                    Storage::exists('public/' . $room->images->first()->image) ?
                                    Storage::url($room->images->first()->image) :
                                    $room->images->first()?->image
                                }}"
                                class="card-img-top img-fluid"
                                alt="{{ count($room->images) > 0 ? $room->images->first()?->image : '' }}">
                        </div>
                        <div class="card-body">
                            <p class="text-secondary">
                                <i class="bi bi-star-fill text-warning"></i>
                                4.1/5 (13 Reviews)
                            </p>
                            <h5 class="card-title fw-bold">{{ $room->name }}</h5>
                            <p class="card-text">
                                {{ $room->address }}
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('addon-scripts')
    <script type="module">
        $("#basic-usage").select2({
            theme: "bootstrap-5",
        });
    </script>
@endpush
