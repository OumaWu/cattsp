<?php
/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 2018/8/3
 * Time: 1:35
 */

//访客信息统计类
class VisitorInfo
{
    //将ip存入cookie
    public static function saveIpIntoCookie($cookie, $ip, $time) {
        setcookie($cookie, $ip, $time); //每天每个ip只能访问一次
    }

    //获取访客ip
    public static function getIp()
    {
        $unknown = 'unknown';
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] && strcasecmp($_SERVER['HTTP_X_FORWARDED_FOR'], $unknown)) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], $unknown)) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        /**
         * 处理多层代理的情况
         * 或者使用正则方式：$ip = preg_match("/[\d\.]{7,15}/", $ip, $matches) ? $matches[0] : $unknown;
         */
        if (false !== strpos($ip, ','))
             $ip = reset(explode(',', $ip));
        return $ip;

//        $ip = false;
//        if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
//            $ip = $_SERVER["HTTP_CLIENT_IP"];
//        }
//        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//            $ips = explode(", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
//            if ($ip) {
//                array_unshift($ips, $ip);
//                $ip = FALSE;
//            }
//            for ($i = 0; $i < count($ips); $i++) {
//                if (!preg_match("^(10│172.16│192.168).", $ips[$i])) {
//                    $ip = $ips[$i];
//                    break;
//                }
//            }
//        }
//        return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
    }

//    //根据ip获取城市、网络运营商等信息
//    public static function findCityByIp($ip)
//    {
//        $data = file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip=' . $ip);
//        $data = json_decode($data, true);
//        return $data;
//    }
//
//    //获取访问ip城市
//    public static function findCurrentCity()
//    {
//        $data = self::findCityByIp(self::getIp());
//        return $data["data"]["city"];
//    }
}