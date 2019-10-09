
jQuery.validator.addMethod("extension", function(value, element, param) {
    param = typeof param === "string" ? param.replace(/,/g, '|') : "png|jpg|bmp|jpeg";
    return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
}, jQuery.format("Selecione uma extensão válida. (PNG, BMP, JPG e JPEG)"));

jQuery.validator.addMethod("files", function(value, element, param) {
    param = typeof param === "string" ? param.replace(/,/g, '|') : "pdf|doc|docx";
    return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
}, jQuery.format("Selecione uma extensão válida. (PDF, DOC e DOCX)"));

jQuery.validator.addMethod("dados", function(value, element, param) {
    param = typeof param === "string" ? param.replace(/,/g, '|') : "png|jpg|bmp|jpeg|pdf|doc|docx|xls|xlsx";
    return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i"));
}, jQuery.format("Selecione uma extensão válida. (PNG, BMP, JPG, JPEG, PDF, DOC, DOCX, XLS e XLSX)"));

$.validator.methods.equal = function(value, element, param) {
    return value === param;
};

$(".FrmPrincipal").live("submit", function(e) {
    $('.BtnSubmit').prop('disabled', true);
});

jQuery.fn.reset = function () {
  $(this).each (function() { this.reset(); });
};