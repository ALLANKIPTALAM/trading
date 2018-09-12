@extends('layouts.adminlayout')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="#" class="current">Articles</a> </div>
    <h1>Articles</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
       
        
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Platform(s)</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($posts as $post)
                <tr class="gradeC">
                  <td>{{ $post->id }}</td>
                  <td>{{ $post->title }}</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
@endsection