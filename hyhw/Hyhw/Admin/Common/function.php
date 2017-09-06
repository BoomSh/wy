<?php
    /**
     * 输出函数
     * @param  [type] $arr [description]
     * @return [type]      [description]
     */
    function p_r($arr){
        return dump($arr,1,"<pre>",0);
    }
    /**
     * 广告位置
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function advPlace($id){
       $info = M('advPlace')->find($id);
       return $info['name'];
    }
    /**
     * 新闻类别
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    function newsCategory($id){
       $info = M('NewsCategory')->find($id);
       return $info['title'];
    }
    function is_info($num){
        if(1==$num){
             return "否";
        }
        else{
            return "是";
        }
    }
    /**
     * 解析编辑器内容
     * @param  [type] $str [description]
     * @return [type]      [description]
     */
    function str_decode($str){
        return htmlspecialchars_decode($str);
    }


    function country($id){
       $info = M('Country')->find($id);
       return $info['name'];
    }


    function projectCategory($id){
       $info = M('ProjectCategory')->find($id);
       return $info['title'];
    }
?>