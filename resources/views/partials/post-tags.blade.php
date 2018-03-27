<div class="post-tags">
  @foreach ($tags as $tag)
    <a class="post-tag" href="{!! get_term_link($tag->term_id, 'post_tag') !!}">
      {{ $tag->name }}
    </a>
  @endforeach
</div>
