<aside>
  <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'main-sidebar' ); ?>
  <?php else : ?>
    <p>Add widgets in Appearance > Widgets</p>
  <?php endif; ?>
</aside>