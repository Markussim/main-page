<!DOCTYPE html>
<html lang="sv">
    <head>
        <?php include("head_content.php"); ?>
    </head>
    <body>
        <div>
            <?php include("header.php"); ?>
            <div id="marksism">Väder</div>
            <div id="flex_thing">
                <div id="search_box">
                    <div id="inner_search_box">
                        <div id="search_results" style="text-align: center;">I Göteborg just nu är det <p id="temprature"><?php $json_no_json = file_get_contents("https://opendata-download-metobs.smhi.se/api/version/1.0/parameter/1/station/71420/period/latest-hour/data.json");
                            $json_a = json_decode($json_no_json, true);
                            echo $json_a['value'][0][value];
                            ?></p> grader.</div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>