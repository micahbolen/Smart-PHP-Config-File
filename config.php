<?php 

// rename this file to whatever your configuration file is supposed to be called (wp-config.php, etc.).

switch ($_SERVER['SERVER_NAME']):

// assuming your local server name is 'localhost,' leave this section alone
    case 'localhost':
        require_once('local.config.php');
        break;

// replace production-url with the server name for your production site
    case 'production-url':
        require_once('production.config.php');
        break;

// replace development-url with the server name for your development site
    case 'development-url':
        require_once('development.config.php');
        break;

    default:
         // something went wrong;

endswitch;
// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
