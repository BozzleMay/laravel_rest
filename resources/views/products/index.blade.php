<x-layout>
    <x-slot name="title">Products</x-slot>
    <h1>Products</h1>
    <a href="{{ route('products.create') }}">Products</a> 
    <?php foreach ($products as $product) : ?>
        <article>
            <a href="{{ route('products.show', $product->id) }}">
                <h2><?= htmlspecialchars($product->name) ?></h2>
            </a>
            <p><?= htmlspecialchars($product->price); ?></p>
            <p><?= htmlspecialchars($product->description); ?></p>
        </article>
    <?php endforeach; ?>
    {{ $products->links('vendor/pagination/simple-default') }}
</x-layout>