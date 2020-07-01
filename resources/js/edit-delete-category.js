function editdelete () {
    $("#edit").on("show.bs.modal", function (event) {
        console.log("hell");
        
        var button = $(event.relatedTarget);
        console.log("Open");
        var name = button.data("name");
        var description = button.data("description");
        var catid = button.data("catid");
        var modal = $(this);

        console.log(modal.find(".modal-body #cat_id").val(catid));

        modal.find(".modal-body #name").val(name);
        modal.find(".modal-body #description").val(description);
        modal.find(".modal-body #cat_id").val(catid);
    });

    $('#delete').on('show.bs.modal', function (event) {
        console.log("hello");
        
        var button = $(event.relatedTarget)
        var cat_id = button.data('catid') 
        var modal = $(this)
        modal.find('.modal-body #cat_id').val(cat_id);
    });
}
editdelete();