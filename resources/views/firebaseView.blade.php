<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    {{-- firebase cdn links --}}
      <script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Firebase</title>
</head>

<body>
    <div class="container">
        <h1>Firebase Demo</h1>
        <center>
            <button role="button" onclick="allowNotifications()" class="btn btn-primary mb-5">Allow notifications</button>

            <form action="/notifications/send" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" name="body"></textarea>
                  </div>
                <button type="submit" class="btn btn-success">Send Notification</button>
            </form>
        </center>


        <script>

        var firebaseConfig = {
          apiKey: "AIzaSyC1OXD0qWhLtax6-JKmqe2DBLirJk4smqQ",
          authDomain: "fir-notifications-16a3f.firebaseapp.com",
          projectId: "fir-notifications-16a3f",
          storageBucket: "fir-notifications-16a3f.appspot.com",
          messagingSenderId: "83120256058",
          appId: "1:83120256058:web:90740f51909a3b8cd77103",
          measurementId: "G-NV5K1QENNQ"
        };
        firebase.initializeApp(firebaseConfig);
        var messaging = firebase.messaging();


        function allowNotifications() {
            messaging.requestPermission()
            .then(function () {
                return messaging.getToken()
            })
             .then(function(token) {
                console.log(token);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: '{{ route("save-token") }}',
                    type: 'POST',
                    data: {
                        token: token
                    },
                    dataType: 'JSON',
                    success: function (response) {
                        alert('Token saved successfully.');
                    },
                    error: function (err) {
                        console.log('User Chat Token Error'+ err);
                    },
                });

            }).catch(function (err) {
                console.log('User Chat Token Error'+ err);
            });
     }

</body>

</html>
