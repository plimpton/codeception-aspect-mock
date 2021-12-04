<?php

declare(strict_types=1);

use AspectMock\Core\Registry;

function __amock_before($class, $declaredClass, $method, $params, $static) {
    return Registry::$mocker->fakeMethodsAndRegisterCalls($class, $declaredClass, $method, $params, $static);
}

function __amock_before_func($namespace, $func, $params) {
    $res = Registry::$mocker->fakeFunctionAndRegisterCalls($namespace, $func, $params);
    return $res;
}

const __AM_CONTINUE__ = '__am_continue__';
