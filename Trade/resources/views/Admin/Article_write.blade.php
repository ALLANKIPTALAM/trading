@extends('layouts.adminlayout')

@section('content')

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="#" class="tip-bottom">Article</a> <a href="#" class="current">Write Article</a> </div>
  <h1>Write Article</h1>
</div>
<div class="container-fluid">
  <hr>

  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>wysihtml5</h5>
      </div>
      <form method="post" action="{{ URL::to('Admin/Article/store')}}" class="form-horizontal">
        {!! csrf_field() !!}
            <div class="control-group">
              <label class="control-label">Title of Article :</label>
              <div class="controls">
                <input type="text" name="title" class="span12" placeholder="Title of Article" required/>
              </div>
            </div>
      <div class="widget-content">
        <div class="control-group">
        
            <div class="controls">
              <textarea name="body" class="textarea_editor span12" rows="6" placeholder="Enter text ..."></textarea>
            </div>
            <div class="form-actions">
              <button type="reset" class="btn btn-success">Cancel</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div></div>
<!--Footer-part-->
@endsection
