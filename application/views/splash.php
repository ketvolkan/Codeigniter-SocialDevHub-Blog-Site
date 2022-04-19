<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Dev Hub</title>

    <style>
    * {
        margin: 0px;
        padding: 0px;
        font-weight: 200;
        font-family: helvetica neue, helvetica, arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    a:hover {
        color: #000;
        text-decoration: none;
    }

    body {
        background: #fafafa;
    }

    .container {
        width: 100%;
        height: 50px;
        position: fixed;
        top: 50%;
        left: 50%;
        margin-left: -25%;
        margin-top: -25px;
    }

    p {
        float: left;
        line-height: 50px;
        font-size: 200%;
        color: #888;
    }

    .scroller {
        height: 70px;
        line-height: 70px;
        float: left;
        margin-left: 5px;
        overflow: hidden;
    }

    .scroller span {
        display: block;
        font-size: 400%;
        color: #000;
    }

    .scroller .inner {
        -webkit-animation: scroll 10s 1 ease-out;
        -moz-animation: scroll 10s 1 ease-out;

        animation: scroll 6s 1 ease-out;
        /* 10 saniyede 1 kere tekrarla */

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }


    .blue {
        -webkit-animation: color 0.25s 1 linear;
        -moz-animation: color 0.25s 1 linear;
        animation: color 0.25s 1 linear;

        -webkit-animation-delay: 8s;
        -moz-animation-delay: 8s;
        animation-delay: 4s;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

    }


    .blueb {
        -webkit-animation: color 0.25s 1 linear;
        -moz-animation: color 0.25s 1 linear;
        animation: color 0.25s 1 linear;

        -webkit-animation-delay: 8.25s;
        -moz-animation-delay: 8.25s;
        animation-delay: 4.2s;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }


    @-webkit-keyframes color {
        0% {
            color: #000;
        }

        100% {
            color: #2c90c6;
        }
    }

    @-moz-keyframes color {
        0% {
            color: #000;
        }

        100% {
            color: #2c90c6;
        }
    }

    @keyframes color {
        0% {
            color: #000;
        }

        100% {
            color: #2c90c6;
        }
    }


    @-webkit-keyframes scroll {
        11% {
            margin-top: 0px;
        }

        22% {
            margin-top: 0px;
        }

        33% {
            margin-top: -70px;
        }

        44% {
            margin-top: -70px;
        }

        55% {
            margin-top: -140px;
        }

        66% {
            margin-top: -140px;
        }

        77% {
            margin-top: -220px;
        }

        88% {
            margin-top: -220px;
        }

        100% {
            margin-top: -220px;
        }
    }

    @-moz-keyframes scroll {
        11% {
            margin-top: 0px;
        }

        22% {
            margin-top: 0px;
        }

        33% {
            margin-top: -70px;
        }

        44% {
            margin-top: -70px;
        }

        55% {
            margin-top: -140px;
        }

        66% {
            margin-top: -140px;
        }

        77% {
            margin-top: -220px;
        }

        88% {
            margin-top: -220px;
        }

        100% {
            margin-top: -220px;
        }
    }

    @keyframes scroll {
        11% {
            margin-top: 0px;
        }

        22% {
            margin-top: 0px;
        }

        33% {
            margin-top: -70px;
        }

        44% {
            margin-top: -70px;
        }

        55% {
            margin-top: -140px;
        }

        66% {
            margin-top: -140px;
        }

        77% {
            margin-top: -140px;
        }

        88% {
            margin-top: -140px;
        }

        100% {
            margin-top: -140px;
        }
    }
    </style>


</head>

<link rel="icon" href="<?=base_url("assets");?>/img/Socialdevhublogo3.png" type="image/gif">

<body>
    <div class="container">
        <div class="scroller">
            <div class="inner">
                <span>Hoşgeldin Developer!</span>
                <span>Biz Social Dev Hub Topluluğu.</span>
                <span>Sende Bize Katıl Ve <a class="blue">Algıları Yık</a> <a class="blueb">Ve Eğlen.</a></span>
            </div>
        </div>
    </div>



</body>

</html>