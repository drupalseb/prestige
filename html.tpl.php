<!DOCTYPE html>
<html <?php print $language -> language; ?>>
    <head profile="<?php print $grddl_profile; ?>">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
         <?php print $scripts; ?>
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&subset=latin-ext" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript">
      ;( function( $ ) {
          $( '.lightbox' ).swipebox();
      } )( jQuery );
</script>
    </head>
    <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
         <script async defer>

    </script>

    </body>
</html>
