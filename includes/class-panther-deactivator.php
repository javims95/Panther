<?php

class PANTHER_Deactivator {

    public static function deactivate() {

        delete_option ('panther_config');
    }
}