<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="./style/index2.css" rel="stylesheet" type="text/css">
<?php if(is_mobile())echo '<meta name="viewport" content="width=device-width,user-scalable=no"/><link href="./style/mobile.css" rel="stylesheet" type="text/css">'; ?>

    <script src="./js/t.js"></script>
    <script>var sound=new Howl({"urls":["./music/effect.mp3"],"sprite":{"bubble":[0,287.3469387755102],"userin":[2000,975.2380952380952],"userout":[4000,400.5442176870746]}});</script>
    
    <script src="./js/jQuery.js"></script>
    <script src="./js/vue.js"></script>

    <title>NIGOの聊天室</title>
    <link rel="nigo icon" href="./img/icon.jpg" >
</head>
<body>
    <div id=body>

        <div id="whispers" class="whispers" :style="{display:display}">
            <div class="whispers-close"  @click="closeBox"></div>
            <div class="room-input-wrap">
                <textarea name="message" class="whispers-control" maxlength="140" autofocus="" v-model="content" @input="checkCount" @keydown.enter="postMessages"></textarea><span class="counter">{{checkCount()}}</span>
            </div>
            <div class="room-submit-wrap">
                <input type="submit" class="whispers-submit-btn" value="POST!" @click="postMessages">
            </div>
            <div class="whispers_talks" >
                <div id="box_top">
                    <talks_system_list :data="{id:1,content:'您正在对' + toname + '(uid:' + toid + ')进行悄悄话~'}" :isWhispers=true ></talks_system_list>
                </div>
                <template v-for="data in reversedDatas">
                    <talks_system_list v-if="data.portrait=='system'" :key=data.id :data=data :isWhispers=true ></talks_system_list>
                    <talks_list v-else :key=data.id :data=data ></talks_list>
                </template> 
            </div>
        </div>

        <ul id="expression" class="expression" style="display:none;">    
            <li><a><span >&lt;(￣︶￣)&gt;</span>｜<span >[]~(￣▽￣)~*</span>｜<span >(￣ˇ￣)</span>｜<span >(￣﹏￣)</span></a></li>
            <li><a><span >(‵﹏′)</span>｜<span >(￣ε(#￣)</span>｜<span >(￣.￣)</span>｜<span >（﹁ _,﹁）</span></a></li>
            <li><a><span >(￣▽￣)~*</span>｜<span >Σ( ° △ °|||)︴</span>｜<span >(￣▽￣)"</span>｜<span >╮(╯▽╰)╭</span></a></li>
            <li><a><span >(=￣ω￣=)</span>｜<span >(￣0 ￣)y</span>｜<span >(。_。)</span>｜<span >(＞﹏＜)</span></a></li>
            <li><a><span >(→_→)</span>｜<span >(￣o￣) . z Z</span>｜<span >m( _　_ )m</span>｜<span >&lt;(￣ ﹌ ￣)@m</span></a></li>
            <li><a><span >(づ￣ 3￣)づ</span>｜<span >o(╥﹏╥)o</span>｜<span >~\(≧▽≦)/~</span>｜<span >o(￣ヘ￣o＃)</span></a></li>
        </ul>

        <div class=message_box>
            <ul id=whispers_msg class=whispers_msg>
                <talks_Msg v-for="data in datas" :data=data ></talks_Msg>
            </ul>

            <div class="portrait_name" id="user" style="width:70px;height:80px;position:absolute;margin-top:14px;margin-left:18%;">
                <div :class="'avatar avatar-'+portrait"style="width:70px;height:70px;background-size:70px 70px;"></div>
                <div class="name"style="text-align:center;font-size:15px;"><span>{{name}}</span></div>
            </div>

            <div class=message_box_inner id="message_box_inner">

                <div class=clearfix>
                    <h2 id=room_name>NIGOの聊天室</h2>
                        <ul class=menu>
                          <li class="whispers needsclick" style="display: list-item;" :class="{whispers_off:!menu.isNotifications,whispers_on:menu.isNotifications}" @click="onToggleMsg"></li>
                          <li class="expression needsclick" style="display: list-item;" :class="{expression_off:!menu.isShowExpression,expression_on:menu.isShowExpression}" @click="onToggleExpression"></li>
                          <li class="sound needsclick" style="display: list-item;" :class="{sound_on:menu.isSoundbool,sound_off:!menu.isSoundbool}" @click="onToggleSoundbool"></li>
                          <li class="member needsclick" style="display: list-item;" :class="{member_off:!menu.isShowMember,member_on:menu.isShowMember}" @click="onToggleMember"></li>
                          <li class="logout" style="display: list-item;"><input type="submit" value="登出" @click="onLogout"></li>
                        </ul>
                </div>

                <div class=room-input-wrap>
                    <textarea name=message class=form-control maxlength=140 autofocus v-model="content" @input="checkCount" @keydown.enter="postMessages"></textarea>
                    <span class="counter">{{checkCount()}}</span>
                </div>

                <div class=room-submit-wrap>
                    <input type=submit class="form-control room-submit-btn" value="POST!" @click="postMessages">
                </div>

                <ul class="room-members panel-hide" id="members">
                    <li>({{members.count}}), </li>
                    <member_list v-for="data in members.datas" :data="data"></member_list>
                </ul>

            </div>
        </div>


        <div id=talks_box>
          <div id=talks class=talks >
                <template v-for="data in reversedDatas">
                    <talks_system_list 
                    v-if="data.portrait=='system'" 
                    :key=data.id 
                    :data=data
                    ></talks_system_list>
                    <talks_list v-else :key=data.id :data=data ></talks_list>
                </template> 
          </div>
        </div>

    </div>
</body>
<script src="./js/index2.js?v=1.4"></script>
<script>$("#expression").find("span").click(addExpressionToTextarea);</script>

