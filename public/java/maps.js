const ambulance = L.layerGroup();

const ambulance1 = L.marker([-7.803027484873508, 110.36085885745977]).bindPopup('<b>Ambulan Gratis Jogja</b><br>No : 081326310779').addTo(ambulance);
const ambulance2 = L.marker([-7.81146715837886, 110.40189155767143]).bindPopup('<b>AmbulanMu DIY</b><br>No : 087721222900').addTo(ambulance);
const ambulance3 = L.marker([-7.821199662964124, 110.35196521534287]).bindPopup('<b>Ambulance Peduli Muslim</b><br>No : 081383333118').addTo(ambulance);
const ambulance4 = L.marker([-7.708571504653704, 110.4103664555013]).bindPopup('BMH Yogyakarta</b><br>No : 085877177162').addTo(ambulance);
const ambulance5 = L.marker([-7.8034643509599535, 110.35749426551648]).bindPopup('<b>DT Peduli</b><br>No : 085877177162').addTo(ambulance);
const ambulance6 = L.marker([-7.807117605462333, 110.3475515638889]).bindPopup('<b>Dompet Dhuafa DIY</b><br>No : 085103004489').addTo(ambulance);
const ambulance7 = L.marker([-7.777895270333481, 110.36377958678517]).bindPopup('<b>Global Transport</b><br>No : 087839991000').addTo(ambulance);
const ambulance8 = L.marker([-7.8303757233333515, 110.38990645767144]).bindPopup('<b>Human Initiative</b><br>No : 08112646123').addTo(ambulance);
const ambulance9 = L.marker([-7.7774940881947465, 110.36372889456104]).bindPopup('<b>Inisiatif Zakat Indonesia DIY</b><br>No : 081218880121').addTo(ambulance);
const ambulance10 = L.marker([-7.820765724176279, 110.41980778290691]).bindPopup('<b>Ambulance Anugrah Wijaya</b><br>No : 085893010118').addTo(ambulance);
const ambulance11 = L.marker([-7.816681282203788, 110.39989502175172]).bindPopup('<b>LAZIS Muhammadiyah</b><br>No : 081904058055').addTo(ambulance);
const ambulance12 = L.marker([-7.813403209822839, 110.3607631124806]).bindPopup('<b>LAZISNU DIY</b><br>No : 08113601926').addTo(ambulance);
const ambulance14 = L.marker([-7.800945470754618, 110.37363767257881]).bindPopup('<b>Muhammadiyah Commad Center Yogyakarta</b><br>No : 081227429495').addTo(ambulance);
const ambulance15 = L.marker([-7.73166634330481, 110.34511623946315]).bindPopup('<b>Sewa ambulance mer-c jogja</b><br>No : 085740632111').addTo(ambulance);
const ambulance16 = L.marker([-7.845111694558898, 110.31680305497217]).bindPopup('<b>Layanan Ambulan Gratis</b><br>No : 087819121000').addTo(ambulance);
const ambulance17 = L.marker([-7.8268518207912825, 110.4749981834728]).bindPopup('<b>Sewa Ambulan Jogja</b><br>No : 087813311912').addTo(ambulance);
const ambulance18 = L.marker([-7.822880475112515, 110.3700477391066]).bindPopup('<b>Layanan AmbulanMu Sewon Utara</b><br>No : 082323072308').addTo(ambulance);
const ambulance19 = L.marker([-7.826277206998953, 110.37020377288097]).bindPopup('<b>Ambulance Ummat</b><br>No : 081298735720').addTo(ambulance);
const ambulance20 = L.marker([-7.752321466621854, 110.43648226405458]).bindPopup('<b>Layanan Ambulan PCM Depok</b><br>No : 085602497683').addTo(ambulance);
// const ambulance13 = L.marker([]).bindPopup('').addTo(ambulance);

const jenazah = L.layerGroup();

const jenazah1 = L.marker([-7.752321155790127, 110.27617002662366]).bindPopup('<b>KSP Pare Anom</b><br>No : 08122755828').addTo(jenazah);
const jenazah2 = L.marker([-7.822779979143879, 110.41887295473629]).bindPopup('<b>Sewa jenazah Yogya</b><br>No : 087839652320').addTo(jenazah);
const jenazah3 = L.marker([-7.821886265208693, 110.42083549612525]).bindPopup('<b>SR (Sedekah Rombongan) - ambulans non-covid</b><br>No : 081906800900').addTo(jenazah);
const jenazah4 = L.marker([-7.887127759420972, 110.33231623852551]).bindPopup('<b>SES SLEMAN (Dinas Kesehatan Kab. Sleman)</b><br>No : (0274) 8609000').addTo(jenazah);
const jenazah5 = L.marker([-7.887127759420972, 110.33231623852551]).bindPopup('<b>PCM Bantul</b><br>No : 081904097878').addTo(jenazah);
const jenazah6 = L.marker([-7.767873875578014, 110.43689472451338]).bindPopup('<b>PCM Depok Sleman</b><br>No : 08122733803').addTo(jenazah);
const jenazah7 = L.marker([-7.905905849701743, 110.31499258298301]).bindPopup('<b>PCS 119 Bantul</b><br>No : (0274) 2811119').addTo(jenazah);
const jenazah8 = L.marker([-7.859066333098758, 110.15620968113485]).bindPopup('<b>PCS 119 Kulonprogo</b><br>No : 082258800119').addTo(jenazah);
const jenazah9 = L.marker([-7.801049421696004, 110.39189913880499]).bindPopup('<b>PSC 119 YES Kota Jogja</b><br>No : (0274) 420118').addTo(jenazah);
const jenazah10 = L.marker([-7.659582399270571, 110.43688805599228]).bindPopup('<b>Panti Syihabudin</b><br>No : 087848209777').addTo(jenazah);
const jenazah11 = L.marker([-7.748686771577322, 110.39541269146213]).bindPopup('<b>Relawan PKS</b><br>No : 087838927473').addTo(jenazah);
const jenazah12 = L.marker([-7.802538645296259, 110.39517100943897]).bindPopup('<b>Rumah Zakat</b><br>No : (0274) 377671').addTo(jenazah);
const jenazah13 = L.marker([-7.887127759420972, 110.33231623852551]).bindPopup('<b>SES SLEMAN (Dinas Kesehatan Kab. Sleman)</b><br>No : (0274) 8609000').addTo(jenazah);
// const jenazah = L.marker([]).bindPopup('').addTo(jenazah);

const mbAttr = '<a href="https://www.openstreetmap.org/copyright"></a><a href="https://www.mapbox.com/"></a>';
const mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

const streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
	maxZoom: 19,
	attribution: '<a href="http://www.openstreetmap.org/copyright"></a>'
});

const map = L.map('map', {
	center: [-7.78637, 110.368741],
	zoom: 11,
	layers: [osm, ambulance, jenazah]
});

const baseLayers = {
	'OpenStreetMap': osm,
	'Streets': streets
};

const overlays = {
	'Ambulance': ambulance,
    'Mobil Jenazah' : jenazah
};

const layerControl = L.control.layers(baseLayers, overlays).addTo(map);

const satellite = L.tileLayer(mbUrl, {id: 'mapbox/satellite-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
layerControl.addBaseLayer(satellite, 'Satellite');
