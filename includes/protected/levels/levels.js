  $(document).ready(function(){
    $('#level').submit(function(e){
      e.preventDefault();
      $.LoadingOverlay("show");
      var solution = {
               'level'             : $("input[type=text]").attr('name'),
               'solution'          : $("input[type=text]").val()
           };
          //  console.log(solution);
        $.ajax({
          type      :'POST',
          url       :'./levels/update.php',
          data      : solution
        }).done(function(data) {
          $("#page").load("./"+data,function( response, status, xhr ){
            if(status==="error")
            $("#page").load("./includes/404.php");
          });
          $(document).ready(function(){
            $.LoadingOverlay("hide",true);
          });
        });;
    });
  });
