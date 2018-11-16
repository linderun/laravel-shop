<?php
/**
 * Author: Darren.lin
 * Email:  linderun@linderun.com
 * Since:  2018/11/16 22:27
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}