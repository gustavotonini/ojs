<?php

/**
 * @defgroup plugins_reports_views View Report Plugin
 */

/**
 * @file plugins/reports/views/index.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_reports_views
 * @brief Wrapper for view report plugin.
 *
 */


require_once(dirname(__FILE__) . '/ViewReportPlugin.inc.php');

return new ViewReportPlugin();

?>
