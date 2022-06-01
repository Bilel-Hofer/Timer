<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TIMER</title>
    <link rel="stylesheet" href="<?= URL; ?>">

</head>
<header>
    <div id="div_horloge"></div>

    <script type="text/javascript">
        window.onload=function() {
            horloge('div_horloge');
        };

        function horloge(el) {
            if(typeof el=="string") { el = document.getElementById(el); }
            function actualiser() {
                var date = new Date();
                var str = date.getHours();
                str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
                str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
                el.innerHTML = str;
            }
            actualiser();
            setInterval(actualiser,1000);
        }
    </script>
</header>
<body>