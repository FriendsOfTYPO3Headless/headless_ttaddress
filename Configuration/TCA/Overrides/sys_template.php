<?php

defined('TYPO3_MODE') || die();

call_user_func(function () {
    // Default TypoScript for Headless tt_address
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'headless_ttaddress',
        'Configuration/TypoScript',
        'Headless tt_address'
    );
});
