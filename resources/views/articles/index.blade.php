@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      @forelse($articles as $article)
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                  <span class="float-left">Wong</span>
                  <span class="float-right">
                      {{$article->created_at->diffForHumans()}}
                  </span>

                </div>
                <div class="card-body">
                    {{$article->ShortContent}}
                    <a href="/articles/{{$article->id}}"> Read More </a>
                </div>
                <div class="card-footer clearfix">
                  <i class="fa fa-heart float-right "></i>
                </div>
            </div>
          </div>
          @empty
            no article
          @endforelse
    </div>
</div>
@endsection
