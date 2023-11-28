<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>

    </head>

    <body>

        <p>Ausgewählter Account: {{$account->dg_name}}</p>
        <p>id: {{$account->dg_UUID}} </p>
        <p>Regristierungszeitpunkt: {{$account->dg_registration}} </p>
        <p>Current Goals: {{$account->dg_currentgoals}} </p>
        <p>Former Goals: {{$account->dg_formergoals}} </p>

        <p>Anzahl Genre geschaut: {{$genre_count}} </p>


    </body>

</html>