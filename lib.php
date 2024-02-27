<?php

function enrol_magiclink_extend_navigation_frontpage(navigation_node $frontpage) {
    if (get_config("enrol_magiclink", "showinnavigation") == "1") {
        $frontpage->add(
            get_string('pluginname', 'enrol_magiclink'), 
            new moodle_url('/enrol/magiclink/helloworld.php')
        );
    }
}

function enrol_magiclink_extend_navigation_course(navigation_node $frontpage) {
    $frontpage->add(
        get_string("pluginname", "enrol_magiclink"),
        new moodle_url("/enrol/magiclink/helloworld.php")
    );
}

function enrol_magiclink_extend_navigation_user(navigation_node $frontpage) {
    $frontpage->add(
        get_string("pluginname", "enrol_magiclink"),
        new moodle_url("/enrol/magiclink/helloworld.php")
    );
}

class enrol_magiclink_plugin extends enrol_plugin {

    public function use_standard_editing_ui() {
        return true;
    }

    public function edit_instance_form($instance, MoodleQuickForm $mform, $context) {
        // Do nothing by default.
    }


    public function edit_instance_validation($data, $files, $instance, $context) {
        // Niente validazione per ora
        return array();
    }

    public function can_add_instance($courseid) {
        return true;
    }
}