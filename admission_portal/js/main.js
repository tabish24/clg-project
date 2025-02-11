		// just for the demos, avoids form submit
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



// $(document).ready(function () {
//     $("myform").submit(function (event) {
//         var formData = {
//         name: $("#first_name").val(),
//         last: $("#last_name").val(),
//         email: $("#your_email").val(),
//         prog: $("#prog").val(),
//         phone: $("#phone").val(),
//         };
    
//         $.ajax({
//         type: "POST",
//         url: "api/register.php",
//         data: formData,
//         dataType: "json",
//         encode: true,
//         }).done(function (data) {
//         console.log(data);
//         });
    
//         event.preventDefault();
//     });
// });


