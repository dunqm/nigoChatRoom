Vue.component('icon-box', {
	props: ['name','src'],
	template: '<a href="#" class="avatar" :data-icon-name="name"><img v-on:click="$emit(\'por\', $event, name)" :src="src"></a>',
});

var avatar = new Vue({
	el:"#avatar",
	data:{
		datas : [
		{ id : 1, name : "tanaka" ,src : avatarImgBase64.tanaka},
		{ id : 2, name : "kanra" ,src : avatarImgBase64.kanra},
		{ id : 3, name : "setton" ,src : avatarImgBase64.setton},
		{ id : 4, name : "zaika" ,src : avatarImgBase64.zaika},
		{ id : 5, name : "bakyura" ,src : avatarImgBase64.bakyura},
		{ id : 6, name : "gg" ,src : avatarImgBase64.gg},
		{ id : 7, name : "zawa" ,src : avatarImgBase64.zawa},
		{ id : 8, name : "kakka" ,src : avatarImgBase64.kakka},
		{ id : 9, name : "admin" ,src : avatarImgBase64.admin},
		],
		lastpic : null,
	},
	methods:{
		onPor: function(pic, name){
			$("#portrait").val(name);
			if(this.lastpic)this.lastpic.style.border="";
            this.lastpic=pic.target;
            this.lastpic.style.border="solid";
		}
	},
});
