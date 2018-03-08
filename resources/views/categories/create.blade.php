@extends('mainframe')

@section('content')
    <form method="post" action="{{ route('category.create') }}">
        {{ csrf_field() }}
        <div class="input-box">
            <label for="category">分类：</label>
            <input type="text" name="category" id="category" />
        </div>
        <div class="input-box input-submit">
            <input class="submit" type="submit" value="提交" />
        </div>
    </form>
@endsection

@section('asset')
    @parent
    <style type="text/css">
        form {
            margin-top: 50px;
        }
        .input-box {
            display: block;
            margin: 20px 0;
        }
        .input-box label.code {
            vertical-align: top;
        }
        .input-box input {
            height: 2.2em;
            width: 350px;
            font-size: 0.9em;
            border: 1px #c8cbcf solid;
            border-radius: 4px;
        }
        .input-box input.submit {
            width: 60px;
            margin-top: 10px;
            cursor: pointer;
            margin-left: 50px;
        }
    </style>
@endsection