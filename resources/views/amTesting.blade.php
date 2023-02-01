<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-database-compat.js"></script>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>

</head>
<body>
<h6 id="h6">Jqury day 1</h6>
<ul id="list">
    <li>1</li>
    <li>2</li>
    <li>3</li>
</ul>
<p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, accusamus?</p>
<div id="div">Lorem ipsum dolor sit amet.</div>
<script>
$('document').ready(function() {

    var element=$('#h6').html(); // element html get
    // console.log(element);
    // style the html elements in the list
    // $("#list li").css("border","2px solid red");
    // $("#list ").css("color","blue");
    // $("* ").css("color","blue");
    // $("#list ").css("list-style","none");
    // $("ul li:eq(2)").css("color","orange"); //lower ul  o,1,2

    $('#div').click(function(){
        $('#div').css("color","orange");
})
$('.paragraph').contextmenu(function(){
        $('.paragraph').css("color","orange");
})

});
    
</script>
</body>
</html>
