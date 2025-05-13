  <footer>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </footer>

  <?php wp_footer(); ?>
</body>
<script>
  const toggle = document.getElementById('darkModeToggle');
  const isDark = localStorage.getItem('darkMode') === 'true';

  if (isDark) {
    document.body.classList.add('dark-mode');
    toggle.checked = true;
  }

  toggle.addEventListener('change', () => {
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
  });
</script>


</html>
