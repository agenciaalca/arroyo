setTimeout(function(){ 
var loadButton = document.getElementById('load-more');
var feed = new Instafeed({

    get: 'user',
    userId: 612477294,
    accessToken: '612477294.1677ed0.a96c0aa09359425d8e14e591071be28f',
    target: 'instafeed',
    resolution: 'low_resolution',
    limit: 9,
    template: '<div class="single-image"><img src="{{image}}" title="{{caption}}"/></div>',
    after: function () {
        if (!this.hasNext()) {
            loadButton.setAttribute('disabled', 'disabled');
        }
    },

});

loadButton.addEventListener('click', function () {
    feed.next();
});

feed.run();
}, 50);