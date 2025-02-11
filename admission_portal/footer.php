<?php
if (isset($pageJS)){
    foreach ($pageJS as $key => $value){
        echo '<script type="text/javascript" src="js/'.$value.'?'.filemtime('js/'.$value).'"></script>';
    }
}
?>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<!-- <script src="js/bootstrap/bootstrap.bundle.min.js"></script> -->
<script>
    function func(){
        // var prog = this.value;
       
        var prog = document.getElementById("prog").value;
        
        opt  = $.ajax({
            type: "POST",
            url: "api/getdropdown.php",
            data: {'prog':prog},
            async: false,
            dataType: "json",
            });
        console.log(opt) ;
            
        var element = document.getElementById("moreopt");
        element.classList.remove("dn");
        document.getElementById('moreopt').innerHTML = opt.responseText;
        
        }

    // function sub(){
    //     var formData = {
    //     name: $("#first_name").val(),
    //     last: $("#last_name").val(),
    //     email: $("#your_email").val(),
    //     prog: $("#prog").val(),
    //     phone: $("#phone").val(),
    //     };
    //     $.ajax({
    //     type: "POST",
    //     url: "api/register.php",
    //     data: formData,
    //     dataType: "json",
    //     encode: true,
    //     }).done(function (data) {
    //     console.log(data);
    //     $( ".page-content" ).load( "welcome.php" );
    //     });
    // }

</script>

<script>


// $(document).ready(function(){
//   $("form").submit(function(){
//     debugger;
//     e.preventDefault();
//     var course =  $("#courses").val();
//     var formData = {  
//         name: $("#first_name").val(),
//         last: $("#last_name").val(),
//         email: $("#your_email").val(),
//         prog: $("#prog").val(),
//         courses: $("#courses").val(),
//         phone: $("#phone").val()
//     };
//     out = $.ajax({
//         type: "POST",
//         url: "api/register.php",
//         data: formData,
//         dataType: "json",
//         async: false,
//     });
//     console.log(out) ;
//     console.log(out.responseText) ;
//     document.getElementById("pagecontent").classList.add("dn");
//     document.getElementById('outputtable').innerHTML = out.responseText;
//     document.getElementById("outputtable").classList.remove("dn");

//   });
// });


function myFunction(){
        // var prog = this.value;
       
    var course =  $("#courses").val();
    var formData = {  
        name: $("#first_name").val(),
        last: $("#last_name").val(),
        email: $("#your_email").val(),
        prog: $("#prog").val(),
        courses: $("#courses").val(),
        phone: $("#phone").val()
    };
    out = $.ajax({
        type: "POST",
        url: "api/register.php",
        data: formData,
        dataType: "json",
        async: false,
    });
    // console.log(out) ;
    // console.log(out.responseText) ;
    alert('Go to'+out.responseText);
    window.location.reload();

}

jQuery.validator.setDefaults({
            debug: true,
            success:  function(label){
              label.attr('id', 'valid');
              },
      });


      $( "#myform" ).validate({
            messages: {
                first_name: {
                    required: "Please enter a firstname"
                },
                last_name: {
                    required: "Please enter a lastname"
                },
                your_email: {
                    required: "Please provide an email"
                },
                prog: {
                    required: "Please enter a password"
                },
                phone: {
                    required: "Please enter 10 digit phone number"
                }
                }
            }
      );

</script>
</body>
</html>