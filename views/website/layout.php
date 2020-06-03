<?php require_once VWEB."/_header.php"; ?>

<?php 
if (file_exists(VWEB.$controller."_".$action.".php")){
    require_once(VWEB.$controller."_".$action.".php"); 
}
?>
<?php require_once VWEB."/_footer.php"; ?>