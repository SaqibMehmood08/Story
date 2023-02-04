<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-database-compat.js"></script>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <h6 id="h6">Jquery day 5</h6>

    <div id="box">
         <h2 >Append</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore aut aperiam earum adipisci provident
            temporibus, deserunt repellendus laboriosam reprehenderit recusandae impedit possimus error quas esse quis
            natus repellat cupiditate facilis culpa quia ipsa distinctio! Illo corrupti culpa expedita nobis
            praesentium!
        </p>


    </div>

    <div id="box2">

       <p>
          1 Lorem ipsum dolor sit amet consectetur adipisicing elit.
       </p>
       <p>
      2 r adipisicing elit  Lorem ipsum dolor sit amet consectetu.
    </p>
    <p>
       3 Lorem ipsum dolor sit amet consectetu.
     </p>

   </div>
    <center>
        <button id="appendbtn" class="btn btn-primary">Append</button>
      <button id="prependbtn" class="btn btn-primary">Prepend</button>
      <button id="afterbtn" class="btn btn-primary">After</button>
      <button id="beforebtn" class="btn btn-primary">Before</button>
      <button id="emptybtn" class="btn btn-primary">empty</button>
      <button id="removebtn" class="btn btn-primary">Remove</button>
      <button id="clonebtn" class="btn btn-primary">Clone</button>
      <button id="replacebtn" class="btn btn-primary">Replace</button>

    </center>

    <style>
        #prependAppend {
            border: 3px solid red;
            background-color: green;
        }
    </style>
    <script>
        var count = 0;
        // append pre Pend
      $('document').ready(function () {
        $('#appendbtn').click(function() {
            $('#box').append('<h5  style="color:pink">append Pend</h5>');
        });

        $('#prependbtn').click(function() {
            $('#box').prepend('<h5  style="color:pink">PrePend</h5>');
        });
        $('#afterbtn').click(function() {
            $('#box').after('<h5  style="color:pink">After the box </h5>'+ count++);
        });
        $('#beforebtn').click(function() {
            $('#box').before('<h5  style="color:pink">Before the box </h5>'+ count++);
        });
        $('#emptybtn').click(function() {
            $('#box').empty();
        });
        $('#removebtn').click(function() {
            $('#box').remove();
        });
    //  clone
            $('#clonebtn').click(function(){
            $('#box h2').clone().prependTo("#box2");
        });
        // replace
        $('replacebtn').click(function(){
            $('#box2 p').replaceWith('<h5  style="color:pink">Replace</h5>');
        })
    </script>
</body>

</html>
