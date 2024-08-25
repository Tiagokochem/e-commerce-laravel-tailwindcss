<div class="grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-4">
    @if ($products->count() > 0)
        @foreach ($products as $product)
            <livewire:item-card :product_details="$product" wire:key="{{ $product->id }}"/>
        @endforeach
    @else
        <h2 class="text-2xl text-gray-300">No product Avaliable</h2>
    @endif
</div>
