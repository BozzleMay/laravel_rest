@csrf
        
        <label for="name">Product name</label>
        <input type="text" name="name" placeholder="Product name" value="{{ old('name', $product->name ?? '') }}" />

        <label for="description">Product description</label>
        <textarea name="description" placeholder="Product description">{{ old('description', $product->description ?? '') }}</textarea>

        <label for="size">
        <input type="text" name="size" id="size" placeholder="Size" value="{{ old('size', $product->size ?? '') }}" /> 

        <button>Create</button>