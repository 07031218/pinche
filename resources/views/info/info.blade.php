@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $title ?? '拼车信息表' }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="ibox-content">
                        {!! $edit !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
