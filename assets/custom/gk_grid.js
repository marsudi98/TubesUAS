$(function() {
  $.ajax({
    type: "GET",
    url: "getAllGK/"
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
            url: "getAllGK/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addGK/",
            data: item
          });
        },
       updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateGK",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteGK/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "fullname",
          title: "Nama GK",
          type: "text",
          width: 50
        },
          {
          name: "nation",
          title: "Negara",
          type: "text",
          width: 50
        },
        {
          name: "birth",
          title: "Tanggal Lahir",
          type: "text",
          width: 50
        },
        {
          name: "number",
          title: "Nomor Punggung",
          type: "text",
          width: 50
        },
        {
          name: "votes",
          title: "Votes",
          type: "text",
          width: 50
        },
        {
          name: "photo",
          title: "Foto",
          type: "image",
          width: 50
        },
        //   {
        //   name: "tanggalGabung",
        //   title: "Tanggal Gabung",
        //   type: "text",
        //   width: 50
        // },
        { type: "control" }
      ]
    });
  });
});
