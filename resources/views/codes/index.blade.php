@extends('mainframe')

@section('content')
    @parent
    <ul>
        <li><a href="{{ route('category.create') }}">创建分类</a></li>
        @if($categories)
        <li><a href="{{ route('code.create') }}">新代码</a></li>
        @endif
    </ul>
@endsection