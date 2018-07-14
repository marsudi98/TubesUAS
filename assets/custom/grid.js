$(function() {
  $.ajax({
    type: "GET",
    url: "getAllPemain/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "500px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllPemain/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addPemain/",
            data: item
          });
        },
       updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updatePemain",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deletePemain/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "nama",
          title: "Nama Pemain",
          type: "text",
          width: 50
        },
          {
          name: "nickname",
          title: "Nickname",
          type: "text",
          width: 50
        },
        {
          name: "rank",
          title: "Rank",
          type: "text",
          width: 50
        },
        {
          name: "photo",
          title: "Logo",
          type: "image",
          width: 50
        },
          {
          name: "tanggalGabung",
          title: "Tanggal Gabung",
          type: "text",
          width: 50
        },
        { type: "control" }
      ]
    });
  });
});
