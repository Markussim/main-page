<!DOCTYPE html>
<html lang="sv">
    <head>
        <?php include("head_content.php"); ?>
    </head>
    <body>
        <div>
            <?php include("header.php"); ?>
            <div id="marksism">Api</div>
            <div id="flex_thing">
                <div id="search_box">
                    <div id="inner_search_box">
                        <div id="search_results">
                            <b>Detta gäller för API v2, inte för någon annan version</b> <br>
                            <br>
                            För att använda APIn behöver du både en sökning och en gräns på hur många resultat du vill ha. Gränsen behövs egentligen inte, då den defaultar till 10, men det är rekommenderat.  <br>
                            <br>
                            För att använda APIn behöver du använda dig av URL parametrar. Dessa använder du troligtvis genom till valda språk, men man kan också skriva de direkt i länken. Då gör du så här: <br>
                            <br>
                            <a href="https://marksism.space/apiv2/?search_box=linus&limit=5">https://marksism.space/apiv2/?search_box=linus&limit=5</a> <br>
                            <br>
                            Man börjar med ett frågetecken för att indikera att det är parametrar, och sedan skriver man namnet på parametern. I detta fall är första parametern “search_box”. Sedan har man ett och tecken (&) för att skiva nästa parameter. Det finns bara två parametrar för denna api. Det spelar ingen roll vilken ordning parametrarna är i. <br>
                            <br>
                            Här är ett exempel resultat: <br>
                            <br>
                            { <br>
                            "errors": { <br>
                            "limit_error": false, <br>
                            "search_box_error": false <br>
                            }, <br>
                            "results": [ <br>
                            { <br>
                            "ActualLink": "http://anhe.kronhus.tk/skola/wa/", <br>
                            "SiteName": "Antons wa", <br>
                            "Description": "Jag vet inte ens hur man ska beskriva den här sidan, men den länkar till sin egen css, min och Linus sidor" <br>
                            }, <br>
                            { <br>
                            "ActualLink": "http://liro.kronhus.tk/", <br>
                            "SiteName": "Linus skolserver", <br>
                            "Description": "Detta är linus sida på skolservern, det är inte ens https" <br>
                            }, <br>
                            { <br>
                            "ActualLink": "https://romland.space/", <br>
                            "SiteName": "Linus websida", <br>
                            "Description": "Linus websida är inte lika fin som antons för den har inte en adaptiv hemsida" <br>
                            }, <br>
                            { <br>
                            "ActualLink": "https://tube.romland.space/", <br>
                            "SiteName": "Romlandtube", <br>
                            "Description": "Detta är linus YouTube kopia. Den är mycket fin. Om man bortser från att den är ful då" <br>
                            } <br>
                            ] <br>
                            } <br>
                            <br>
                            APIn get ut json och därför behövs en json parser. Detta följer med i de flesta språk, men man får söka upp hur man gör för ditt val av språk. <br>
                            <br>
                            Det finns två kategorier, errors och results. <br>
                            <br>
                            errors har information om olika fel, om det är false är det inget fel. <br>
                            <br>
                            limit_error är om du har gjort fel på parametern limit och search_box_error är för fel i parametern search_box. <br>
                            <br>
                            Results är en lista av resultaten. Varje resultat är ett json object med tre values.  <br>
                            <br>
                            <b>ActualLink</b> är själva länken <br>
                            <b>SiteName</b> är sidans namn <br>
                            <b>Description</b> är en beskrivning av sidan <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>