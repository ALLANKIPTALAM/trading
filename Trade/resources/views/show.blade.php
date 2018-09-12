@extends('./layouts.index')

@section('content')



<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <h1>{{ $post->title }}</h1>
      <p>{{ $post->body }}.</p>
      
      
      <div id="comments">
        <h2>Comments</h2>
        @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
        <h2>Write A Comment</h2>
        <form action="{{ route('comment.add') }}" method="post">
            {!! csrf_field() !!}
          <div class="block clear">
            <label for="comment">Your Comment</label>
            
            <textarea name="comment_body" id="comment" cols="25" rows="10"></textarea>
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Comment">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

@endsection