var Visualizer = function(){
    this.file = null, //要处理的文件
    this.audioContext = null, //进行音频处理的上下文，稍后会进行初始化
    this.sprite = null; //播放节点
};
Visualizer.prototype = {
    _prepareAPI: function() {
        //统一前缀，方便调用
        window.AudioContext = window.AudioContext || window.webkitAudioContext || window.mozAudioContext || window.msAudioContext;
        //这里顺便也将requestAnimationFrame也打个补丁，后面用来写动画要用
        window.requestAnimationFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.msRequestAnimationFrame;
        //安全地实例化一个AudioContext并赋值到Visualizer的audioContext属性上，方便后面处理音频使用
        try {
            this.audioContext = new AudioContext();
        } catch (e) {
            console.log('!妳的浏览器不支持AudioContext:(');
            console.log(e);
        }
    },
    _start: function() {
    //read and decode the file into audio array buffer
    var that = this, //当前this指代Visualizer对象，赋值给that以以便在其他地方使用
        file = this.file; //从Visualizer对象上获取前面得到的文件
        var fileResult = file; //这是读取成功得到的结果ArrayBuffer数据
        var audioContext = that.audioContext; //从Visualizer得到最开始实例化的AudioContext用来做解码ArrayBuffer
        audioContext.decodeAudioData(fileResult, function(buffer) { //解码成功则调用此函数，参数buffer为解码后得到的结果
            that._visualize(audioContext, buffer); //调用_visualize进行下一步处理，此方法在后面定义并实现
        }, function(e) { //这个是解码失败会调用的函数
            console.log("!哎玛，文件解码失败:(");
        });
    },
    _visualize: function(audioContext, buffer) {
        var audioBufferSouceNode = audioContext.createBufferSource();
        audioBufferSouceNode.connect(audioContext.destination);
        audioBufferSouceNode.buffer = buffer;
        audioBufferSouceNode.start(0);
    },
    _loadSound: function(url) {
        var that = this;
        var request = new XMLHttpRequest(); //建立一个请求
        request.open('GET', url, true); //配置好请求类型，文件路径等
        request.responseType = 'arraybuffer'; //配置数据返回类型
        request.onload = function() {
            that.file = request.response;
        }
        request.send();
    },
    start: function(url,sprite){//初始化函数
        var that = this;
        that._prepareAPI();
        that._loadSound(url);
        that.sprite = sprite;
    },
    play: function(sprite){
        var that = this;
        that.player(that.sprite[sprite][0],that.sprite[sprite][1]);
    },
    player: function(start,end){
        var that = this;
        audioContext=that.audioContext;
        audioContext.decodeAudioData(that.file, function(buffer) { 
            var audioBufferSouceNode = audioContext.createBufferSource();
            audioBufferSouceNode.connect(audioContext.destination);
            audioBufferSouceNode.buffer = buffer;
            audioBufferSouceNode.start(0,start,end);
        }, function(e) { //这个是解码失败会调用的函数
                console.log("!哎玛，文件解码失败:(");
        });
    }
} 