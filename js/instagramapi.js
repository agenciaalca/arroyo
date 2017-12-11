//var feed = new Instafeed({
//   
//    get: 'user',
//    userId: 3295626329,
//    accessToken: '3295626329.a4f81a9.b13a9b826cd6490f901dca9891cfdfae',
//    template: '<div><img src="{{image}}" /></div>',
//});
//feed.run();  
//
$(function () {
//Set up instafeed
    var userFeed = new Instafeed({
        get: 'tagged',
        target: 'instafeed',
        clientId: '3295626329',
        accessToken: '3295626329.a4f81a9.b13a9b826cd6490f901dca9891cfdfae',
        limit: 8,

        template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a><div></div></div>'
    });
    userFeed.run();
});