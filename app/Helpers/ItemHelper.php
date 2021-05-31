<?php

use Illuminate\Support\Facades\DB;

function getItem(){
    $result= DB::table('items')->get();
    $itemArr=[];
    foreach($result as $row){
        $itemArr[$row->id]['name']=$row->name;
        $itemArr[$row->id]['parent_id']=$row->parent_id;
    }
    $allItem=itemTreeView($itemArr,0);
    return $allItem;
}

$html='';
function itemTreeView($itemArr,$parent,$level=0,$prelevel= -1){
	global $html;
	foreach($itemArr as $id=>$data){
		if($parent==$data['parent_id']){
			if($level>$prelevel){
				if($html==''){
					$html.='<ul>';
				}else{
					$html.='<ul>';
				}
			}
			if($level==$prelevel){
				$html.='</li>';
			}
			$html.='<li><a href="#">'.$data['name'].'</a>';
			if($level>$prelevel){
				$prelevel=$level;
			}
			$level++;
			itemTreeView($itemArr,$id,$level,$prelevel);
			$level--;
		}
	}
	if($level==$prelevel){
		$html.='</li></ul>';
	}
	return $html;
}

?>
