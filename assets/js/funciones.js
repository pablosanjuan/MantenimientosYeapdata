function initialize() {
          var latlng = new google.maps.LatLng(2.4885849,-76.561532);
          var settings = {
              zoom: 15,
              center: latlng,
              mapTypeControl: true,
              mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
              navigationControl: true,
              navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
              mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
      var companyPos = new google.maps.LatLng(2.4886224,-76.5609311);
      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          title:"WindForceTyres"    
      }
      );}

function margen() {
var total;
var total_opc;
var divHeight;
var divHeight_cab;
var divHeight_opc;
var obj = document.getElementById('index-banner');
var obj_cab = document.getElementById('cabecera');
var obj_opc = document.getElementById('opciones');

if(obj.offsetHeight&&obj_cab.offsetHeight&&obj_opc.offsetHeight){
  divHeight=obj.offsetHeight;
  divHeight_cab=obj_cab.offsetHeight;
  divHeight_opc=obj_opc.offsetHeight;
  //total=divHeight-divHeight_opc;
  total_opc=divHeight-divHeight_opc-divHeight_cab;
  document.getElementById("myDiv").style.marginTop = total+"px";
  document.getElementById("opciones").style.marginTop = total_opc+"px";
}
else if(obj.style.pixelHeight&&obj_cab.style.pixelHeight&&obj_opc.style.pixelHeight){
  divHeight=obj.style.pixelHeight;
  divHeight_cab=obj_cab.style.pixelHeight;
  divHeight_opc=obj_opc.style.pixelHeight;
  //total=divHeight-divHeight_opc;
  total_opc=divHeight-divHeight_cab-divHeight_opc;
  document.getElementById("myDiv").style.marginTop = total+"px";
  document.getElementById("opciones").style.marginTop = total_opc+"px";
}
}

function home(){
  window.location = "index.php"
}