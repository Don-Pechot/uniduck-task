<footer class="content-info">
  <div class="sage-wrapper container">
    <div class="row">
      <div class="newsletter-form prefooter">
        <h1 class="newsletter-fom__heading h1 c-light">Subscribe to Duck News</h1>
        @php(dynamic_sidebar('newsletter-footer'))
      </div>
    </div>
  </div>
  <div class="real-footer">
    <div class="container">
      <div class="row">
        <div class="footer-copyright">
          <div class="footer-logo">
            @if (function_exists('the_custom_logo'))
              {{ the_custom_logo() }}
            @else
              <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
            @endif
          </div>

          <div class="footer-copy-text">
            @php(dynamic_sidebar('copy-footer'))
          </div>
        </div>

        <div class="footer-social">
          @php(dynamic_sidebar('social-footer'))
        </div>
      </div>
    </div>
  </div>
</footer>
