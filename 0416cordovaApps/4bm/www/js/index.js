

var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        document.getElementById('iframe').src="http://total0808.cafe24.com/ref0416/app/index.php?no=4";
        window.onmessage=function(e){
            document.getElementById('iframe').src=e.data;
        }
    }
};



app.initialize();