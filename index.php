<!DOCTYPE html>
<html lang="en/us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Nicholas Gorden">
    <link rel="stylesheet" href="www/static/styles/style.css">
    <title>nickgorden.xyz</title>
</head>
<body>
<div id="header">
    <h1>
        <a href="https://nickgorden.xyz">nickgorden.xyz</a> |
        <?php
        $queries = [];
        parse_str($_SERVER['QUERY_STRING'], $queries);
        $page = $queries['page'];
        if ($page == null) {
            echo 'Home';
        } else {
            echo ucwords("$page");
        }
        ?>
    </h1>
</div>
<hr hidden class="hidden-ruler"/>
<div id="content">
    <div>
        <table>
            <tbody>
            <tr>
                <td id="nav" style="vertical-align: top">
                    <input id="hamburger" type="checkbox">
                    <label for="hamburger"></label>
                    <div id="burger-wrapper">
                        <ul id="main-nav">
                            <?php echo file_get_contents("www/static/pages/nav.php") ?>
                        </ul>
                    </div>
                </td>
                <td id="main" style="vertical-align: top">
                    <?php
                    $queries = [];
                    parse_str($_SERVER['QUERY_STRING'], $queries);
                    $page = $queries['page'];
                    if ($page == null) {
                        echo file_get_contents("www/static/pages/home.html");
                    } else {
                        echo file_get_contents("www/static/pages/$page.html");
                    }
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<hr hidden class="hidden-ruler"/>
<div id="footer">
    <div>
        <span class="right">
            Copyright &copy 2022 Nicholas Gorden |
            <a href="https://github.com/ngorden/ngorden.github.io/commits/master">Changes</a> |
            <a href="https://github.com/ngorden/ngorden.github.io/">Source</a>
        </span>
    </div>
</div>
</body>
</html>