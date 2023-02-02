<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.12.1/firebase-database-compat.js"></script>
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
<div class="set_method" id="set">
    <h1 >Pakistan</h1>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil ut mollitia ea, rem perspiciatis quibusdam nemo ad id. Aut, nam.</p>
</div>

<div  id="addclass">
    <h5 class="h5">Pakistan</h5>
    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil ut mollitia ea, rem perspiciatis quibusdam nemo ad id. Aut, nam.</span>
</div>
<button  id="add" >Add class</button>
<button   id="remove" class="btn btn-danger">Remove class</button>
<button  id="toggle" class="btn btn-dark">Toggle class</button>
<div  id="inlineStyle">
    <h5 class="inline_h5">Inline style ,style me </h5>
    <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil ut mollitia ea, rem perspiciatis quibusdam nemo ad id. Aut, nam.</span>
    <br>
    <button id="stylebtn" class=" btn btn-success">Style Now</button>
</div>

<style>
.newcolor{
color:red;
    }
    .h5{
color:red;
    }
</style>
<script>
// inline styles

$('#stylebtn').click(function(){
$('#inlineStyle').css({"background":"red","color":"white","margin-top":"5px"});
})



//add class
$('document').ready(function(){
$('#addclass').addClass('newcolor');
});
// removeclass
$('#remove').click(function(){
$('.h5').removeClass('h5');
});
// removeclass
$('#toggle').click(function(){
$('.h5').toggleClass('h5');
});



$('document').ready(function() {

    var element=$('#h6').html(); // element html get
    // console.log(element);
    // style the html elements in the list
    // $("#list li").css("border","2px solid red");
    // $("#list ").css("color","blue");
    // $("* ").css("color","blue");
    // $("#list ").css("list-style","none");
    // $("ul li:eq(2)").css("color","orange"); //lower ul  o,1,2

//     $('#div').click(function(){
//         $('#div').css("color","orange");
// })
// $('.paragraph').contextmenu(function(){
//         $('.paragraph').css("color","orange");
// })

// });

});
$('.set_method').click(function(){
  var values= $('.set_method h1').text("wooo ");
  var values= $('.set_method p').html(" <h1>Girls </h1>lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil ut mollitia ea, rem");
  var values= $('.set_method h1').attr("class","newcolor");
// console.log(values);
    });

</script>
</body>
</html>
