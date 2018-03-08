<html>
<head>
    <meta charset="utf-8">
    <title>{{ $blade_title }}</title>
    @section('asset')
        <link type="text/css" rel="stylesheet" href="{{ asset('css/codes/common.css') }}?v0.3" />
    @show
</head>
<body>
<div class="frame">
    <div class="header">
        <h1 class="title">银河之浪</h1>
        <ul>
            @if($categories)
            <li><a href="{{ route('code.create') }}">新代码</a></li>
            @endif
            <li class="division"><a href="{{ route('code.index') }}">首页</a></li>
            @foreach ($categories as $item)
            <li><a href="{{ route('code.show',['category_id' => $item['id']]) }}">{{ $item['name'] }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="container">
        @section('content')
        <p class="message">欢迎来到代码仓库。</p>
        @show
    </div>
    <div class="footer">
        <p>Copyright&copy;yinhezhilang&nbsp;&nbsp;&nbsp;&nbsp;2018-?</p>
    </div>
</div>
</body>
</html>
@section('tail')

@show