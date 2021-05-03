function validaCampo() {
    if (document.form.login.value == "") {
        swal("Ops..","O Campo nome é Obrigatório!","error");
        return false;
    } else if (document.form.email.value == "") {
        swal("Ops..","O Campo email é Obrigatório!","error");
        return false;
    } else if (document.form.senha.value == "") {
        swal("Ops..","O Campo senha é Obrigatório!","error");
        return false;
    }
    else
        return true;
}