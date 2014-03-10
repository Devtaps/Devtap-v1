<?php $tpl_id=$_REQUEST['tpl'];?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Devtap:: Developer Template Assistance Program</title>
        <link rel="stylesheet" type="text/css" href="css/devtapstyle.css">
		<script src="js/jquery-2.0.3.min.js"></script>
   
    </head>
    <body>
        <!-- Preview of code-->
        
            <div id="box1" class="prebuildtpl"> 
             <h2>Devtap:: Developer's Template Assistance Program</h2>
                <h3>Following is the W3C Compliant HTML 5 code</h3>
                <a href="prebuild.php" class="generallink">Back to Pre-build templates</a>
                <hr/>
                <h3>Copy HTML</h3>
                <p><iframe src="library/preview-tpl.php?tpl=<?php echo $tpl_id;?>" width="950px" height="500px" frameborder="0" scrolling="yes" style="background-color:white;"></iframe> </p>
                
                <hr/>
                <h3>Copy CSS</h3>
                <p><iframe src="library/preview-css.php?tpl=<?php echo $tpl_id;?>" width="950px" height="500px" frameborder="0" scrolling="yes" style="background-color:white;"></iframe></p>
                
            </div>

    </body>
</html>
