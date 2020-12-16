var check=0;
function getLocation(){
    if(check==0){
    document.getElementById('map').style.display='block';
    if(document.getElementById('comment_textarea')){
        document.getElementById('comment_textarea').style.display='none';    
    }else{
        document.getElementById('locat').style.display='block';    
    }
    
var lat=0,lon=0;
navigator.geolocation.getCurrentPosition(showPosition1);

function showPosition1(position) {
lon = position.coords.longitude;
lat = position.coords.latitude;
ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
            center: [lat, lon],
            zoom: 15
        }, {
            searchControlProvider: 'yandex#search'
        }),

    // Creating a content layout.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'A custom placemark icon',
            balloonContent: 'This is a pretty placemark'
        }, {
            /**
             * Options.
             * You must specify this type of layout.
             */
            iconLayout: 'default#image',
            // Custom image for the placemark icon.
            iconImageHref: 'https://7market.uz/images/myIcon.gif',
            // The size of the placemark.
            iconImageSize: [30, 42],
            /**
             * The offset of the upper left corner of the icon relative
             * to its "tail" (the anchor point).
             */
            iconImageOffset: [-5, -38]
        }),

        myPlacemarkWithContent = new ymaps.Placemark([lat, lon], {
            hintContent: 'A custom placemark icon with contents',
            balloonContent: 'This one — for Christmas',
            iconContent: '12'
        }, {
            /**
             * Options.
             * You must specify this type of layout.
             */
            iconLayout: 'default#imageWithContent',
            // Custom image for the placemark icon.
            iconImageHref: 'https://7market.uz/images/ball.png',
            // The size of the placemark.
            iconImageSize: [48, 48],
            /**
             * The offset of the upper left corner of the icon relative
             * to its "tail" (the anchor point).
             */
            iconImageOffset: [-24, -24],
            // Offset of the layer with content relative to the layer with the image.
            iconContentOffset: [15, 15],
            // Content layout.
            iconContentLayout: MyIconContentLayout
        });
// alert("Salom");
    myMap.geoObjects
        .add(myPlacemark)
        .add(myPlacemarkWithContent);
});
if(document.getElementById('comment_textarea')){
    document.getElementById('comment_textarea').textContent="Mobile=>lon:"+lon+",lat:"+lat;
    alert("Lokatsiya Mofaqiyatli aniqlandi");        
}
    // start
    // end 
            }
    }
    check++;
}