<x-layout>
    <h1>Welcome</h1>
    <p>{{ $product->name }}</p>  
    <p>{{ $product->description }}</p> 
    <p>{{ $product->size }}</p> 
    <a href="{{ route('products.edit', $product) }}">Edit</a>
    <form method="post" action="{{ route('products.destroy', $product) }}">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</x-layout>     