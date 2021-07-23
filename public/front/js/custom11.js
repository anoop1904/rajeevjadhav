function count_que() {
    check_len = $(":checkbox.question_check:checked").length;

    total = 60 * check_len;

    if (check_len < '1') {
        $('#with_id').attr("disabled", true);
        $('#without_id').attr("disabled", true);
        $('#without_id_dummy').attr("disabled", true);
    }
    if (check_len > '') {
        $('#with_id').attr("disabled", false);
        $('#without_id').attr("disabled", false);
        $('#without_id_dummy').attr("disabled", false);
        add_package_byamount(check_len, total);
    }

    document.getElementById('ttl').innerText = "$" + total;
    document.getElementById('question_price_total').value = total;
    document.getElementById('qaCount').innerText = check_len;
    document.getElementById('qaCount_hidden').value = check_len;
    document.getElementById('count_of_q').innerText = check_len;

    var other_question = document.getElementsByClassName('other_question');
    other_question.style.display = "block";
}


$('body').on('DOMSubtreeModified', '#qaCount', function() {
    console.log('DOMSubtreeModified');
});




// function validate_fun() {
//     if (document.getElementById('fname').value == "") {
//         $('#fname_error').html('Your First Name is Required');
//     }
//     if (document.getElementById('lname').value == "") {
//         $('#lname_error').html('Your Last Name is Required');
//     }
//     if (document.getElementById('partner_fname').value == "") {
//         $('#partner_fname_error').html('Their First Name is Required');
//     }
//     if (document.getElementById('partner_lname').value == "") {
//         $('#partner_lname_error').html('Their Last Name is Required');
//     }
// }

fname = document.getElementById('fname');
lname = document.getElementById('lname');
partner_fname = document.getElementById('partner_fname');
partner_lname = document.getElementById('partner_lname');

// function validate_fun() {
//     alert("Please fill all Required Fields")
// }

function text_valid() {
    if (fname.value != "" && lname.value != "" && partner_fname.value != "" && partner_lname.value != "") {
        $('#without_id_dummy').hide();
        $('#without_id').show();
    } else {
        $('#without_id_dummy').show();
        $('#without_id').hide();
    }
}

function add_package_byamount(check_len, total) {
    // alert(check_len);
    // alert(total);
}