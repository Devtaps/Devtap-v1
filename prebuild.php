    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Devtap:: Developer Template Assistance Program</title>
    <link rel="stylesheet" type="text/css" href="css/devtapstyle.css">
    <div class="prebuildtpl">
        <h2>Devtap:: Developer's Template Assistance Program</h2>
        <p>Choose from the following existing template design. Devtap will generate the HTML 5 & CSS 2 and 3 code as per design layout.</p>		<a href="choice.php" class="generallink">Back to Choices</a>
        <div id="buildgallery">
        <?php
        $files = array();
        $dir = opendir('library/prebuild/coverslide/'); // open the cwd..also do an err check.
        while(false != ($file = readdir($dir))) {
                if(($file != ".") and ($file != "..") and ($file != "index.php")) {
                        $files[] = $file; // put in array.
						
                }   
        }
        natsort($files); // sort.

        // print.
		$counter=0;
        foreach($files as $file) {$counter++;?>
        <div class="prebuildgallery">
			<a href='preview.php?tpl=<?php echo $counter;?>' class="prebuildgallerylink"><img src="<?php echo "library/prebuild/coverslide/".$file;?>" alt="image" width="152" height="172"/></a><br />
            <h4>Template <?php echo $counter;?></h4>
            </div>
                
       <?php } ?>
       <div style="clear: both"></div>
        </div>
     </div>