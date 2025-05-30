<div class="card-header flex justify-content-between align-items-center">
    <h4 class="card-title">
        {{ $title }}
    </h4>
    @if ($link)
        <a href="{{ $link }}" class="btn btn-primary">{{ $linkTitle }}</a>
    @endif
</div>
