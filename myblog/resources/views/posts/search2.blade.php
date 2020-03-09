<?php session_start();?>

<?PHP

if (isset($_SESSION['customer'])) {
    require'../require/after-header.php';

} else {
    require'../require/before-header.php';

}?>

@extends('layouts.default')

@section('title', 'Blog Posts')


@section('content')
<h1><div class="row"></div>出力結果</h1>

<p>

@forelse ($recordwords as $recordword)
  <li>
    <a href="{{ action('PostsController@show', $recordword) }}">{{ $recordword->title }}</a>
    <a href="{{ action('PostsController@edit', $recordword) }}" class="edit">[Edit]</a>
    <a href="#" class="del" data-id="{{ $recordword->id }}">[x]</a>
      <form method="post" action="{{ url('/posts', $recordword->id) }}" id="form_{{ $recordword->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>
  @empty
@endforelse
  
</p>

<div class="search-text"> 
   <div class="container">
        <div class="row text-center">
            <div class="form">
                <form action="/search2" method="post" id="search-form" class="form-search form-horizontal">
                @csrf
                    <input type="text" name="word" class="input-search" placeholder="ICO名を入力してください">
                    <button type="submit" class="btn-search">Search</button>
                </form>
            </div>
        </div>         
   </div>     
</div>


@foreach (range('a', 'z') as $i)
<a href="{{ route('posts.az', ['initial' => $i]) }}">{{ $i }}</a>
@endforeach

</br>
</br>
</br>

@endsection

@section('test')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">番号</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">ICO名</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">編集</th>
      <th scope="col-xs-3 col-sm-6 col-md-3 col-lg-3" class="green">削除</th>
    </tr>
</thead>

<tbody>
    @forelse ($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td><a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a></td>
      <td><a href="{{ action('PostsController@edit', $post) }}" class="edit">[Edit]</a></td>
      <td> <a href="#" class="del" data-id="{{ $post->id }}">[x]</a>
      <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
      </td>
    </tr>
    @empty
    @endforelse
</tbody>
</table>

</div>

<p class="example">
<!-- CSVダウンロード -->
<button><a href="posts/csv" class="button">csvダウンロード<a></button>
</p>


<?PHP
require'../require/footer.php';
?>

@endsection






                            
