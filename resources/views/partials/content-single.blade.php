<article @php(post_class())>
  <header class="post-header">
    <div class="post-header__featured-image">
      @if (get_the_post_thumbnail_url())
        <img src="{!! get_the_post_thumbnail_url($post->ID, 'featured-single-post') !!}" alt="{{ the_title() }} - Featured Image">
      @endif
    </div>
    <div class="post-header__meta-overlay">
      <div class="title-and-meta">
        <h1 class="entry-title">{{ get_the_title() }}</h1>
        @include('partials/entry-meta-author')
      </div>

      <div class="back-to-blog">
        <a href="{!! home_url() !!}">Back to blog</a>
      </div>
    </div>
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>
