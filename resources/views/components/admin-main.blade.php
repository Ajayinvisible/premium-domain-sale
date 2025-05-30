@props(['title' => '', 'link' => '', 'linkTitle'=>'', 'icon' => ''])
<section class="section">
    <div class="container-fluid">
        <div class="card p-4">
            <x-admin-card-header :title="$title" :link="$link" :linkTitle="$linkTitle" :icon="$icon" />
            {{ $slot }}
        </div>
    </div>
</section>  