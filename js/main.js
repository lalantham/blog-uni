// Get User
function getUsers() {
  $.ajax({
    url: "http://localhost/blog/admin/inc/get_users.php",
    method: "GET",
    dataType: "json",
    success: function (data) {
      output = "";

      for (i = 0; i < data.length; i++) {
        output +=
          "<tr><td><input type='checkbox' class='form' class='form-check-input'></td><td>" +
          data[i].id +
          "</td><td>" +
          data[i].date +
          "</td><td id='name-td'>" +
          data[i].f_name +
          " " +
          data[i].l_name +
          "</td><td>" +
          data[i].username +
          "</td><td>" +
          data[i].email +
          "</td><td>" +
          "<img src='../img/" +
          data[i].image +
          "'</td><td>*********</td><td>" +
          data[i].role +
          "</td><td><a href='users.php?edit=" + data[i].id + "'><i class='fas fa-edit'></i></a></i></td><td><a href='users.php?del=" + data[i].id + "'><i class='fas fa-trash-alt'></i></a></td></tr>";
      }

      $("#user_table").html(output);
    },
  });
}

getUsers();
