<?php

/**
 * Footer file.
 * 
 * @package Tmsc
 */
?>
<footer>Footer</footer>

<?php wp_footer(); ?>
<script type="text/javascript">
    var myFullpage = new fullpage('#fullpage', {
        anchors: ['firstPage', 'secondPage', '3rdPage'],
        sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['First page', 'Second page', 'Third and last page'],
        responsiveWidth: 900,
        afterResponsive: function(isResponsive){

        }

    });
</script>
</body>

</html>