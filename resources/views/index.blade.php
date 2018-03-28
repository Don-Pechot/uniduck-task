@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('partials.page-header')
    </div>



    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    <div class="post-grid">
      <div class="row">
        @while (have_posts()) @php(the_post())
          @include('partials.content-'.get_post_type())
        @endwhile
      </div>
    </div>


    @if (function_exists(wp_pagenavi()))
      {{ wp_pagenavi() }}
    @endif

  </div>
@endsection
