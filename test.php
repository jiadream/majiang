<?php
//include "./test0.php";
//include "./test1.php";
///* @var $hu test0,test1 */
//$funs = array(new test0(),new test1());
//foreach($funs as $index => $hu){
//    $aa = $hu->checkTy();
//    if($aa == 11) echo $aa;
//}
//function refreshMajiang(){
//    $majiang = array();
//    for($i = 1; $i <= 34 ; $i++){
//        $count = 4;
//        for($j = 0; $j < $count ; $j++){
//            array_push($majiang,$i);
//        }
//    }
//    for($i = 35;$i<=42;$i++){
//        array_push($majiang,$i);
//    }
//    shuffle($majiang);
//    return $majiang;
//}
//function faMjTest($room,$game){
//    $players = $room->players;
//    $hu = false;
//    $majiangList = array();
//
//    for($i = 1; $i <= 4 ; $i++) {
//        $uid = $players[$i];
//        $playerMaJiang = array();
//        if($game->zhuang == $uid){
//            $playerMaJiang = [1,2,3,4,5,6,7,8];
//            $game->pengList[$uid] = [8];
//        }else{
//            if(!$hu){
//                $playerMaJiang = [1,2,3,4,5,6,8,9,9,9];
//                $hu = true;
//            }else{
//                $playerMaJiang = [1,2,3,4,5,6,8,9,9,9];
//            }
//        }
//        sort($playerMaJiang);
//        $majiangList[$uid] = $playerMaJiang;
//    }
//
//    $game->currentMj2 = 0;
//    $game->currentMj = 100;
//    return array($game,$majiangList);
//}
//$arr = faMjTest($room,$game);
//echo "<pre>";
//print_r($arr);
//echo "</pre>";
echo '修改，提交1次';
echo '修改，提交2次';
echo 'push，提交3次';
//远程修改1次
echo '提交4次';

//远程修改2次
//检测 没有拉取时，本地落后版本
//改变远程仓库名称，本地仓库是否有变化

//怎么远端变成枣庄了
