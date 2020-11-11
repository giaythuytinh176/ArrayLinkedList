<?php

include_once('LinkList.php');

$linkedList = new LinkList();

try {
    $linkedList->insertFirst(11);
    $linkedList->insertFirst(22);
    //$linkedList->insertLast(333);
    $linkedList->insert(333, 1);
} catch (Exception $e) {
    echo $e->getMessage();
}

//print("<pre>" . print_r($linkedList, true) . "</pre>");


//$linkedList->insertFirst(22);
//$linkedList->insertLast(33);
//$linkedList->insertLast(44);
//$linkedList->insertLast(43);
//$linkedList->insertLast(21);
//$linkedList->deleteNode(43);
//$linkedList->insert(1000,2);
//$linkedList->insert(1111,4);
//$linkedList->insert(2222,6);
//$linkedList->insert(3333,0);
//$totalNodes = $linkedList->totalNodes();
//$linkData = $linkedList->readList();

//echo $totalNodes;
//echo implode ('-' , $linkData);

//print("<pre>" . print_r($linkedList, true) . "</pre>");
