<?php

session_start();

session_destroy();

header(`Location: /sp404/13_session.php`);