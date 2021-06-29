<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $url = 'https://www.gbapi.com/hermer/getCategories';

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //设置头文件的信息作为数据流输出
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        //关闭请求资源
        $output = curl_exec($ch);
        curl_close($ch);

        $data['category'] = (json_decode($output));

        return view('home.contact',$data);
    }
}
