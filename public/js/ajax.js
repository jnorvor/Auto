var vehicle_url = "/vehicles/";
function sendRequest(u){
    var obj = $.ajax({
        type:'GET',
        url:u,
        async:false
    });
    // alert(u);
    // console.warn(obj.responseText);
    var result = $.parseJSON(obj.responseText);
    console.warn(result);
    console.error;
    // alert(result);
    return result;
}


function displayVehicleModel() {
    alert('hello from ajax');
    var e = document.getElementById("vehicle_make");
    var make = document.getElementById("vehicle_model");
    var strUser = e.options[e.selectedIndex].text;
    var strUrl = vehicle_url + strUser;
    var obj = sendRequest(strUrl);
    // alert(obj.length);
    $(make).find('option:not(:first)').remove();
var count =1;
    for (var i = 0; i < obj.length; i++) {
        // var model = obj[i].model.split(" ");
        // alert("im in the for loop");
        $(make).append('<option value="' + count + '">' + obj[i].model + '</option>');
        count++;
    }
}

function searchVehicle(){
    // var my_array = new Array();
    var make = document.getElementById("vehicle_make");
    var strMake = make.options[make.selectedIndex].text;
    var model = document.getElementById("vehicle_model");
    var strModel = model.options[model.selectedIndex].text;
    var yearFrom = document.getElementById("vehicle_year_from");
    var strYearFrom = yearFrom.options[yearFrom.selectedIndex].text;
    var yearTo = document.getElementById("vehicle_year_to");
    var strYearTo = yearTo.options[yearTo.selectedIndex].text;
    var body = document.getElementById("body_type");
    var strBody = body.options[body.selectedIndex].text;
    var minPrice = document.getElementById("vehicle_min_price");
    var strMinPrice = minPrice.options[minPrice.selectedIndex].text;
    var maxPrice = document.getElementById("vehicle_max_price");
    var strMaxPrice = maxPrice.options[maxPrice.selectedIndex].text;
    var cardDisplay = document.getElementById("card_display");
    var cardDeck = document.getElementById("card_deck");
    var my_array = "'"+ strMake+','+strModel+"'";
    // my_array = strModel+strMake;
    alert(my_array);
    alert(strModel);
    alert(my_array.length);
    // var strUrl = vehicle_url + '{'+strMake +'}' + '/'+'{' +strModel+'}';
    var strUrl = vehicle_url + strMake + '/' +strModel;
prompt("hello",strUrl);
    // +'/' + strYearFrom +'/' + strYearTo + '/'+ strMinPrice +'/' + strMaxPrice +'/' + strBody
    var obj = sendRequest(strUrl);
    alert("length:");
    // alert(obj['data'][0].model);
    alert(obj['data'].length);
    alert(obj['total']);
    while (cardDeck.firstChild) {
        cardDeck.removeChild(cardDeck.firstChild);
    }

}
