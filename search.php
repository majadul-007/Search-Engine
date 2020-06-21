<?php
if(isset($_GET["term"])){
  $terms = $_GET["term"];
}
else{
   echo  "you must need to enter a search term";
}

?>
<!DOCTYPE html>1
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Main Part Start -->
    <div class="header-container">
        <div class="container-main">
            <div class="header-logo">
                <img src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_92x30dp.png" alt="">
            </div>
            <div class="header-search-container">
                <form action="search.php" method="GET">
                    <input class="searchbox" type="text" name="term">
                    <button type="button" value="search" class="search_btn">search
                    </button>
                </form>
            </div>

            <div class="tabs-container">
                <ul class="all_ta
                bs">
                    <li><a href='<?php echo "search.php?term=$terms&type=sites"; ?>'>All</a>
                    </li>
                    <li>
                        <a href='<?php echo "search.php?term=$terms&type=images"; ?>'>Images</a>
                    </li>
                    <li>
                        <a href='<?php echo "search.php?term=$terms&type=news"; ?>'>News</a>
                    </li>
                    <li>
                        <a href='<?php echo "search.php?term=$terms&type=videos"; ?>'>Videos</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- Main-part End -->






</body>

</html>