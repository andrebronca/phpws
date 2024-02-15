<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <title>GET Form</title>
</head>
<body>
    <div style="margin: 20px">
        <h1>A GET Form</h1>
        <?php if(empty($_GET)): ?>
        
        <form name="search" method="get" class="pure-form pure-form-stacked">
            Category:
            <select name="category">
                <option value="entertainment">Entertainment</option>
                <option value="sport">Sport</option>
                <option value="technology">Technology</option>
            </select>

            Rows per page: <select name="rows">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>

            <input type="submit" value="Search" class="pure-button pure-button-primary">
        </form>
        <?php else: ?>
        <p>Wonderfully filtered search results</p>
        <?php endif; ?>
    </div>
</body>
</html>