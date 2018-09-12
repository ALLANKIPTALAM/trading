@extends('layouts.index')

@section('content')

<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Articles</h6>
      <p>Molestie dolor blandit mauris porta quam erat ut laoreet velit</p>
    </div>
    <div id="info_new_cont">
    <ul class="nospace group latest" id="info_new_ui">

      @foreach($posts as $post)
      <li class="one_third" id="info_new_li">
        <article>
          <time datetime="2045-04-05T08:14+00:00"><i class="far fa-calendar-alt rgtspace-5"></i> {{ date('M d, Y', strtotime( $post->created_at )) }} @ {{ date('h:i A', strtotime($post->created_at)) }}</time>
          <div class="excerpt">
            <h6 class="heading">{{ $post->title }}</h6>
            <p>{{ $post->body }}. [&hellip;]</p>
            <ul class="meta">
              <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
            </ul>
            <footer><a href="{{ route('Article.show', $post->id) }}" class="btn btn-danger btn-sm" >Read More</a></footer>
          </div>
        </article>
      </li> 
     @endforeach

    </ul>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>


@endsection