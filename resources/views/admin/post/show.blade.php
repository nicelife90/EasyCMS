@extends('template.backend.default')

@section('content')
<div class='row'>
  <div class='col-md-12'> @if (count($menus) > 0)
    @foreach ($menus as $menuItem)
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><strong>{{ $menuItem->title_fr }}</strong></h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th style="width:10%;">Modifier</th>
              <th>Titre</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0; ?>
          @foreach ($posts as $post)
          @if ($post->menu_id == $menuItem->id)
          <?php $i++; ?>
          <tr>
            <td><a class="btn btn-success btn-sm" href="/admin/post/edit/{{ $post->id }}"><i class="fa fa-pencil"></i></a></td>
            <td>{{ !empty($post->title_fr) ? $post->title_fr : "Cette article n'a aucun titre."}}</td>
          </tr>
          @endif
          @endforeach
          @if ($i == 0)
          <tr>
            <td colspan="2" style="text-align:center;"><strong>Aucun article trouvé sur cette page.</strong></td>
          </tr>
          @endif
            </tbody>
          
        </table>
      </div>
    </div>
    @endforeach
    @else
    <div class="box box-default">
      <div class="box-body">
        <p>Aucun articles à afficher!</p>
      </div>
    </div>
    @endif 
    <!-- /.col --> 
  </div>
  <!-- /.row -->
</div>
@endsection 