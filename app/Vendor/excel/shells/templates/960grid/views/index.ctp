<?php echo "<?php echo \$session->flash();?>\n";?>
<table id="list47"></table> <div id="plist47"></div>
<?php
    $colNames = "";
    $colModel = "";
    $sortname = "";
    $numOfColumns=count($fields)-1;
    $widthForEachColumn = round(490/$numOfColumns);
?>
<?php  foreach ($fields as $field):?>
<?php
if(empty($colNames)){
    $colNames="'<?php __('".$field."')?>'";


    $colModel = "\n\t"."{name:'$field',index:'$field', width:40,edit:true,search:true,searchoptions:{sopt:['eq','ne','bw','cn']}}";
}
else {
    $colNames.=', '."'<?php __('".$pluralVar.'_'.$field."')?>'";
    $colModel.=','."\n\t"."{name:'$field',index:'$field', width:$widthForEachColumn,edit:true,search:true,searchoptions:{sopt:['eq','ne','bw','cn']}}"."\n\t";
}
?>
<?php endforeach;?>
<script type="text/javascript">
   jQuery("#list47").jqGrid({
    url:<?php echo '\'<?php echo $html->url(\'/'.$pluralVar.'/indextable\');?>\''?>,
    mtype: 'GET',
    rowNum: 12,
    rowList: [2,5,10,20,30,50],
    sortname: 'id',
    sortorder: 'asc',
    colNames:[<?php echo $colNames; ?>],
    colModel:[<?php echo $colModel; ?>],
    pager: "#plist47",
    viewrecords: true,
    height:264,
    autowidth:false,
    shrinkToFit:false,
    width:540,
    rownumbers:false,
    caption: "LISTADOS DE <?php echo "<?php __('".$pluralVar."')?>";?>"
});

jQuery("#list47").jqGrid('navGrid','#plist47',{del:false,add:false,edit:false},{},{},{},{multipleSearch:true});
</script>
<br />
<input type='button' value='<?php echo "<?php __('NUEVO ". strtoupper($singularHumanName)."')?>"; ?>' onclick="location.href='/<?php echo $pluralVar; ?>/add'" />
