<h1>Them danh muc san pham</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Category name: </label>
        <input type="text" name="name"/>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>