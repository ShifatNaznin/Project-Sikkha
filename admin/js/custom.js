function readURL(input) {
       if (input.files && input.files[0]) {
           var reader = new FileReader();

           reader.onload = function (e) {
               $('#upload_image')
                   .attr('src', e.target.result);
           };

           reader.readAsDataURL(input.files[0]);
       }
   }

   function readURL_two(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#upload_image_two')
                      .attr('src', e.target.result);
              };

              reader.readAsDataURL(input.files[0]);
          }
      }
