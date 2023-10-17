<?php
/**
 * The footer template for the theme
 */

$style = buildbench_option("footer_style", "style-1");
get_template_part('template-parts/footer/footer', $style);

wp_footer();
?>

</div>

</body>
</html>