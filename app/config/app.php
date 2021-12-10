<?php

$parse = json_decode(file_get_contents(__DIR__.'/config.json'),true);

$config['app'] = $parse;
