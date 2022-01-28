<h2>商品一覧</h2>
<a href="{{route('admin.item.create')}}">商品追加</a>

<table>
    <tr>
        <th></th>
        <th>{{__('label.item_name')}}</th>
        <th>{{__('label.item_code')}}</th>
        <th>{{__('label.price')}}</th>
    </tr>

    @if($items)
    @foreach($items as $item)
    <tr>
        <td></td>
        <td>{{$item->name}}</td>
        <td>{{$item->code}}</td>
        <td>{{$item->price}}</td>
    </tr>
    @endforeach
    @endif
</table>