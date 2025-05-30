@props(['title' => '', 'link' => '', 'linkTitle'=>''])
<section class="section">
    <div class="container-fluid">
        <div class="card p-4">
            <x-admin-card-header :title="$title" :link="$link" :linkTitle="$linkTitle" />
            {{ $slot }}
        </div>
    </div>
</section>  