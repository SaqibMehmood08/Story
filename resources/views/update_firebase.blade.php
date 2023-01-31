<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-database-compat.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>

    <div id="dataContainer"></div>

    <!-- Modal -->
    <div id="updateModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <form action="#">
            <input type="hidden" id="updateUserId">
            <label for="updateName">Name:</label>
            <input type="text" id="updateName">
            <label for="updateEmail">Email:</label>
            <input type="text" id="updateEmail">
            <label for="updatePassword">Password:</label>
            <input type="text" id="updatePassword">
            <button id="updateUserButton">Update User</button>
          </form>
        </div>
      </div>

      <div id="dataContainer"></div>

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
            html += '<button class="updateButton" data-user-id="' + key + '" data-user-name="' + user.name + '" data-user-email="' + user.email + '" data-user-password="' + user.password + '">Update</button>';
            html += '<hr>';

            dataContainer.innerHTML += html;
          }

          // Add click listener for the delete buttons




    <!-- Add a container to display the data -->






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
      html += '<button class="updateButton" data-user-id="' + key + '" data-user-name="' + user.name + '" data-user-email="' + user.email + '" data-user-password="' + user.password + '">Update</button>';
      html += '<hr>';

      dataContainer.innerHTML += html;
    }

    // Add click listener for the delete buttons
    var deleteButtons = document.querySelectorAll('.deleteButton');
    deleteButtons.forEach(function(deleteButton) {
      deleteButton.addEventListener('click', function() {
        var userId = this.getAttribute('data-user-id');
        database.ref('users/' + userId)
        .remove()
        .then(function() {
          console.log('User deleted successfully!');
        })
        .catch(function(error) {
          console.error('Error deleting user:', error);
        });
      });
    });

    // Add click listener for the update buttons
    var updateButtons = document.querySelectorAll('.updateButton');
    updateButtons.forEach(function(updateButton) {
      updateButton.addEventListener('click', function() {
        // Show the modal
        var updateModal = document.querySelector('#updateModal');
        updateModal.style.display = 'block';

        // Fill in the form with the user data
        var userId = this.getAttribute('data-user-id');
        var userName = this.getAttribute('data-user-name');
        var userEmail = this.getAttribute('data-user-email');
        var userPassword = this.getAttribute('data-user-password');

        document.querySelector('#updateUserId').value = userId;
        document.querySelector('#updateName').value = userName;
        document.querySelector('#updateEmail').value = userEmail;
        document.querySelector('#updatePassword').value = userPassword;

        // Add click listener for the update button in the modal
        var updateUserButton = document.querySelector('#updateUserButton');
        updateUserButton.addEventListener('click', function() {
          // Get the updated user data from the form
          var updatedUserId = document.querySelector('#updateUserId').value;
          var updatedUserName = document.querySelector('#updateName').value;
          var updatedUserEmail = document.querySelector('#updateEmail').value;
          var updatedUserPassword = document.querySelector('#updatePassword').value;

          // Update the user in the database
          database.ref('users/' + updatedUserId)
            .set({
              name: updatedUserName,
              email: updatedUserEmail,
              password: updatedUserPassword
            })
            .then(function() {
              console.log('User updated successfully!');
            })
            .catch(function(error) {
              console.error('Error updating user:', error);
            });

          // Close the modal
          updateModal.style.display = 'none';
        });
      });
    });

    // Add click listener for the close button in the modal
    var closeButton = document.querySelector('.close');
    closeButton.addEventListener('click', function() {
      var updateModal = document.querySelector('#updateModal');
      updateModal.style.display = 'none';
    });
  });
  </script>



</body>
</html>
