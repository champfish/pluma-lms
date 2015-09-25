<?php
/**
 * Pluma
 * Main page
 * @authors CJ Duffee, Jeffrey Wang
*/
?>
<!DOCTYPE html lang=en.US>
<?php
// Import settings
//require_once ( "settings.php" );
// Get user settings and preferences here
// Get language
if ( empty ( $user_settings['language'] ) ) {
    require_once ( "includes/languages/language_eng.php" );
} else {
    require_once ( "includes/languages/language_" . $user_settings['language'] . ".php" ); 
}
//if ( empty ( $_REQUEST['page'] ) ) {
//  $page = 'home';
//} else {
//  $page = $_REQUEST['page'];
//}
?>
<html>
    <head>
        <style>
            #leftbar
            {
                float: left;
            }
            #rightbar
            {
                float: right;
            }
        </style>
        <title><?php //echo $organization_settings['name']; ?> | Pluma</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="./javascript.js"></script>

    </head>
    <body>
        <div class="container">
            <p>Pluma</p>
            <br />
            <?php //echo "<img src=\"" . $organization_settings['image_url'] . "\" alt=\"" . $organization_settings['name'] . " />"; 
		?>
            <br />
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="index.php?page=notifications"><?php echo $translations['notifications']; ?></a></li>
                <li role="presentation"><a href="index.php?page=grades"><?php echo $translations['grades']; ?></a></li>
                <li role="presentation"><a href="index.php?page=vitals"><?php echo $translations['vitals']; ?></a></li>
                <li role="presentation"><a href="index.php?page=attendance"><?php echo $translations['attendance']; ?></a></li>
            </ul>
            <!--<iframe src="/includes/pages/<?php //echo $page; ?>.php">
                Your browser doesn't seem to support iframes. Pluma requires iframes.
            </iframe>-->
            <div id="leftbar">
                <iframe src="./notifications.php"></iframe>
            </div>
            <div id="rightbar">
                <iframe src="./calendar.php"></iframe>
            </div>
        </div> 
    </body>
</html>
