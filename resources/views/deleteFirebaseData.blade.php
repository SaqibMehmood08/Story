<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-database-compat.js"></script>
    <title>Document</title>
</head>
<body>




    <!-- Add a container to display the data -->
<div id="dataContainer">




</div>

<!-- Initialize Firebase -->
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
</script>

<!-- Get a reference to the database service and add a listener to update the data when it changes -->
<script>
  var database = firebase.database();
  database.ref('users/').on('value', function(snapshot) {
    var data = snapshot.val();

    var dataContainer = document.querySelector('#dataContainer');
    dataContainer.innerHTML = '';

    for (var key in data) {
      var user = data[key];
      var html = '<p>Name: ' + user.name + '</p>';
      html += '<p>Email: ' + user.email + '</p>';
      html += '<p>Password: ' + user.password + '</p>';
      html += '<button class="deleteButton" data-user-id="' + key + '">Delete</button>';
      html += '<hr>';

      dataContainer.innerHTML += html;
    }

    // Add click listener for the delete buttons
    var deleteButtons = document.querySelectorAll('.deleteButton');
    deleteButtons.forEach(function(deleteButton) {
      deleteButton.addEventListener('click', function() {
        var userId = this.getAttribute('data-user-id');
        database.ref('users/' + userId).remove();
      });
    });
  });
</script>


</body>
</html>
