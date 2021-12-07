function showCreate() {
    $("#noteCreate").modal("show");
}

function addNote() {
    let title = $("#title").val();
    let content = $("#content").val();
    let date = $("#date").val();
    let category = $("#category").val();
    console.log(category)

    let _url = origin + `/api/note/create`;
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': _token
        }
    });
    $.ajax({
        url: _url,
        type: "POST",
        data: {
            title: title,
            content: content,
            date: date,
            category_id: category
        },
        success: function (data) {
            // window.location.reload();
            note = data;
            $('.list-note').prepend(`
                        <tr id="note_${note.id}">
                            <td>${note.id}</td>
                            <td>${note.title}</td>
                            <td>${note.content}</td>
                            <td>${note.date}</td>
                            <td>${note.category.name}</td>
                            <td>
                                <a data-id="${note.id}" onclick="editNote(${note.id})" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                <a data-id="${note.id}" class="btn btn-danger" onclick="deleteNote(${note.id})">Delete</a>
                            </td>
                        </tr>
                    `);
            // $('#title').val('');
            // $('#content').val('');
            // $('#date').val('');
            $('#noteCreate').modal('hide');
            toastr.success("Add New Success")

        }
    })
}

function deleteNote(id) {
    let url = origin + `/api/note/delete/${id}`;
    if (confirm("Are you sure ?")) {
        $.ajax({
            url: url,
            type: "DELETE",
            success: function (response) {
                $("#note_" + id).remove();
                toastr.success("Delete Success")
            }
        })
    }
}

function showEdit(id) {
    console.log(id);

    let title = $("#note_" + id + "td:nth-child(1)").html();
    let content = $("#note_" + id + "td:nth-child(2)").html();
    let date = $("#note_" + id + "td:nth-child(3)").html();
    let category = $("#note_" + id + "td:nth-child(4)").html();
    $("#editTitle").val(title);
    $("#editContent").val(content);
    $("#editDate").val(date);
    $("#editCategory").val(category);
    $('#noteEdit').modal('show');
}

function editNote() {
    let title = $('#editTitle').val();
    let content = $('#editContent').val();
    let date = $('#editDate').val();
    let category = $('#editCategory').val();
    let id = $('#note_id').val();
    let _url = origin + `/note/edit/${id}`;
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': _token
        }
    });

    $.ajax({
        url: _url,
        type: "PUT",
        data: {
            title: title,
            content: content,
            date: date,
            category_id: category
        },
        success: function (data) {
            console.log(data)
            note = data
            $("#note_" + id + " td:nth-child(2)").html(note);
            $('#note_id').val('');
            $('#editTitle').val('');
            $('#editContent').val('');
            $('#editDate').val('');
            $('#editCategory').val('');
            $('#noteEdit').modal('hide');
        },
        error: function (response) {
            $('#taskError').text(response.responseJSON.errors.todo);
        }
    });
}
// $(document).ready(function (){
//   let url = origin + "/api/note/search";
//   let data = [];
//
//   $.ajax(
//       {
//       url: "http://127.0.0.1:8000/api/note/search",
//       type: "GET",
//       datatype: "json",
//   }
//   ).done(function(response) {
//       console.log(response)
//       displayNote(response)
//   });
//
//   function search() {
//       let searchValue = $(this).val();
//       let result = [];
//       for (let i = 0; i < data.length; i++) {
//           if(data[i].title.includes(searchValue) ) {
//               result.push(data[i]);
//           }
//       }
//      displayNote(result);
//   }
//
//
//   function displayNote(note) {
//       console.log(note)
//       let html = "";
//       for (let i = 0; i < note.length; i++) {
//           html += `<tr
//           <td>${note[i].id}</td>
//           <td>${note[i].title}</td>
//           <td>${note[i].content}</td>
//           <td>${note[i].date}</td>
//           <td>${note[i].category.name}</td>
//              </tr>`
//       }
//       $(".list-note").html(html);
//   }
// })



