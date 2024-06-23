<x-layout>
    <h1>Create a new product</h1>
    <x-errors />
    <form method="post" action="{{ route('products.store')}}">
        <x-products.form />
    

    </form>
</x-layout>