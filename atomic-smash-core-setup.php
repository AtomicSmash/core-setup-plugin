<?php
/**
 * Plugin Name:       Atomic Smash Core Setup
 * Description:       This adds core functionality required by all Atomic Smash sites.
 * Version:           0.1.0
 * Author:            Atomic Smash
 * Author URI:        https://www.atomicsmash.co.uk/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       atomic-smash-core-setup
 */

namespace AtomicSmash\CoreSetup;

define( 'ATOMIC_SMASH_CORE_SETUP_VERSION', '0.1.0' );

require_once 'functions/mail-sending.php';
require_once 'functions/compatibility/wp-rocket.php';
