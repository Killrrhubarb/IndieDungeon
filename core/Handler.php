<?php

/* 
 * This file is to handle authentication and then pass on the rest of the web
 * page creation to the appropriate code (module).
 */

// Loads the constants during the runtime
require_once('Config.php');

// Load the authentication library
require_once('lib/Auth.php');

//Determine Page to load
//Code TODO