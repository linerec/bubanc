(function(){var e='assets/js/dpejes',a;$(document).ready(function(){var s='<div class="marker-container"><div class="marker-card"><div class="front face"><i class="la la-home"></i></div><div class="back face"> <i class="la la-home"></i></div><div class="marker-arrow"></div></div></div>',e='<div class="infobox map-box">\n                <a href="#" class="listing-img-container">\n                    <div class="infoBox-close"><i class="fa fa-times"></i>\n                    </div><img src="http://localhost/themes-customization/strict_image.php?d=575x700&f=house-interior-m-1.jpg&cut=true" alt="Black glass house">\n                    <div class="listing-item-content">\n                        <h3>Black glass house</h3>\n                        <span><i class="la la-map-marker"></i>Vatikanska 11, Zagreb, Croatia</span>\n                    </div>\n                </a>\n            </div>',a;a=L.map('property-map',{center:[45.7687561,15.9999749],zoom:8+6,scrollWheelZoom:scrollWheelEnabled,dragging:!L.Browser.mobile,tap:!L.Browser.mobile});L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(a);var t=L.tileLayer('https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}{r}.png').addTo(a),o=L.marker([45.7687561,15.9999749],{icon:L.divIcon({html:s,className:'open_steet_map_marker google_marker',iconSize:[40,46],popupAnchor:[1,-35],iconAnchor:[20,46],})}).addTo(a);o.bindPopup(e)});$('.route_suggestion').submit(function(a){a.preventDefault();window.open('https://maps.google.hr/maps?saddr='+$('#route_from').val()+'&daddr=Vatikanska 11, Zagreb, Croatia@45.7687561, 15.9999749&hl=en','_blank');return!1})})()