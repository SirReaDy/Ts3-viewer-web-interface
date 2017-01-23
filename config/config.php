<?php
/*
    Author: Wruczek
    Contact me:
        TeamSpeak: ts.wruczek.top
        Email: wruczekk@gmail.com
        Donate: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9PL5J7ULZQYJQ
*/



/************* General configuration *************/

$config["general"]["title"]         = "###";                                 // Website title - displayed in the menu
$config["general"]["icon"]          = "img/icon/icon-32.png";                       // Website icon
$config["general"]["subtitle"]      = " ###";                  // Website subtitle
$config["general"]["desc"]          = "###";     // Website description - displayed in Google search engine
$config["general"]["newsDir"]       = "config/news";                                // News folder (relative to project folder)

$config["general"]["enablehta"]     = false; // Enable / Disable additional website features (recommended, but
                                             // you need to have up-to-date version of Apache and install mod_rewrite)
                                             // After setting to true, go into .htaccess file and uncomment 19 line


/********* TeamSpeak configuration *********/

$config['teamspeak']['host']          = '127.0.0.1';          // TeamSpeak host address
$config['teamspeak']['login']         = 'serveradmin';        // Login
$config['teamspeak']['password']      = '###';           // Password
$config['teamspeak']['server_port']   = 9987;                 // TeamSpeak server port
$config['teamspeak']['query_port']    = 10011;                // Query port
$config['teamspeak']['displayip']     = '###';       // IP shown to users and used for connections
$config['teamspeak']['serverid']	  = 1; //test



/************* Additional navigation links - you can link to your stuff *************/

$config["navlinks"] = array(
    // TEMPLATE: array("icon", "displayed text", "link"), ICON is an icon name from: http://fontawesome.io/icons/
    array("fa-facebook-official", "Facebook", "###"),
    array("fa-comments", "Forum", "forum"),
//    array("fa-shopping-cart", "Shop", "shop")
);



/************* Adminlist configuration *************/

// ID of servergroups displayed as admins in Adminlist. Put it in the same way you want it to be displayed.
$config["adminlist"] = array(2);
$config['general']['nestanesta'] = 'GPanel Login';
$config['general']['konekcija'] = 'Connect With Us';


/************* Contact panel configuration *************/

// Set $config['contact']['text'] = ''; to hide this panel
$config['contact']['title'] = 'Support us';
$config['contact']['text'] = '
<center><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="NHNAVNNZQPAFG">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></center>
';
