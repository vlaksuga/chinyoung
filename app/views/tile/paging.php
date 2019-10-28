

<?php
$pageinfo = &$model["pageinfo"];



$page=$pageinfo["page"];
$totalpagecnt = $pageinfo["totalpagecnt"];


$curviewpagestart = $pageinfo["curviewpagestart"];
$curviewpageend = $pageinfo["curviewpageend"];

$pageurl = $pageinfo["pageurl"];




/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php
    if( $curviewpagestart < $curviewpageend )
    {
?>

        <div class="pagination">
            <?php for($i=$curviewpagestart;$i<$curviewpageend+1;$i++){?>
		    <a href="<?php echo $pageurl;?>&page=<?php echo $i;?>" <?php if($i==$page["page"]){ echo "class='active'";}?>><?php echo $i;?></a>
		    <?php }?>
        </div>
<?php
    }
?>
