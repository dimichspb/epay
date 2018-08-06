var isPause = false;

function  downloadData() {
    $.ajax({url: "service/api/transactions", success: function(result) {
        var json = result;

        var i = 0;
        while(i < json.length)
        {
            var long = json[i].longitude;
            var lat = json[i].latitude;
            var latlng = {"lat": parseFloat(lat), "lng": parseFloat(long)};
            //console.log(latlng);

            if(isPause == false)
                createMarker(latlng);

            i++;
        }
    }});
}

var map = new google.maps.Map(document.getElementById('someMeaningfulId'), {
    center: {lat: 52, lng: 10},
    scrollwheel: false,
    zoom: 5
});

function  startTimer() {
    setTimeout(function(){ downloadData(); startTimer(); }, 1000);
}


var image = {
    url: '/favicon.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32)
};

var image_dollar = {
    url: '/images/dollar_1.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32)
};

var image_dollar2 = {
    url: '/images/dollar_2.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(0, 32)
};

var markers = [];

function createMarker(myLatLng) {
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: null,
        icon: (Math.random() < 0.5 ? image_dollar : image_dollar2)
    });

    markers.push(marker);

    setTimeout(function(){

        if(isPause == false)
            marker.setMap(map);

        marker.setAnimation(google.maps.Animation.BOUNCE);

        setTimeout(function()
        {
            if(isPause == false)
                marker.setMap(null);

        }, Math.random() * 300 * sliderValue);
    }, Math.random() * 2000);
}

var sliderValue = 1;

$(document).ready(function () {
    $('#ex1').slider({
        formatter: function(value) {
            return 'Current value: ' + value;
        }
    }).on('slide', function (val) {
        sliderValue = val.value;
    });

    startTimer();
});