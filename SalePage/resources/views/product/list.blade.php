<h1>Danh sach cac san pham</h1>
<div>
    @foreach ($products as $item)
        {{ $item->name }}
        <br/>
    @endforeach
</div>