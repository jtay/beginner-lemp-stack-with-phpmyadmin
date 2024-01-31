<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎉 It works!</title>
    <style>
        ul.horizontal-list {
            list-style-type: none; 
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        ul.horizontal-list li {
            display: inline-block;
        }

        ul.horizontal-list li:not(:first-child):before {
            content: '|'; 
            color: #a0a0a0;
            margin: 1.75rem;
        }

        p {
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>

    <center>
        <h1> 🎉 It works! </h1>
        <p> Hello world <p>
        <ul class="horizontal-list">
            <li>
                <a href="https://github.com/jtay/beginner-lemp-stack-with-phpmyadmin" target="_blank">Star on GitHub</a>
            </li>
            <li>
                <a href="https://jaydon-dev.co.uk" target="_blank">Say hello!</a>
            </li>
        </ul>
    </center>

    <hr />

    <?=
        phpinfo();
    ?>

</body>
</html>
