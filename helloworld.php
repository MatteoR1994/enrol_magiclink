<?php

require_once('../../config.php');
require_login();

$PAGE->set_title(get_string('pluginname', 'enrol_magiclink'));
$PAGE->set_heading(get_string('pluginname', 'enrol_magiclink'));
$PAGE->set_url(new moodle_url('/enrol/magiclink/helloworld.php'));
$PAGE->set_context(context_system::instance());
$PAGE->set_pagelayout('standard');

//----------------------------------------------

echo $OUTPUT->header();

echo html_writer::tag('p', get_string('helloworld', 'enrol_magiclink'));

echo $OUTPUT->footer();