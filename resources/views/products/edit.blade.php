<x-layout>
    <h1>Edit a product</h1>

    <form method="post" action="{{ route('products.update', $product) }}">
        @method('PATCH')
        <x-products.form  :product="$product"/>
    

    </form>
</x-layout>