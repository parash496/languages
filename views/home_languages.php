<!DOCTYPE html>
<HTML>
<head>
    <title> Languages </title>
    <link rel="stylesheet"  href="../public/css/home.css" />
</head>
<body>
    <div class="container">
      <header class="head">
        <h1> PAGE OF LANGUAGES </h1>
      </header>
      <section class="left_side">
        <h1> MENU </h1>
		    <?php for($i=0;$i<$array_length;$i++) { ?>
		    <ul>
		      <li><a href="index.php?controller=post&action=languages&subject=<?php echo ($array[$i]['name']) ?>"><?php echo $array[$i]['name']; ?></a></li>
        </ul>
		    <?php } ?>
      </section>  
<?php require_once("footer.php"); ?>  	 		