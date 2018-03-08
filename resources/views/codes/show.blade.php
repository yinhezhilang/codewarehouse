@extends('mainframe')

@section('content')
    <div class="left">
        <ul>
            @foreach($codes as $value)
                <li>
                    <a href="{{ route('code.show', [
                                            'category_id' => $value->category_id,
                                            'code_id' => $value->id,
                                            ]) }}">
                        {{ $value->catalog }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="right">
        @if($code)
            <div class="edit"><a href="{{ route('code.modify', $code->id) }}">编辑</a></div>
            <h4>标题：{{ $code->title }}</h4>
            <p class="description">描述：{{ $code->description }}</p>
            <div class="copy">
                <textarea id="src_code">{!! $code->code !!}</textarea>
                <button class="btn" data-clipboard-action="copy" data-clipboard-target="#src_code">复制</button>
                <script type="text/javascript" src="{{ asset('js/clipboard/min.js') }}"></script>
                <script>
                    var clipboard = new ClipboardJS('.btn');

                    clipboard.on('success', function(e) {
                        alert('复制成功！');
                    });
                </script>
            </div>
            <div class="code">
                <pre>
                    <code>{{ $code->code }}</code>
                </pre>
            </div>
        @endif
    </div>
@endsection

@section('asset')
    @parent
    <link type="text/css" rel="stylesheet" href="{{ asset('css/highlight/monokai.css') }}?v0.1" />
    <script type="text/javascript" src="{{ asset('js/jquery/jquery-3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/highlight.pack.js') }}?v0.1"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
    <style type="text/css">
        .left {
            float: left;
            width: 200px;
            min-height: 80px;
            padding: 10px 0;
            border: 1px solid #636b6f;
        }
        .right {
            margin: 20px 0 0 220px;
            padding: 10px;
            min-height: 360px;
            border: 1px solid #636b6f;
        }
        .right h4 {
            margin: 10px 0;
        }
        .right .description {
            font-size: 14px;
            margin-bottom: 28px;
        }
        .edit {
            margin-left: 200px;
        }
        .copy {
            position: relative;
            top: 30px;
        }
        #src_code {
            width: 1px;
            height: 1px;
            position: relative;
            left: 10px;
            z-index: -1;
        }
    </style>
@endsection