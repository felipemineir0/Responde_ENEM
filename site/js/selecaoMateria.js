$(function() {
    $("#CboOrganizar").val(getParameterByName('tipo'));

    $("#CboOrganizar").change(function() {
        if ($(this).val() != "")
            window.location = "<?php echo $this->request->base ?>" + "/simulado/?tipo=" + $(this).val();
        //window.location = "<?php echo $this->request->base ?>" + "/simulado/?tipo=" + $(this).val() + "&slug_status=" + $("#slug_status").val();
    })
});