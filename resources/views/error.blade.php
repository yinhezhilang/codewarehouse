@extends('mainframe')

@section('content')
    <div class="message">
        {{ $message }}
    </div>
@endsection

@section('asset')
    @parent
    <style type="text/css">
        .message {
            margin-top: 30px;
        }
    </style>
@endsection