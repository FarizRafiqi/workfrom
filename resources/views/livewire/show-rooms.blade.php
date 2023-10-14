<div>
    <header class="bg-light py-3 px-4 z-1 bg-body-secondary">
        <form class="row align-items-center h-100" role="search">
            <div class="col-md-8">
                <div class="input-group mb-3 my-3 me-4">
                <span class="input-group-text" id="basic-addon1">
                    <i class="bi bi-search"></i>
                </span>
                    <input type="text"
                           wire:model.live="search"
                           class="form-control bg-white"
                           placeholder="Search room by name"
                           aria-label="search room"
                           aria-describedby="search-addon"
                    >
                </div>
            </div>

            <div class="col-md-4">
                <div class="dropdown">
                    <button class="btn btn-light w-100 text-start" type="button" data-bs-toggle="dropdown"
                            data-bs-display="static" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="bi bi-filter"></i>
                        Filter
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg-end px-3 py-2 dropdown-menu-filter">
                        <!-- Form untuk filter -->
                        <form action="#" method="GET">
                            <div class="row mb-3 gy-2">
                                <!-- Filter Use Case -->
                                <div class="col-12">
                                    <label for="use_case" class="form-label">Use Case</label>
                                    <select class="form-select" id="use_case" name="use_case">
                                        <option value="all">All</option>
                                        @foreach($useCases as $useCase)
                                            @if ($useCase->parent_id === null)
                                                <optgroup label="{{ $useCase->name }}">
                                                    @foreach ($useCases as $childUseCase)
                                                        @if ($childUseCase->parent_id === $useCase->id)
                                                            <option value="{{ $childUseCase->id }}">
                                                                {{ $childUseCase->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </optgroup>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Filter Kapasitas -->
                                <div class="col-12">
                                    <label for="kapasitas" class="form-label">Kapasitas</label>
                                    <div class="row mb-3" id="harga">
                                        <span class="col-2 text-center">{{ $minCap }}</span>
                                        <div class="col-8">
                                            <input type="range"
                                                   wire:model="capacity"
                                                   class="form-range"
                                                   min="20"
                                                   max="500"
                                                   step="1"
                                                   value="{{ $capacity }}"
                                                   name="capacity"
                                                   id="kapasitas"
                                            >
                                        </div>
                                        <span class="col-2 text-center">{{ $maxCap }}</span>
                                    </div>
                                    {{ $capacity }}
                                </div>

                                <!-- Filter Harga -->
                                <div class="col-12">
                                    <label for="harga" class="form-label">Harga</label>
                                    <div class="input-group mb-3" id="harga">
                                        <input type="text" name="price_min" class="form-control" placeholder="Min">
                                        <span class="input-group-text"><i class="bi bi-dash"></i></span>
                                        <input type="text" name="price_max" class="form-control" placeholder="Max">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success text-white px-4">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </header>
    <div class="row p-4 gx-4 gy-4">
        @foreach($rooms as $room)
            <div class="col-12 col-md-6" wire:key="{{ $room->id }}">
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
                            <h5 class="card-title fw-bold">{{ \Str::title($room->name) }}</h5>
                            <p class="card-text">
                                {{ \Str::limit($room->address, 100) }}
                            </p>
                            <div>
                                <div>
                                    <span class="fs-4 fw-bold lead">@rupiah($room->price)</span>/Jam
                                </div>
                                @foreach($room->useCases as $useCase)
                                    <div
                                        class="badge badge-pill bg-success-subtle mt-2 p-2 text-success border border-success">
                                        {{ $useCase->name }}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('addon-scripts')
    <script type="module">
        $("#use_case").select2({
            theme: "bootstrap-5",
        });
    </script>
@endpush
