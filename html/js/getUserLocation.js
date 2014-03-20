$(function () {

    $('#trackbtn').click(whenClicked);
    $('#search').click(whenSearched);
    $('#btn').click(whenbtn);

})


/*
 *
 *  getUserLoctaion gets the latitude and longitude of user location
 *
 */

function whenClicked()
{

    $('#trackbtn').button('loading');
    getUserLocation();

}

function whenSearched()
{
    $('#search').button('loading');
    ClickGeocode1();


}

function whenbtn()
{
    $('#btn').button('loading');
    ClickGeocode();
}

function getUserLocation() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error, options);

        function success(pos) {
            var latitude  = pos.coords.latitude;    // Degrees N of equator       
            var longitude = pos.coords.longitude;  // Degrees E of Greenwich
            var accuracy = pos.coords.accuracy;    // in metress

            /*
            if(accuracy > 1000)
            {
                alert("Sorry we are unable to track your positon within accuracy of 1000 m Please search below.")
                return;

            }*/

           //sending values to displayUserLocation
            $('#latitude').attr('value', latitude);
            $('#longitude').attr('value', longitude);
            

            var msg = "At " + new Date(pos.timestamp).toLocaleString() + " you were within ±" + accuracy + " meters of latitude " + latitude + " longitude " + longitude + ".";

            //alert(msg);

            ClickGeocode();

            


        }

        function error(e) {

            // error.code can be:
            //   0: unknown error
            //   1: permission denied
            //   2: position unavailable (error response from locaton provider)
            //   3: timed out

            

            var errorMsg = "Geolocation error " + e.code + ": " + e.message;
            alert('Sorry, We are unable to track your location. Try searching below or allow us to track again.');
            $('#trackbtn').button('reset');
            
        }

        var options =
        {
            enableHighAccuracy: true,
            maximumAge: 0,
            timeout: 15000
        }

    }

    else 
    {
        alert('Geolocation is not enabled or supported in the browser. So, type your address and search below');

    }
}