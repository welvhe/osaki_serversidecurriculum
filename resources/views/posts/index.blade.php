@extends('layouts.app')

@section('content')
<div class='container'>
<p class="pull-right"><a class="btn btn-success" href="/create-form">投稿する</a></p>

<h2 class='page-header'>投稿一覧</h2>
<div class="search">
{!! Form::open(['url' => '/']) !!}

<div class="form-group">

{!! Form::input('text', 'search', null, [ 'class' => 'form-control', 'placeholder' => '検索']) !!}

</div>

<button type="submit" class="btn btn-success pull-right">検索</button>

{!! Form::close() !!}


</div>
<table class='table table-hover'>

<tr>

<th>投稿No</th>

<th>投稿内容</th>

<th>投稿日時</th>
<th></th>

</tr>

<?php $count=count($list);?>

@if($count==0)
<h2 class="page-header">検索結果は0件です</h2>
@else
@foreach ($list as $list)

<tr>

<td>{{ $list->id }}</td>

<td>{{ $list->post }}</td>

<td>{{ $list->created_at }}</td>

<td><a class="btn btn-primary" href="/post/{{ $list->id }}/update-form">編集</a></td>
<td><a class="btn btn-danger" href="/post/{{ $list->id }}/delete" onclick="return confirm('削除しますか？')">削除</a></td>

</tr>
@endforeach
@endif

</table>

</div>
@endsection
