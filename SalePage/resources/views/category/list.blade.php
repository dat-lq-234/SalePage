<h1>Danh sach danh muc san pham</h1>
<div>
    @foreach ($category as $item)
        {{ $item->name }}
        <br/>
    @endforeach
</div>