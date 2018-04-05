// $(document).ready(function() {
//   var basepath = "/";
//   var windowLoc = $(location).attr('pathname');
//
//   if (windowLoc === basepath + 'dashboard.php') {
//     $("#dashboard").LoadingOverlay("show");
//     $(document).ready(function() {
//       $.ajax({
//         type: 'POST',
//         url: './levels/response.php',
//       }).done(function(data) {
//         console.log(data);
//         $("#page").load("./" + data, function(response, status, xhr) {
//           if (status === "error")
//             $("#page").load("./includes/404.php");
//         });
//         $(document).ready(function() {
//           $("#dashboard").LoadingOverlay("hide", true);
//         });
//       });
//     });
//   }
//
//
// });
