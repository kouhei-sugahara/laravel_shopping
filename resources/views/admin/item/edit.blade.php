@extends('layouts.app')

@section('content')
<h2>{{__('Item Egit')}}</h2>
<a href="{{route('admin.item.index')}}">{{__('Back')}}</a>

<form action="{{route('admin.item.update',$item->id)}}" method="post">
    @csrf

    <div>
        <input class="form-controll" type="text" name="name" value="{{ $item->name }}">
        <label for="">{{__('label.item_name')}}</label>
    </div>
    <div>
        <input class="form-controll" type="text" name="code" value="{{ $item->code }}">
        <label for="">{{__('label.item_code')}}</label>
    </div>
    <div>
        <input class="form-controll" type="number" name="price" value="{{ $item->price }}">
        <label for="">{{__('label.price')}}</label>
    </div>
    <div>
        <input class="form-controll" type="number" name="stock" value="{{ $item->stock }}">
        <label for="">{{__('label.stock')}}</label>
    </div>

    <button class="btn btn-outline-primary">{{__('Update')}}</button>
    <a class="btn btn-outline-primary" href="{{route('admin.item.index')}}">{{</a>
</form>