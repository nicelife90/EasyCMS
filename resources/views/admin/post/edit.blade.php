@extends('template.backend.default')

@section('content')
<div class='row'>
  <div class='col-md-12'>
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">gfgf</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        {{ Form::open(array('url' => 'admin/post/edit/$id')) }}
    	{{ Form::text('email', 'example@gmail.com') }}
        {{ Form::text('email', 'example@gmail.com') }}
        {{ Form::text('email', 'example@gmail.com') }}
        {{ Form::text('email', 'example@gmail.com') }}
		{{ Form::close() }}
      </div>
    </div>
    <!-- /.col --> 
  </div>
  <!-- /.row -->
</div>
@endsection 