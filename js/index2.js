
function atsign(fromname,content){
    var iconpic="data:image/jpg;base64,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";
    if (window.webkitNotifications) {
            if (window.webkitNotifications.checkPermission() == 0) {
                		var n = window.webkitNotifications.createNotification(iconpic,fromname,content);
                		n.onclick = function() {this.cancel();}
                		n.show();
           	}else{
		window.webkitNotifications.requestPermission(atsign);
            }
    }else if("Notification" in window){
            // 判断是否有权限
            if (Notification.permission === "granted") 
                var notification = new Notification( fromname,{"icon": iconpic,"body": content});
            else if (Notification.permission !== 'denied') 
                Notification.requestPermission(function(permission) {
                    if (!('permission' in Notification)) {
                        Notification.permission = permission;
                    }
                    if (permission === "granted") { 
                        var notification = new Notification( fromname,{"icon": iconpic,"body": content});
                    }
                });
          }
}
function issign(){
    if (window.webkitNotifications) {
            if (window.webkitNotifications.checkPermission() == 0) {
           	}else{
                window.webkitNotifications.requestPermission();
            }
    }else if("Notification" in window){
            // 判断是否有权限
            if (Notification.permission !== 'denied') 
                Notification.requestPermission();
    }
}

var addExpressionToTextarea=function(){
    var Expression=$(this).text();
    if(Whispers.toid){
    Whispers.content += Expression;
    }else{
    Message_box.content += Expression;
    }
    Message_box.onToggleExpression();
}

var user = new Vue({
    el : "#user",
    data : {
        name : "",
        portrait : "",
        uid : 0,
    },
    created: function(){
        $.get("api.php",{action:"userdata"},function(data){
            if(data.no == 0){
                user.name = data.name;
                user.portrait = data.portrait;
                user.uid = data.uid;
            }
        },"json")
    }
});

var talks_template = '<dl :class="\'talk \' + data.portrait" :id="data.id" style="display: block; ">    <dt class="dropdown" >        <div :class="\'avatar avatar-\' + data.portrait" @click="addUserNameToTextarea" >            <span>{{data.name}}</span>        </div>        <div data-toggle=dropdown class="name" >            <span>{{data.name}}</span>        </div>        <ul class=dropdown-menu role=menu>            <li>                <a tabindex=-1 class=dropdown-item-reply @click="WhispersShow">                    {{data.name}}                    (uid:{{data.uid}})                </a>            </li>        </ul>    </dt>    <dd class="bounce">        <div class="bubble">            <div :class="\'tail-wrap \' + tail" style="background-size: 65px; ">                <div class="tail-mask"></div>            </div>            <p class="body">{{data.content}}</p>        </div>    </dd></dl>';
var talks_system_template = '<dl class="talk system" :id="data.id">{{data.content}}</dl>';
var talks_Msg_template = '<li class="Msg" @click="onClick"><a>ーー<span>{{data.name}}</span>(uid:<span>{{data.uid}}</span>)对您发起了悄悄话</a></li>';
var Member_list_template = '<li><span :class="\'avatar avatar-\'+data.portrait"></span><span class="name">{{data.name}} </span></li>';

Vue.component('member_list', {
    props : ['data'],
    template : Member_list_template,
});

Vue.component('talks_msg', {
    props : ['data'],
    template : talks_Msg_template,
    created: function(){
        if(Message_box.menu.isNotifications) atsign("您有新的悄悄话！",'ーー'+this.data.name+'(uid:'+this.data.uid+')对您发起了悄悄话');
        if(Message_box.menu.isSoundbool)sound.play("userin");
    },
    methods:{
        onClick: function(){
            Whispers.showBox(this.data.uid,this.data.name);
        }
    },
});

Vue.component('talks_list', {
    data:function (){
        var tail=["","top","center","bottom"];
        return{
            tail:tail[this.GetRandomNum(1,3)]
        }
    },
    props : ['data','isWhispers'],
    template : talks_template,
    created: function () {
        if(Message_box.menu.isSoundbool)sound.play('bubble');
        if(Message_box.menu.isNotifications) if(this.data.at)atsign(this.data.name + "在他的消息中@了您！",this.data.content);
    },
    methods:{
        GetRandomNum: function(Min,Max){   
            var Range = Max - Min;   
            var Rand = Math.random();   
            return(Min + Math.round(Rand * Range));   
        },
        addUserNameToTextarea: function(){
            if(this.data.isWhispers) return;
            var text=Message_box.content;
            if(text.length>0){
                Message_box.content =  text + ' @' + this.data.name + ' ';
            }else{
                Message_box.content =  text + '@' + this.data.name + ' ';
            }
        },
        WhispersShow: function(){
            if(this.data.isWhispers) return;
            Whispers.showBox(this.data.uid,this.data.name);
        }
    }
});

Vue.component('talks_system_list', {
    props : ['data'],
    template : talks_system_template,
    created: function () {
        if(Message_box.menu.isSoundbool)sound.play('userout');
    },
});




