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

// 获取 ngrok 反向代理地址
function ngrok_url($routeName, $parameters = [])
{
    // 开发环境，并且配置了 NGROK_URL
    if (app()->environment('local') && $url = config('app.ngrok_url')) {
        // route() 函数第三个参数代表是否绝对路径
        return $url . route($routeName, $parameters, false);
    }

    return route($routeName, $parameters);
}

/**
 * 实例化 BigNumber 对象
 * @param     $number
 * @param int $scale 默认的精度为小数点后两位
 * @return \Moontoast\Math\BigNumber
 */
function big_number($number, $scale = 2)
{
    return new \Moontoast\Math\BigNumber($number, $scale);
}