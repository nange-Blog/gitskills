<?php
    error_reporting(1);

    $target = '/data/wwwroot/gitskills'; // 生产环境web目录

    $token = 'photo';
    $wwwUser = 'njfae';
    $wwwGroup = 'njfae';

    $json = json_decode(file_get_contents('php://input'), true);

    if (empty($json['token']) || $json['token'] !== $token) {
        exit('error request');
    }

    $repo = $json['repository']['name'];

    $cmd = "cd $target && touch hook";

    echo shell_exec($cmd);
