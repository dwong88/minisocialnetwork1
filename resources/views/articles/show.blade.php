@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                  <span class="float-left">Wong</span>
                  <span class="float-right">
                    artikel wong
                  </span>

                </div>
                <div class="card-body">
                    {{$article->content}}
                </div>
                <div class="card-footer clearfix">
                  <i class="fa fa-heart float-right "></i>
                </div>
            </div>
          </div>
    </div>
</div>
@endsection
