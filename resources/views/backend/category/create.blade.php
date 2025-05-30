<x-app-layout title="Category Create" link="{{ route('category.create') }}" linkTitle="Category" icon="fa-solid fa-circle-info">
    <div class="card-body">
        <div class="row">
            @include('backend.category.partials.__category-form')
        </div>
    </div>
</x-app-layout>