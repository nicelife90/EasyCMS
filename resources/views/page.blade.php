@extends('template.frontend.default')

@section('intro') 
	{{ $slogan->value }}
@endsection

@section('content')
    <div class="col-md-8"> 
        @foreach($posts as $post)
            <div class="well">
                <h1>{{ $post->title_fr }}</h1>
                <br />
                {!! $post->content_fr !!} 
            </div>
        @endforeach
    </div>  
@endsection