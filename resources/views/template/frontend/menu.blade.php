<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        @foreach($menu as $item)
            @if($item->parent == 0)
                {{--*/ $i = 0 /*--}}
                @foreach($menu as $subitem)
                    @if($subitem->parent == $item->id && $i == 0)
                        <li class="dropdown"> 
                        <a href="{{ url('/') }}/page/{{ $item->id }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item->title_fr }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                         <li><a href="{{ url('/') }}/page/{{ $subitem->id }}">{{ $subitem->title_fr }}</a></li>
                        {{--*/ $i++ /*--}}
                    @elseif($subitem->parent == $item->id && $i > 0)
                    	<li><a href="{{ url('/') }}/page/{{ $subitem->id }}">{{ $subitem->title_fr }}</a></li>
                    @endif
                @endforeach
                @if($i == 0)
                   <li><a href="{{ url('/') }}/page/{{ $item->id }}">{{ $item->title_fr }}</a></li>
                @else
                 	</ul>
                    </li>
                @endif
            @endif
        @endforeach
      </ul>
    </div>
  </div>
</nav>
