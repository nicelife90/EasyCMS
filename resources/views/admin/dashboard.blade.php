@extends('template.default')

@section('content')
<div class='row'>
  <div class='col-md-12'> 
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Général</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 0)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Gestion des images</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 1)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Gestions des fichiers</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 2)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Gestion des administrateurs</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 3)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Gestion des pages du site web</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 4)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Gestion du contenu des pages</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 5)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Gestion des sauvegardes</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 6)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
    <!-- Box -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Rubrique d'aide - <strong>Administration avancé</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <ul>
          @foreach ($movies as $movie)
          @if ($movie->section == 7)
          <li><a href="https://www.youtube.com/watch?v={{ $movie->link }}">{{ $movie->title }}</a></li>
          @endif
          @endforeach
        </ul>
      </div>
      <!-- /.box-body --> 
    </div>
    <!-- /.box --> 
    
  </div>
  <!-- /.col --> 
  
</div>
<!-- /.row --> 
@endsection