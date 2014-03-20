/*
 *
 *  displays user location on the basis of latitude and langitude determined by getUserLocation.js
 *
 */




var map = null; 
  
function GetMap() 
{ 
    // Initialize the map
    map = new Microsoft.Maps.Map(document.getElementById("mapDiv"),{credentials:"AlZUiVzNvRwbLEQ8-HRHedmcKoce0gL2UWhIL-KsMGmdAw0MBC7yfJpYtF73Hb_B",                  mapTypeId:Microsoft.Maps.MapTypeId.road});   
}  

function ClickGeocode(credentials) 
{ 
    map.getCredentials(MakeGeocodeRequest); 
}  

function MakeGeocodeRequest(credentials) 
{
    var latitude = document.getElementById('latitude').value;

    var longitude = document.getElementById('longitude').value;
    
    var geocodeRequest = new String("https://dev.virtualearth.net/REST/v1/Locations/"+ latitude + "," + longitude + 
    "?includeEntityTypes=address&includeNeighborhood=0&o=json&jsonp=GeocodeCallback&s=1&key=" + credentials);
    
    CallRestService(geocodeRequest); 
} 

function ClickGeocode1(credentials) 
{ 
    map.getCredentials(MakeGeocodeRequest1); 
}  

function MakeGeocodeRequest1(credentials) 
{
    var geocodeRequest1 = new String("https://dev.virtualearth.net/REST/v1/Locations?query=" + 
    encodeURI(document.getElementById('txtQuery').value) + "&output=json&jsonp=GeocodeCallback&s=1&key=" + credentials);
    
    CallRestService(geocodeRequest1);

}  


function GeocodeCallback(result)  
{ 
      
    alert("Found location: " + result.resourceSets[0].resources[0].name);
    if (result && 
        result.resourceSets && 
        result.resourceSets.length > 0 && 
        result.resourceSets[0].resources && 
        result.resourceSets[0].resources.length > 0)  
    { 
        // Set the map view using the returned bounding box 
        var bbox = result.resourceSets[0].resources[0].bbox; 
        var viewBoundaries = Microsoft.Maps.LocationRect.fromLocations(new 
Microsoft.Maps.Location(bbox[0], bbox[1]), new Microsoft.Maps.Location(bbox[2], bbox[3])); 
        map.setView({ bounds: viewBoundaries});   
         //Sending co-ordinates to form
        $('#latitude').attr('value',result.resourceSets[0].resources[0].point.coordinates[0]);
        $('#longitude').attr('value',result.resourceSets[0].resources[0].point.coordinates[1]);
         // Add a pushpin at the found location 
        var location = new Microsoft.Maps.Location(result.resourceSets[0].resources[0].point.coordinates[0], 
        result.resourceSets[0].resources[0].point.coordinates[1]);
        var pushpin = new Microsoft.Maps.Pushpin(location, { text: '1', draggable: true });

        //resetting text of buttons
        $('#trackbtn').button('reset');
        $('#search').button('reset');
        $('#btn').button('reset');

        //Wire events for dragging
        Microsoft.Maps.Events.addHandler(pushpin, 'dragstart', StartDragHandler);
        Microsoft.Maps.Events.addHandler(pushpin, 'drag', DragHandler);
        Microsoft.Maps.Events.addHandler(pushpin, 'dragend', EndDragHandler);
        

        map.entities.push(pushpin); 
    } 
}  
function CallRestService(request) 
{ 
    var script = document.createElement("script"); 
    script.setAttribute("type", "text/javascript"); 
    script.setAttribute("src", request); 
    document.body.appendChild(script); 
}  

/*
 *
 * Event handler functions
 *
 *
 */
function StartDragHandler(e) {

    $("#mode").text("Your are now improving your location.");

}
  
function DragHandler(e) {

    var loc = e.entity.getLocation();
    $("#latitude").val(Number(loc.latitude.toFixed(10)));
    $("#longitude").val(Number(loc.longitude.toFixed(10)));
    

}

function EndDragHandler(e) {

    $("#mode").text("Your Address has been updated.");
}
