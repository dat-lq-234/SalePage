<h1>Them san pham</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Product name: </label>
        <input type="text" name="name"/>
    </div>
    <div>
        <label for="Price">Price of Product: </label>
        <input type="double" name="price"/>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>