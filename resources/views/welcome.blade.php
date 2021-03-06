<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <!--meta name="nosnippets"-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackroidの轮回盘</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <p>@{{ message }}</p>
                </div>
                <div class="links">
                    <a v-bind:href="getLinks()">@{{ blog }}</a>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript">
        new Vue({
            el: '.title',
            data: {
                message: 'Hello Hackroid!'
            }
        })
        new Vue({
            el: '.links',
            data: {
                blog: 'https://blog.hackroid.com'
            },
            methods: {
                getLinks:function(){
                    return 'https://blog.hackroid.com'
                }
            }
        })
    </script>
</html>
