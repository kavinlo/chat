<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/css/layui.css">
    <link rel="stylesheet" href="/css/login.css">
    <title>Chat-system</title>
</head>
 
<body class="login-wrap">
    <div class="login-container" id="app">

        <form class="login-form" method="get" action="/chat-system">
            <h1 style="color:#29adeb">Chat-system</h1>

            <div class="input-group">
                <input type="text" name="uname" id="username" v-model="uname" class="input-field" placeholder="昵称">
                <label for="username" class="input-label">
                    <span class="label-title"></span>
                </label>
            </div>

            <button type="submit" class="login-button" >登录<i class="ai ai-enter"></i></button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> -->

    
</body>

</html>