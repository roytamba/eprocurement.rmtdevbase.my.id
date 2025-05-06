<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-light" id="dash-daterange" disabled>
                        <span class="input-group-text bg-primary border-primary text-white">
                            <i class="mdi mdi-calendar-range font-13"></i>
                        </span>
                    </div>
                </form>
            </div>

            {{-- Breadcrumb --}}
            <h4 class="page-title">
                {{ end($breadcrumbs)['label'] ?? 'Dashboard' }}
            </h4>
            <ol class="breadcrumb m-0">
                @foreach ($breadcrumbs as $item)
                    @if ($loop->last)
                        <li class="breadcrumb-item active">{{ $item['label'] }}</li>
                    @else
                        <li class="breadcrumb-item">
                            <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                        </li>
                    @endif
                @endforeach
            </ol>
        </div>
    </div>
</div>
