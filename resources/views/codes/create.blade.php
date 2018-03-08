@extends('mainframe')

@section('content')
    <form method="post" action="{{ route('code.create') }}">
        {{ csrf_field() }}
        <div class="input-box">
            <label for="category">分类：</label>
            <select name="category" id="category">
                @foreach($categories as $value)
                    <option value="{{ $value['id'] }}">{{ $value['name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-box">
            <label for="catalog">目录：</label>
            <input type="text" name="catalog" id="catalog" />
        </div>
        <div class="input-box">
            <label for="title">标题：</label>
            <input type="text" name="title" id="title" />
        </div>
        <div class="input-box">
            <label for="description">描述：</label>
            <input type="text" name="description" id="description" />
        </div>
        <div class="input-box">
            <label class="code" for="code">code：</label>
            <textarea name="code" id="code"></textarea>
        </div>
        <div class="input-box input-submit">
            <input class="submit" type="submit" value="提交" />
        </div>
    </form>
@endsection

@section('asset')
    @parent
    <style type="text/css">
        .input-box {
            display: block;
            margin: 20px 0;
        }
        .input-box label.code {
            vertical-align: top;
        }
        .input-box input {
            height: 2.2em;
            width: 700px;
            font-size: 0.9em;
            border: 1px #c8cbcf solid;
            border-radius: 4px;
        }
        .input-box input.category {
            color: #636b6f;
            background-color: #e2e3e5;
            width: 80px;
        }
        .input-box textarea {
            height: 400px;
            width: 700px;
            font-family: Menlo,Monaco,Consolas,"Andale Mono","lucida console","Courier New",monospace;
        }
        .input-box input.submit {
            width: 60px;
            cursor: pointer;
            margin-left: 380px;
        }
    </style>
@endsection