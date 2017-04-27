<div class="blog-post">
            <h2 class="blog-post-title">
            <a href="/posts/{{$post->id }}" title="">
              {{ $post->title }}</h2>
            </a>
            <p class="blog-post-meta">
              {{$post->created_at->toFormattedDateString()}} by <a href="#">Mark</a>
            </p>
            <p> {{ $post->body }} </p>
          </div><!-- /.blog-post -->