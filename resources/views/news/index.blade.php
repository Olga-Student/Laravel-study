@extends('layouts.main')
@section('title')
    NEWS
@endsection

@section('content')
<div>
   @forelse($news as $id => $item)
       @php
           //$url = route('news::card', ['id'=>$id]);
       @endphp

      <div>
          <a href='{{route('news::card', ['id'=>$id])}}'>{!! $item['title']!!}</a>

          {!! $item['description']!!}
      </div>
    @empty
       Not news;
    @endforelse
</div>
@endsection
