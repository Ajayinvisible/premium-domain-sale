<div class="col-lg-6">
    <x-admin-form-input name="name" label="Name" :value="$category->name ?? ''" placeholder="Enter category name" required />
</div>
<div class="col-lg-6">
    <x-admin-form-input name="slug" label="Slug" :value="$category->slug ?? ''" placeholder="Enter category slug" required readonly/>
</div>
<div class="col-lg-12">
    <x-admin-form-textarea name="description" label="Description" :value="$category->description ?? ''" placeholder="Enter category description" />
</div>