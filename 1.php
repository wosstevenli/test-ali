<?php
/**
 * Created by Steven.
 * User: JAVS
 * Date: 2018/02/01
 * Time: 17:14
 */
header('Content-type:image/png');//设置mime type
$img = imagecreate(1920,800);//设置图片像素
imagecolorallocate($img,0,0,0);//给图片上色
imageellipse($img,200,200,50,50,imagecolorallocate($img,255,0,0));//在图片上绘制图形，中心点200,200；宽高50,50
imagepng($img);//设置图片格式为PNG
?>