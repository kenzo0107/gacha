<?php

$gacha_list = array(
    '1' => array( 'name' => 'Item1', 'rate' => 30 )
   ,'2' => array( 'name' => 'Item2', 'rate' => 35 )
   ,'3' => array( 'name' => 'Item3', 'rate' => 1 )
);

$total_rate = 0;
foreach ( $gacha_list as $id => $v ) {
    if ( !empty( $v['rate'] ) ) {
        $total_rate += $v['rate'];
        $list[$id]['range_end'] = $total_rate;
    }
}

$index = rand( 1, $total_rate );

foreach ( $list as $id => $v ) {
    if ( $index <= $v['range_end'] ) {
        $hit_id    = $id;
        break;
    }
}

echo sprintf( '当たったガチャID: %s - 景品名: %s', $hit_id, $gacha_list[$hit_id]['name'] );
