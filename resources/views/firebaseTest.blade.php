 <html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-database-compat.js"></script>

    <title>saqib</title>
</head>
<body>

<form action="" id="addUser">
        <input type="text" name="name" id="name">
        <input type="text" name="email" id="email">
        <input type="text" name="password" id="password">
    <input type="submit" id="submitUser" value="Submit" />
</form>

  <script>
  const firebaseConfig = {
  apiKey: "AIzaSyCZBi9yQGBXUp0iRAgKwv4XfqjNPvfoXJ0",
  authDomain: "banolive-35958.firebaseapp.com",
  databaseURL: "https://banolive-35958-default-rtdb.firebaseio.com",
  projectId: "banolive-35958",
  storageBucket: "banolive-35958.appspot.com",
  messagingSenderId: "763111985238",
  appId: "1:763111985238:web:6bd1d22410255c67f56bf7",
  measurementId: "G-XGCMFCYKKC"
};
firebase.initializeApp(firebaseConfig);

// Get a reference to the database service
var database = firebase.database();

// Add a submit event listener to the form
document.querySelector('#submitUser').addEventListener('click', function(e) {
  e.preventDefault(); // Prevent the form from submitting

  // Get the values of the form inputs
  var name = document.querySelector('#name').value;
  var email = document.querySelector('#email').value;
  var password = document.querySelector('#password').value;

  // Push the data to the Firebase Realtime Database
  database.ref('users/').push({
    name: name,
    email: email,
    password: password
  });

  // Clear the form inputs
  document.querySelector('#name').value = '';
  document.querySelector('#email').value = '';
  document.querySelector('#password').value = '';
});



  </script>
</body>
</html>
