<!DOCTYPE html>
<html lang="sv">
    <head>
        <?php include("head_content.php"); ?>
        <script src="script.js"></script>
    </head>
    <body onload="search();">
        <div>
            <?php include("header.php"); ?>
            <div id="marksism">MarksiƨM</div>
            <div id="search_box">
                <input autofocus="autofocus" oninput="search();" id="search_box_form" type="search" name="search_box" autocomplete="off">
                <div id="inner_search_box">
                    <div id="search_results"></div>
                </div>
            </div>
        </div>
    </body>
</html>