<?php
    require_once '../include.php';

    $ID = $_REQUEST['Journal_ID'];

    $sql= "SELECT `F_ID`,`field` FROM `Fields` natural join `Journal&Fields` WHERE `J_ID`= ".$ID."" ;
    //$resNum=getResultNum($sql);
    $rows=fetchAll($sql);

    foreach($rows as $row1):
      echo '<input type="checkbox" name="ck" value="'.$row1['F_ID'].'" id="cd7647" />
      <a  href="javascript:void(0);" id="sd7647" title="0"><label for="cd7647">'.$row1['field'].'</label></a>
      <br/>';
    endforeach;

 ?>
