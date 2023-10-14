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
        @foreach($buildings as $building)
            <div class="col-12 col-md-6" wire:key="{{ $building->id }}">
                <div class="card bg-white">
                    <a href="{{ route('buildings.show', $building->slug) }}"
                       class="text-decoration-none text-dark">
                        <div class="overflow-hidden img-building">
                            <img
                                src="{{
                                    count($building->images) > 0 &&
                                    Storage::exists('public/' . $building->images->first()?->image) ?
                                    Storage::url($building->images->first()?->image) :
                                    'https://source.unsplash.com/320x250?building+' . $loop->index
                                }}"
                                class="card-img-top img-fluid"
                                alt="{{ count($building->images) > 0 ? $building->images->first()?->image : '' }}">
                        </div>
                        <div class="card-body">
                            <p class="text-secondary">
                                <i class="bi bi-star-fill text-warning"></i>
                                4.1/5 (13 Reviews)
                            </p>
                            <h5 class="card-title fw-bold">{{ $building->name }}</h5>
                            <p class="card-text">
                                {{ $building->address }}
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
