<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" type="text/css" href="/font_Icon/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/css/chat.css">

</head>

<body>

    <div class="chatContainer">
        <div class="chatBtn">
            <i class="iconfont icon-xiaoxi1"></i>
        </div>
        <div class="chat-message-num">10</div>
        <div class="chatBox" ref="chatBox">
            <div class="chatBox-head">
                <div class="chatBox-head-one">
                    Conversations
                    <div class="chat-close" style="margin: 10px 10px 0 0;font-size: 14px">关闭</div>
                </div>
                <div class="chatBox-head-two">
                    <div class="chat-return">返回</div>
                    <div class="chat-people">
                        <div class="ChatInfoHead">
                            <img src="/img/icon01.png" alt="头像" />
                        </div>
                        <div class="ChatInfoName">这是用户的名字，看看名字到底能有多长</div>
                    </div>
                    <div class="chat-close">关闭</div>
                </div>
            </div>
            <div class="chatBox-info">
                <div class="chatBox-list" ref="chatBoxlist">




                </div>
                <div class="chatBox-kuang" ref="chatBoxkuang">
                    <div class="chatBox-content">
                        <div class="chatBox-content-demo" id="chatBox-content-demo">

                            <!-- <div class="clearfloat">
                                <div class="author-name">
                                    <small class="chat-date"></small>
                                </div>
                                <div class="left">
                                    <div class="chat-avatars"><img src="/img/icon01.png" alt="头像" /></div>
                                    <div class="chat-message">
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="clearfloat">
                                <div class="author-name">
                                    <small class="chat-date"></small>
                                </div>
                                <div class="left">
                                    <div class="chat-avatars"><img src="/img/icon01.png" alt="头像" /></div>
                                    <div class="chat-message">
                                        <img src="/img/1.png" alt="">
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="clearfloat">
                                <div class="author-name">
                                    <small class="chat-date">2017-12-02 14:26:58</small>
                                </div>
                                <div class="right">
                                    <div class="chat-message">嗯，适合做壁纸</div>
                                    <div class="chat-avatars"><img src="/img/icon02.png" alt="头像" /></div>
                                </div>
                            </div> -->

                        </div>
                    </div>
                    <div class="chatBox-send">
                        <div class="div-textarea" contenteditable="true"></div>
                        <div>
                            <button id="chat-biaoqing" class="btn-default-styles">
                                <i class="iconfont icon-biaoqing"></i>
                            </button>
                            <label id="chat-tuxiang" title="发送图片" for="inputImage" class="btn-default-styles">
                                <input type="file" onchange="selectImg(this)" accept="image/jpg,image/jpeg,image/png"
                                    name="file" id="inputImage" class="hidden">
                                <i class="iconfont icon-tuxiang"></i>
                            </label>
                            <button id="chat-fasong" class="btn-default-styles"><i class="iconfont icon-fasong"></i>
                            </button>
                        </div>
                        <div class="biaoqing-photo">
                            <ul>
                                <li><span class="emoji-picker-image" style="background-position: -9px -18px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -40px -18px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -71px -18px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -102px -18px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -133px -18px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -164px -18px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -9px -52px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -40px -52px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -71px -52px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -102px -52px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -133px -52px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -164px -52px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -9px -86px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -40px -86px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -71px -86px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -102px -86px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -133px -86px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -164px -86px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -9px -120px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -40px -120px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -71px -120px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -102px -120px;"></span>
                                </li>
                                <li><span class="emoji-picker-image" style="background-position: -133px -120px;"></span>
                                </li>
                                <li><span class="emoji-picker-image" style="background-position: -164px -120px;"></span>
                                </li>
                                <li><span class="emoji-picker-image" style="background-position: -9px -154px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -40px -154px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -71px -154px;"></span></li>
                                <li><span class="emoji-picker-image" style="background-position: -102px -154px;"></span>
                                </li>
                                <li><span class="emoji-picker-image" style="background-position: -133px -154px;"></span>
                                </li>
                                <li><span class="emoji-picker-image" style="background-position: -164px -154px;"></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/jquery.min.js"></script>
    <script>

        screenFuc();
        function screenFuc() {
            var topHeight = $(".chatBox-head").innerHeight();//聊天头部高度
            //屏幕小于768px时候,布局change
            var winWidth = $(window).innerWidth();
            if (winWidth <= 768) {
                var totalHeight = $(window).height(); //页面整体高度
                $(".chatBox-info").css("height", totalHeight - topHeight);
                var infoHeight = $(".chatBox-info").innerHeight();//聊天头部以下高度
                //中间内容高度
                $(".chatBox-content").css("height", infoHeight - 46);
                $(".chatBox-content-demo").css("height", infoHeight - 46);

                $(".chatBox-list").css("height", totalHeight - topHeight);
                $(".chatBox-kuang").css("height", totalHeight - topHeight);
                $(".div-textarea").css("width", winWidth - 106);
            } else {
                $(".chatBox-info").css("height", 495);
                $(".chatBox-content").css("height", 448);
                $(".chatBox-content-demo").css("height", 448);
                $(".chatBox-list").css("height", 495);
                $(".chatBox-kuang").css("height", 495);
                $(".div-textarea").css("width", 260);
            }
        }
        (window.onresize = function () {
            screenFuc();
        })();
        //未读信息数量为空时
        var totalNum = $(".chat-message-num").html();
        if (totalNum == "") {
            $(".chat-message-num").css("padding", 0);
        }
        $(".message-num").each(function () {
            var wdNum = $(this).html();
            if (wdNum == "") {
                $(this).css("padding", 0);
            }
        });


        //打开/关闭聊天框
        $(".chatBtn").click(function () {
            $(".chatBox").toggle(10);
        })
        $(".chat-close").click(function () {
            $(".chatBox").toggle(10);
        })

        // 接受消息的对象ID
        var uid = '';
        var receive = "";
        //进聊天页面
        function into(o) {
            // 接收对象
            receive = o.children[1].children[0].innerHTML
            // 数据库查询聊天记录 getUname receive
            $.ajax({
                url: "/api/selectMysql",
                dataType: "json",
                type: 'get',
                data: {
                    user: getUname,
                    receive: receive
                },
                success: function (data) {
                    if (data.code == 200) {
                        // 消息记录显示
                        var str = ''
                        for (var i = 0; i < data.data.length; i++) {
                        console.log( data )

                            if (data.data[data.data.length - i - 1]['sendA'] == getUname) {
                                var clas = `
                                        <div class="right">
                                            <div class="chat-message">
                                            `+ data.data[data.data.length - i - 1]['message'] + `
                                            </div>
                                            <div class="chat-avatars"><img src="/img/icon01.png" alt="头像" /></div>
                                        </div>
                                        `

                            } else {
                                var clas = `
                                        <div class="left">
                                            <div class="chat-avatars"><img src="/img/icon01.png" alt="头像" /></div>
                                            <div class="chat-message">
                                            `+ data.data[data.data.length - i - 1]['message'] + `
                                            </div>
                                        </div>
                                            `
                            }
                            str += `
                                <div class="clearfloat">
                                    <div class="author-name">
                                        <small class="chat-date"></small>
                                    </div>
                                    `+ clas + `
                                </div>
                            `
                        }
                        $(".chatBox-content-demo").html(str)
                    }
                }

            })

            $(".chatBox-head-one").toggle();
            $(".chatBox-head-two").toggle();
            $(".chatBox-list").fadeToggle();
            $(".chatBox-kuang").fadeToggle();

            //传名字
            // $(".ChatInfoName").text($(this).children(".chat-name").children("p").eq(0).html( receive ));
            $(".ChatInfoName").html(receive)
            // 取得 用户对应id
            uid = $(o).data('id');
            uname = o.children[1].children[0].innerHTML
            //传头像
            $(".ChatInfoHead>img").attr("src", $(this).children().eq(0).children("img").attr("src"));

            //聊天框默认最底部
            $(document).ready(function () {
                $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
            });

        }

        //返回列表
        $(".chat-return").click(function () {
            $(".chatBox-head-one").toggle(1);
            $(".chatBox-head-two").toggle(1);
            $(".chatBox-list").fadeToggle(1);
            $(".chatBox-kuang").fadeToggle(1);
        });

        //      发送信息
        $("#chat-fasong").click(function () {
            // 信息 内容
            var textContent = $(".div-textarea").html().replace(/[\n\r]/g, '<br>')
            var message = uid + ":" + textContent + ":" + getUname + ":" + receive
            ws.send(message)
            // 填充发送消息内容
            fillContent(textContent)
        });

        //      发送表情
        $("#chat-biaoqing").click(function () {
            $(".biaoqing-photo").toggle();
        });
        $(document).click(function () {
            $(".biaoqing-photo").css("display", "none");
        });
        $("#chat-biaoqing").click(function (event) {
            event.stopPropagation();//阻止事件
        });

        $(".emoji-picker-image").each(function () {
            $(this).click(function () {
                var bq = $(this).parent().html();

                $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                    "<div class=\"author-name\"><small class=\"chat-date\">2017-12-02 14:26:58</small> </div> " +
                    "<div class=\"right\"> <div class=\"chat-message\"> " + bq + " </div> " +
                    "<div class=\"chat-avatars\"><img src=\"/img/icon01.png\" alt=\"头像\" /></div> </div> </div>");
                //发送后关闭表情框
                $(".biaoqing-photo").toggle();
                //聊天框默认最底部
                $(document).ready(function () {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                });
            })
        });

        //      发送图片
        function selectImg(pic) {
            if (!pic.files || !pic.files[0]) {
                return;
            }
            var reader = new FileReader();
            reader.onload = function (evt) {
                var images = evt.target.result;
                $(".chatBox-content-demo").append("<div class=\"clearfloat\">" +
                    "<div class=\"author-name\"><small class=\"chat-date\">2017-12-02 14:26:58</small> </div> " +
                    "<div class=\"right\"> <div class=\"chat-message\"><img src=" + images + "></div> " +
                    "<div class=\"chat-avatars\"><img src=\"/img/icon01.png\" alt=\"头像\" /></div> </div> </div>");
                //聊天框默认最底部
                $(document).ready(function () {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                });
            };
            reader.readAsDataURL(pic.files[0]);
        }


        // 填充在线用户
        function fillUsers(userList, idList) {
            var str = ''
            for (var i = 0; i < userList.length; i++) {

                if (status > 0) {
                    var plus = '<div class="message-num">有消息未读</div>'
                    console.log( 4 )
                } else {
                    var plus = ''
                }
                str += `
                    <div class="chat-list-people" onclick="into(this)" data-id="`+ idList[i] + `">
                        <div><img src="/img/icon01.png" alt="头像" /></div>
                        <div class="chat-name">
                            <p>`+ userList[i] + `</p>
                        </div>
                        `+ plus + `
                    </div>`
            }

            $(".chatBox-list").html(str)
        }

        // 连接websocket
        var ws = new WebSocket('ws://127.0.0.1:8080');
        // 获取浏览器 uname 参数
        var getUname = getPar('uname')
        // 连接 执行的方法
        ws.onopen = function (e) {
            // 保存用户 昵称 
            ws.send('user:' + getUname)
        }

        ws.onmessage = function (e) {
            var data = JSON.parse(e.data)
            if (data[0] == 'user') {
                // 用户列表
                var userList = []
                // ID列表
                var idList = []

                for (var i = 1; i < data.length; i++) {
                    var dl = data[i].split(":")
                    if (dl[1] == getUname) {
                        continue
                    }
                    userList.push(dl[1])
                    idList.push(dl[0])
                }

                // 赋于"所有人" 用户
                userList.unshift('所有人')
                idList.unshift('all')
                // 填充用户列表
                fillUsers(userList, idList)
            } else {

                var dl = data[0].split(':')
                // 填充内容
                var mes = data[0].split(":")    //消息内容
                // 如果是发给所有人 发送者保存
                if (dl[3] == '所有人') {
                    if (dl[2] == getUname) {
                        fillMysql(dl[3], dl[2], mes[1])
                        return;
                    } else {
                        // 防止 乱收现象
                        if (getUname != dl[3]) return;

                        fillContent(dl[1], dl[3])
                        return;
                    }
                }

                // 填充内容
                fillContent(dl[1], dl[3])
                // ajax 保存消息到数据库 dl[1] getUname
                fillMysql(dl[3], dl[2], mes[1])
            }
        }

        // 封装保存数据库函数
        function fillMysql(receive, user, mes) {
            $.ajax({
                url: "/api/saveMysql",
                dataType: 'json',
                type: 'get',
                data: {
                    receive: receive,
                    user: user,
                    mes: mes
                }
            })
        }


        // 封装消息未读状态
        function isNotLook(send,receive) {
            $.ajax({
                url: "/api/isNotLook",
                dataType: 'json',
                type: 'get',
                data: {
                    send: send,
                    receive: receive,
                }, success: function (data) {
  
                }
            })
        }

        function getPar(par) {
            //获取当前URL
            var local_url = document.location.href;
            //获取要取得的get参数位置
            var get = local_url.indexOf(par + "=");
            if (get == -1) {
                return false;
            }
            //截取字符串
            var get_par = local_url.slice(par.length + get + 1);
            //判断截取后的字符串是否还有其他get参数
            var nextPar = get_par.indexOf("&");
            if (nextPar != -1) {
                get_par = get_par.slice(0, nextPar);
            }
            return get_par;
        }

        // 填充发送内容
        function fillContent(content, user) {
            if (content != "") {
                // 发送者
                if (getUname == user) {
                    var clas = `
                            <div class="left">
                                <div class="chat-avatars"><img src="/img/icon01.png" alt="头像" /></div>
                                <div class="chat-message">
                                `+ content + `
                                </div>
                            </div>
                            `
                } else {
                    var clas = `
                            <div class="right">
                                <div class="chat-message">
                                `+ content + `
                                </div>
                                <div class="chat-avatars"><img src="/img/icon01.png" alt="头像" /></div>
                            </div>
                            `
                }
                var str = `
                        <div class="clearfloat">
                            <div class="author-name">
                                <small class="chat-date"></small>
                            </div>
                            `+ clas + `
                        </div>
                    `
                $(".chatBox-content-demo").append(str)

                //发送后清空输入框
                $(".div-textarea").html("");
                //聊天框默认最底部
                $(document).ready(function () {
                    $("#chatBox-content-demo").scrollTop($("#chatBox-content-demo")[0].scrollHeight);
                });
            }
        }

    </script>

</body>

</html>