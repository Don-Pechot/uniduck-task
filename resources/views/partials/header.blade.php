<header class="banner">
  <div class="sage-wrapper container">
    <div class="row">
      <div class="header-logo">
        @if (function_exists('the_custom_logo'))
          {{ the_custom_logo() }}
        @else
          <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        @endif
      </div>

      <div class="header-main-menu">
        <nav class="header-main-menu__nav nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
        <div class="header-main-menu__toggle jsToggleMenu">
          <span class="udck-menu"></span>
        </div>
      </div>
    </div>
  </div>
</header>
