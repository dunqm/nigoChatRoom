
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="./style/admin.css" rel="stylesheet">
    <script src="./js/jQuery.js"></script>
    <script src="./js/vue.js"></script>
    <script src="./js/avatarImgBase64.js"></script>
    <title>NIGOの聊天室</title>
    <link rel="nigo icon" href="./img/icon.jpg" >
</head>
    
    
<body> 
    <div class="container">
        <div class="row-fluid">

            <div class="span4 well" style="text-align: center;">
                <div id = "avatar">
                    <icon-box 
                        v-for = "data in datas"
                        :key = "data.id"
                        :name = "data.name"
                        :src = "data.src"
                        @por = "onPor"
                    ></icon-box>
                </div>
                <form action="index.php?action=_admin" method="post">
                    <input class="username" type="text" name="name" value="" placeholder="YOUR NAME" maxlength="10">
                    <input type="hidden" id="portrait" name="portrait" value="tanaka"><button class="login-button btn btn-info">ENTER</button>
                </form>
            </div>

            <div class="span8 well">
                <div class="room-list">
                    <div class="room-list-room">
                        <h1 style="margin-bottom: 20px;">NIGO动漫聊天室</h1>
                        <div class="row-fluid" style="margin-bottom: 10px">
                            <div class="span6" style="width:600px">
                                <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9Ijk1cHgiIGhlaWdodD0iOTVweCIgdmlld0JveD0iMCAwIDk1IDk1IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDwhLS0gR2VuZXJhdG9yOiBTa2V0Y2ggMy4wLjQgKDgwNTMpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPmF2YXRhci1zZXR0b248L3RpdGxlPgogICAgPGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2U9Im5vbmUiIHN0cm9rZS13aWR0aD0iMSIgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBza2V0Y2g6dHlwZT0iTVNQYWdlIj4KICAgICAgICA8ZyBpZD0iYXZhdGFyLXNldHRvbiIgc2tldGNoOnR5cGU9Ik1TTGF5ZXJHcm91cCI+CiAgICAgICAgICAgIDxyZWN0IGlkPSJCYWNrZ3JvdW5kIiBmaWxsPSIjMDAwMDAwIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiB4PSIwIiB5PSIwIiB3aWR0aD0iOTUiIGhlaWdodD0iOTUiPjwvcmVjdD4KICAgICAgICAgICAgPHBhdGggZD0iTTAsOTUgTDAsMCBMOTUsMCBMOTUsOTUgTDAsOTUgWiBNMTcsOTEgTDQsOTEgTDQsNCBMOTEsNCBMOTEsOTEgTDc3LDkxIEw3Nyw3MC45OTMyNDQ4IEM3Nyw2Ni41Nzg2OTc2IDczLjQyNjQxMDcsNjMgNjkuMDAxNDUwNCw2MyBMMjQuOTk4NTQ5Niw2MyBDMjAuNTgxMDcyNiw2MyAxNyw2Ni41ODc1NTg1IDE3LDcwLjk5MzI0NDggTDE3LDkxIEwxNyw5MSBaIE0yOC4wNTY2MDM4LDkxIEwzMS40NTI4MzAyLDkxIEwzMS40NTI4MzAyLDc4LjQ5NjI2OTggQzMxLjQ1MjgzMDIsNzcuNjY5OTAyOCAzMC43ODE4NDUxLDc3IDI5Ljk1MzMwOTgsNzcgTDI5LjU1NjEyNDIsNzcgQzI4LjcyNzk2MTksNzcgMjguMDU2NjAzOCw3Ny42NzM3ODkxIDI4LjA1NjYwMzgsNzguNDk2MjY5OCBMMjguMDU2NjAzOCw5MSBMMjguMDU2NjAzOCw5MSBaIE02Mi41NDcxNjk4LDkxIEw2NS45NDMzOTYyLDkxIEw2NS45NDMzOTYyLDc4LjQ5NjI2OTggQzY1Ljk0MzM5NjIsNzcuNjY5OTAyOCA2NS4yNzI0MTEyLDc3IDY0LjQ0Mzg3NTgsNzcgTDY0LjA0NjY5MDIsNzcgQzYzLjIxODUyOCw3NyA2Mi41NDcxNjk4LDc3LjY3Mzc4OTEgNjIuNTQ3MTY5OCw3OC40OTYyNjk4IEw2Mi41NDcxNjk4LDkxIEw2Mi41NDcxNjk4LDkxIEw2Mi41NDcxNjk4LDkxIFogTTQ3LjAwMDAwMDgsNTcuMzAwMDEyMiBDNTguMjExMzgxMiw1Ny4zMDAwMTIyIDY3LjMwMDAwMDgsNDguMjExMzkyNiA2Ny4zMDAwMDA4LDM3LjAwMDAxMjIgQzY3LjMwMDAwMDgsMjUuNzg4NjMxOCA1OC4yMTEzODEyLDE2LjcwMDAxMjIgNDcuMDAwMDAwOCwxNi43MDAwMTIyIEMzNS43ODg2MjAzLDE2LjcwMDAxMjIgMjYuNzAwMDAwOCwyNS43ODg2MzE4IDI2LjcwMDAwMDgsMzcuMDAwMDEyMiBDMjYuNzAwMDAwOCw0OC4yMTEzOTI2IDM1Ljc4ODYyMDMsNTcuMzAwMDEyMiA0Ny4wMDAwMDA4LDU3LjMwMDAxMjIgTDQ3LjAwMDAwMDgsNTcuMzAwMDEyMiBaIE0zNy41NSw0Mi4yNSBDMzkuMjg5Njk3LDQyLjI1IDQwLjcsNDAuODM5Njk3IDQwLjcsMzkuMSBDNDAuNywzNy4zNjAzMDMgMzkuMjg5Njk3LDM1Ljk1IDM3LjU1LDM1Ljk1IEMzNS44MTAzMDMsMzUuOTUgMzQuNCwzNy4zNjAzMDMgMzQuNCwzOS4xIEMzNC40LDQwLjgzOTY5NyAzNS44MTAzMDMsNDIuMjUgMzcuNTUsNDIuMjUgTDM3LjU1LDQyLjI1IFogTTU3LjUsNDIuMjUgQzU5LjIzOTY5Nyw0Mi4yNSA2MC42NSw0MC44Mzk2OTcgNjAuNjUsMzkuMSBDNjAuNjUsMzcuMzYwMzAzIDU5LjIzOTY5NywzNS45NSA1Ny41LDM1Ljk1IEM1NS43NjAzMDMsMzUuOTUgNTQuMzUsMzcuMzYwMzAzIDU0LjM1LDM5LjEgQzU0LjM1LDQwLjgzOTY5NyA1NS43NjAzMDMsNDIuMjUgNTcuNSw0Mi4yNSBMNTcuNSw0Mi4yNSBaIE03MCwzNyBMNjkuOTc4NjUxNiwzNyBDNjkuOTkyODM1NiwzNi42Njg0MzY2IDcwLDM2LjMzNTA1NDkgNzAsMzYgQzcwLDIzLjI5NzQ1MDggNTkuNzAyNTQ5MiwxMyA0NywxMyBDMzQuMjk3NDUwOCwxMyAyNCwyMy4yOTc0NTA4IDI0LDM2IEMyNCwzNi4zMzUwNTQ5IDI0LjAwNzE2NDQsMzYuNjY4NDM2NiAyNC4wMjEzNDg0LDM3IEwyNC4wMjEzNDg0LDM3IEwyNCwzNyBMMjQsMzcgTDI0LDQzLjk5OTg3NzkgQzI0LDQ1LjY2Mzk1NjkgMjIuNjU0MjU4Miw0NyAyMC45OTQyMDE3LDQ3IEwxNi4wMDU3OTgzLDQ3IEMxNC4zNDg4MTU5LDQ3IDEzLDQ1LjY1Njc5OTYgMTMsNDMuOTk5ODc3OSBMMTMsMzEuMDAwMTIyMSBDMTMsMjkuMzM2MDQzMSAxNC4zNDU3NDE4LDI4IDE2LjAwNTc5ODMsMjggTDIwLjk5NDIwMTcsMjggQzIxLjA2NDI2NywyOCAyMS4xMzM3ODEyLDI4LjAwMjQwMTcgMjEuMjAyNjY1OCwyOC4wMDcxMjcxIEMyNC42MDk5MzU5LDE2Ljk5NzY1MzcgMzQuODcwOTkxOSw5IDQ3LDkgQzU5LjEyODk4NjEsOSA2OS4zOTAwMjY5LDE2Ljk5NzYyNDcgNzIuNzk3MzE1NiwyOC4wMDcwNjczIEM3Mi44NjYxOTgsMjguMDAyMzgxIDcyLjkzNTcxODEsMjggNzMuMDA1Nzk4MywyOCBMNzcuOTk0MjAxNywyOCBDNzkuNjUxMTg0MSwyOCA4MSwyOS4zNDMyMDA0IDgxLDMxLjAwMDEyMjEgTDgxLDQzLjk5OTg3NzkgQzgxLDQ1LjY2Mzk1NjkgNzkuNjU0MjU4Miw0NyA3Ny45OTQyMDE3LDQ3IEw3My4wMDU3OTgzLDQ3IEM3MS4zNDg4MTU5LDQ3IDcwLDQ1LjY1Njc5OTYgNzAsNDMuOTk5ODc3OSBMNzAsMzcgTDcwLDM3IFoiIGlkPSJGcm9udCIgZmlsbD0iI0ZGRkZGRiIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPgogICAgICAgIDwvZz4KICAgIDwvZz4KPC9zdmc+">
                                <span>admin:在左边选择头像和输入一个用户名~<br>　　　　　　　§(*￣▽￣*)§ </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>

    </div>
</body>
<script src="./js/admin.js"></script>