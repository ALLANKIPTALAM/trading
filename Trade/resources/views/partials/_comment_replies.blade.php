 @foreach($comments as $comment)
 <div >
   <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="./../../images/avatar.png" alt=""></figure>
                <address>
                By <a href="#">{{ $comment->user->name }}</a> on <time datetime="2045-04-06T08:15+00:00">{{ date('M d, Y', strtotime( $comment->created_at )) }}</time>
                </address>
                
              </header>
              <div class="comcont">
                <p>{{ $comment->body }}.</p>
              </div>
            </article>
          </li>
         
        </ul>  
 </div>
 


    <div class="display-comment col-md-12 bb-left  col-lg-5" >
       
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
             {!! csrf_field() !!}
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>
        <div class="group btmspace-50 demo">
        
        <div class="">@include('partials._comment_replies', ['comments' => $comment->replies])</div>
      </div>

       
        <div >
            
        </div>
        
    </div>
@endforeach