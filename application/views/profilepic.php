<html>
<body>
<?php
$this->load->helper('form');
echo form_open_multipart(''.$this->config->base_url().'index.php/profilepic/upload');
echo "Add Profile Pic : <input type='file' name='pic'/>";
echo "<input type = 'submit' name = 'form_submit' value = 'Submit'/>";
echo "</form>";
?>
</body>
</html>