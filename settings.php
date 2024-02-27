<?php

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox(
        'enrol_magiclink/showinnavigation',
        get_string('showinnavigation', 'enrol_magiclink'),
        get_string('showinnavigation_desc', 'enrol_magiclink'),
        1
    ));
}