function bigger(x) {
    x.style.height = "45%";
    x.style.width = "45%";
}

function normal(x) {
    x.style.height = "38%";
    x.style.width = "38%";
}


function controleMDP(mdp) {
    if (mdp.value.length < 8) {
        alert("password must at least contain 8 caracteres");

        return false;
    } else {
        return true;
    }
}


function adminValid() {
    if (isNaN(document.forms.admin.admin_code.value ) ) {
        alert("Admin code must be a valid number");
        document.forms.admin.admin_code.focus();
        return false;
    }
    if (document.forms.admin.an.value.length < 2) {
        alert("Admin name can't be single letter");
        document.forms.admin.an.focus();
        return false;
    }
    if (document.forms.admin.apw.value.length < 4) {
        alert("Admin password is too short");
        document.forms.admin.apw.focus();
        return false;
    }
    return true;
}

function clientValid() {
    if (document.forms.signup.cin.value.length != 8 || isNaN(document.forms.signup.cin.value)){
        alert("CIN must be 8 digits");
        document.forms.signup.cin.focus();
        return false;
    }
    if (document.forms.signup.qn.value.length < 2) {
        alert("Name can't be a single letter");
        document.forms.signup.qn.focus();
        return false;
    }
    if (document.forms.signup.qpw.value.length < 4) {
        alert("Password is too short");
        document.forms.signup.qpw.focus();
        return false;
    }
    if (document.forms.signup.qt.value.length != 8) {
        alert("Phone number must be 8 digits");
        document.forms.signup.qt.focus();
        return false;
    }
    if (!terms.checked) {
        alert('You must agree to the terms first.');
        return false;
    }
    return true;
}

function fbValid(){
    if (document.forms.fb.fbct.value.length < 4) {
        alert("Feedback is too short");
        document.forms.fb.fbct.focus();
        return false;
    }
    return true;
}

function photogValid(){
    if (document.forms.photographe.cn.value.length < 2) {
        alert("Name can't be a single character");
        document.forms.photographe.cn.focus();
        return false;
    }
    if (document.forms.photographe.cln.value.length < 2) {
        alert("Last name can't be a single character");
        document.forms.photographe.cln.focus();
        return false;
    }
    if (document.forms.photographe.s.value.length < 2) {
        alert("Error salary");
        document.forms.photographe.s.focus();
        return false;
    }
    return true;
}