var Message_box = new Vue({
    el : "#message_box_inner",
    data : {
        menu : {
            isShowMember : false,
            isShowExpression : false,
            isNotifications : false,
            isSoundbool : true,
        },
        members : {
            datas : [],
            count : "正在加载中...   ",
        },
        content : "",

    },
    methods : {
        onToggleMsg : function(){
            this.menu.isNotifications = !this.menu.isNotifications;
            issign();
        },
        onToggleExpression : function(){
            this.menu.isShowExpression = !this.menu.isShowExpression;
            var Expression=$("#expression");
            if( this.menu.isShowExpression ) Expression.slideDown("fast");
            else Expression.slideUp("fast");
        },
        onToggleSoundbool : function(){
            this.menu.isSoundbool = !this.menu.isSoundbool;
        },
        onToggleMember : function(){
            this.menu.isShowMember = !this.menu.isShowMember;
            var membersElement=$("#members");
            if(this.menu.isShowMember){
                this.members.count = "正在加载中...";
                $.get('api.php',{action:'roommember'},function(data){
                    if(data.no==0){
                        Message_box.members.datas = data.list;
                        Message_box.members.count = data.num;
                    }
                },'json');
                membersElement.slideDown("fast");
            }else{
                membersElement.slideUp("fast");
            }
        },
        onLogout : function(){
            location.search = "?action=logout";
        },
        checkCount : function(){
            return (140 - this.content.length);
        },
        postMessages : function(){
            event.preventDefault();
            if(this.content.length>0){
                $('input.form-control').attr('disabled','disabled');
                $('input.form-control').attr('value','发送中...');
                $.post('api.php?action=post',{content:this.content},function(data){
                    if(data.no!=0)alert(data.err);
                    else Message_box.content = "";
                    $("input.form-control").removeAttr('disabled');
                    $("input.form-control").attr('value','POST!');
                },"json");
            }
        },
    },
});

var whispers_msg = new Vue({
    el : "#whispers_msg",
    data : {
        datas : [],
    },
    methods:{
        getMsg: function(){
            $.get("api.php",{action:"Msg_whispers"},function(data){
                if(data.no==0){
                    whispers_msg.datas = data.list;
                }else{
                    location.reload(true);
                }
                setTimeout(whispers_msg.getMsg,1000);
            },"json") 
        }
    },
});

var talks_box = new Vue({
    el : "#talks",
    data : {
        nowid : 0,
        count : 0,
        datas : [],
    },
    methods:{
        getMessages: function(){
            $.get("api.php",{action:"Messages",nowid:talks_box.nowid},function(data){
                if(data.no==0){
                    if(data.num){
                        talks_box.nowid=data.newid;
                        talks_box.datas.push(...data.list);
                        talks_box.count += data.num;
                    }
                }else{
                    location.reload(true);
                }
                setTimeout(talks_box.getMessages,10);
            },"json")
        },
    },
    computed: {
        reversedDatas: function(){
            var reDatas=[];
            for(i = 0; i < this.count ; i++) reDatas[i] = this.datas[ this.count - 1 - i ];
            return reDatas;
        },
    },
});
var Whispers = new Vue({
    el: "#whispers",
    data: {
        display : "none",
        content :"",
        toid : 0,
        toname : "",
        nowWhispersid : 0,
        datas : [],
        count : 0,
    },
    methods:{
        closeBox: function(){
            this.display = "none";
            this.content = "";
            this.toid = 0;
            this.name = "";
            this.nowWhispersid = 0;
            this.datas.splice(0,this.count);
            this.count = 0;
        },
        showBox: function(toid,name){
            this.toid = toid;
            this.toname = name;
            this.display = "";
            this.getMessages();
        },
        checkCount: function(){
            return (140 - this.content.length);
        },
        getMessages: function(){
            if(this.toid != 0)
            $.get("api.php",{action:"Messages_whispers",nowid:this.nowWhispersid,toid:this.toid},function(data){
                if(data.no==0){
                    if(data.num){
                        Whispers.nowWhispersid=data.newid;
                        Whispers.datas.push(...data.list);
                        Whispers.count += data.num;
                        setTimeout(Whispers.getMessages,10);
                    }
                }else{
                    alert(data.err);
                    location.reload(true);
                }
            },"json") 
        }, 
        postMessages: function(){
            event.preventDefault();
            if(this.content.length>0){
                $("input.whispers-submit-btn").attr('disabled','disabled');
                $("input.whispers-submit-btn").attr('value','发送中...');
                $.post('api.php?action=post_whispers',{content:this.content,touid:this.toid},function(data){
                    if(data.no!=0) alert(data.err);
                    else Whispers.content = "";
                    $("input.whispers-submit-btn").removeAttr('disabled');
                    $("input.whispers-submit-btn").attr('value','POST!');
                },"json");
            }
        },
    },
    computed: {
        reversedDatas: function(){
            var reDatas=[];
            for(i = 0; i < this.count ; i++) reDatas[i] = this.datas[ this.count - 1 - i ];
            return reDatas;
        },
    },
});

whispers_msg.getMsg();
talks_box.getMessages();