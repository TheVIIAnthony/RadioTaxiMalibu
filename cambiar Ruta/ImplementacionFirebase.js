const config = {
	apiKey: "AIzaSyB-vcAhjpe24wPBRleaM1vNybAhnIiWZ1s",
	authDomain: "rtu-cliente.firebaseapp.com",
	databaseURL: "https://rtu-cliente.firebaseio.com",
	projectId: "rtu-cliente",
	storageBucket: "rtu-cliente.appspot.com",
	messagingSenderId: "324653843509",
	appId: "1:324653843509:web:1bce5cbb0ca6c9d61bdd7c",
	measurementId: "G-X1LVVZ0JCQ"
};
firebase.initializeApp(config);

var database = firebase.database();
var referencia = database.ref('Arrendatario');
referencia.once()
.then(function (dataSnapshot){

});


// ref.orderByChild("status").equalTo(1).on("child_added", function(snapshot) {
//   console.log(snapshot.key);
// });

// referencia.on('value', obtenerDatos, errorDatos);

// function obtenerDatos(data){
// 	var datos = data.val();
// 	var keys = Object.keys('Arrendatario');
// 	console.log(keys);
// 	for (var i = 0; i < keys.length; i++) {
// 		var k = keys[i];
// 	}
// }


// function errorDatos(err){
// 	console.log(err);
// }


