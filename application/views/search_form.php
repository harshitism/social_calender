<html>
<title>Search_form</title>
<?php if(isset($error))
echo $error;
else if(isset($result))
{
	if($result=="NO results!!!")
	echo $result;
}
?>
<body>
<form action = "<?php echo $this->config->base_url();?>index.php/searchbar/search" method = "post">
Name or Username :<br />
<input type = "text" name = "search"/>
<input type = "submit" name = "search_submit" value = "search"/>
</form>
</body>
</html>