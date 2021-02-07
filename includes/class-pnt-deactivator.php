<?php

class PNT_Deactivator {

    public static function deactivate() {

        delete_option ('pnt_config');
    }
}