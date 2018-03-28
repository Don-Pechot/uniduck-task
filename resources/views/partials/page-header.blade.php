<div class="page-header">
  <h1>{!! App::title() !!}</h1>
  @if (is_home())
    {{ get_search_form() }}
  @endif
</div>
