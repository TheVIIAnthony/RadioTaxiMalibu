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

var database;
database = firebase.database();
var ref  = database.ref('rtu-cliente');
ref.on('value', gotData, errData);

function gotData(data){
	console.log(data.val());
}
function errData(err){
	console.log("error");
	console.log(err);
}


// var taxis = db.collection("taxis");
// var query = taxis.where("Status", "==", "2");

// db.collection("taxis").where("Status", "==", "2")
// .get()
// .then(function(querySnapshot) {
// 	querySnapshot.forEach(function(doc) {
// 		console.log(doc.id, " => ", doc.data());
// 	});
// })
// .catch(function(error) {
// 	console.log("Error getting documents: ", error);
// });
