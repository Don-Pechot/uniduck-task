<?php
$post_tags = get_the_tags($post->ID);
?>

<article @php(post_class('post-in-grid'))>
  <div class="helper-row-sticky">
    <header class="post-in-grid__header">
      <img src="{{ get_the_post_thumbnail_url($post->ID, 'featured-grid') }}" alt="{{ get_the_title($post->ID) }}">
    </header>

    <div class="article-main">
      @include('partials/entry-meta-time')
      <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>

      @if ($post_tags)
        @include('partials.post-tags', [
          'tags' => $post_tags
        ])
      @endif

      <div class="entry-summary">
        @php(the_excerpt())
      </div>

      <div class="entry-social-meta">
        <div class="entry-social-meta__favs">
          <span class="udck-ic-heart"></span> 0 favs
        </div>

        <div class="entry-social-meta__comments">
          <span class="udck-ic-comment"></span> 0 comments
        </div>
      </div>
    </div>
  </div>
</article>
