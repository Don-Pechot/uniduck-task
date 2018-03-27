<?php
$post_tags = get_the_tags($post->ID);
$random_post = get_posts(array('orderby' => 'rand', 'posts_per_page' => 1, 'post__not_in' => get_option( 'sticky_posts' )));
?>

<article @php(post_class())>
  <header class="post-header">
    <div class="post-header__featured-image">
      @if (get_the_post_thumbnail_url())
        <div class="post-header__featured-image-src"
              style="background-image: url({!! get_the_post_thumbnail_url($post->ID, 'featured-single-post') !!})">
        </div>
        {{-- <img src="{!! get_the_post_thumbnail_url($post->ID, 'featured-single-post') !!}" alt="{{ the_title() }} - Featured Image"> --}}
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

    @if (get_field('post_featured_text', $post->ID))
      <div class="container">
        <div class="row">
          <section class="entry-content__featured">
            {!! get_field('post_featured_text', $post->ID) !!}
          </section>
        </div>
      </div>
    @endif

    <div class="container">
      <div class="row">
        <div class="entry-content__main">
          <div class="row-align-around">
            @php(the_content())

            @if ($post_tags)
              @include('partials.post-tags', [
                'tags' => $post_tags
              ])
            @endif

            {{-- {{ var_dump($random_post) }} --}}
            <div class="random-post">
              <h4 class="h4 random-post__heading">More magic</h4>
              <div class="row">
                <div class="random-post__thumbnail">
                  <img src="{!! get_the_post_thumbnail_url($random_post[0]->ID, 'featured-grid') !!}" alt="Next post thumb">
                </div>

                <div class="random-post__content">
                  <h4 class="h4 random-post__title">{{ $random_post[0]->post_title }}</h4>
                  <p class="random-post__excerpt">{!! get_the_excerpt($random_post[0]->ID) !!}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <footer>

  </footer>
  {{-- @php(comments_template('/partials/comments.blade.php')) --}}
</article>
