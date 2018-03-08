<html>
    <head>
        <meta charset="utf-8">

        <title>银河之浪</title>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100%;
                width: 100%;
                margin: 0;
            }
            .frame {
                width: 900px;
                margin: 0 auto;
            }
            .header {
                height: 80px;
                border: 1px #636b6f solid;
                box-shadow: 1px 1px 1px #888888;
                padding: 10px 30px;
            }
            .header .title {
                color: #c69500;
                margin: 0;
            }
            .header .desc {
                margin: 0 0 0 130px;
            }
            .container {
                padding-top: 20px;
                padding-left: 30px;
                min-height: 400px;
            }
            .container .list li {
                margin: 5px 0;
            }
            .footer {
                color: #000;
                padding: 40px 0;
                border-top: 1px #888888 solid;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="frame">
            <div class="header">
                <h1 class="title">银河之浪</h1>
                <p class="desc">加油吧！少年。</p>
            </div>
            <div class="container">
                <ul class="list">
                    <li><a href="{{ route('code.index') }}">代码仓库</a></li>
                    <li><a href="javascript:void(0)">......</a></li>
                </ul>
            </div>
            <div class="footer">
                Copyright&copy;yinhezhilang    2018-?
            </div>
        </div>
    </body>
</html>
