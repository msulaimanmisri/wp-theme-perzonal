<?php

/**
 * This is page that display and serve footer template
 * 
 * @package elemes
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>

<footer>

    <div class="container-fluid bg-danger mt-4 pt-3 pb-1 text-center">
        <p class=" inline-text text-light">
            &copy; <?php echo date("Y"); ?>
            Elemes by AsiaQuest Malaysia &nbsp;
            <i class="bi bi-github"></i>
        </p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>