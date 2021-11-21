<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style type='text/css'>
        .input-field label {
            color: teal !important;
        }
    </style>
    <title>Graze</title>
</head>

<body class='teal lighten-4 container'>
    <div class="row container input-field">

        <img src='static/assets/logo.svg' style='width:160px; height: auto; display: block; margin-bottom: 1rem;' class='col s6'>


        <div class='col s8'>
            <form class='col s6 row'>
                <label for='submit' class="col s8">Enter Account ID Below:</label>
                <input type='text' name='submit' action='../boxes' method='GET' />
                <button type='submit' class="waves-effect waves-light btn col">Submit</button>
            </form>
        </div>
    </div>