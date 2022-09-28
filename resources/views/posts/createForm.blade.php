@extends('layouts.app')
@section('content')
<div class='container'>

<h2 class='page-header'>新しく投稿をする</h2>
@if($errors->any())
@foreach ($errors->all() as $error)
  <li>{{$error}}</li>
@endforeach
@endif
{!! Form::open(['url' => 'post/create']) !!}

<div class="form-group">

{!! Form::input('text', 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '投稿内容']) !!}

</div>

<button type="submit" class="btn btn-success pull-right">追加</button>

{!! Form::close() !!}

</div>

@endsection
