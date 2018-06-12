var e = 0;
var i = 0;
var m = 0;
if (window.XMLHttpRequest) {
    // code for modern browsers
    xmlhttp = new XMLHttpRequest();
} else {
    // code for old IE browsers
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
function inspection()
{
    var table = $('#example2').DataTable();
    var input1 = document.getElementById('name').value;
    var input2 = document.getElementById('c_status').value;
    var input3 = document.getElementById('f_status').value;
    var input4 = document.getElementById('remark').value;
    var input5 = document.getElementById('ins_id').value;
    document.getElementById('name').value = '';
    document.getElementById('c_status').value = '';
    document.getElementById('f_status').value = '';
    document.getElementById('remark').value = '';
    xmlhttp.open("POST", "http://localhost/GMS/ajax/new_inspection/", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("name="+input1+"&status="+input2+"&f_status="+input3+"&remark="+input4+"&card_id="+<?= $info['id'] ?>+"&ins_id="+input5);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var arr = this.responseText.split('_#_');
            console.log(arr);
            table.row.add([
                i,
                arr[0],
                arr[1],
                arr[2],
                arr[3]
            ]).draw(false);
        }
    };
    i++;
}
function estimation()
{
    var table = $('#example1').DataTable();
    var input1 = document.getElementById('name_e').value;
    var input2 = document.getElementById('c_status_e').value;
    var input3 = document.getElementById('f_status_e').value;
    var input4 = document.getElementById('remark_e').value;
    var input5 = document.getElementById('est_id').value;
    document.getElementById('name_e').value = '';
    document.getElementById('c_status_e').value = '';
    document.getElementById('f_status_e').value = '';
    document.getElementById('remark_e').value = '';
    xmlhttp.open("POST", "http://localhost/GMS/ajax/new_estimation/", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("name="+input1+"&status="+input2+"&f_status="+input3+"&remark="+input4+"&card_id="+<?= $info['id'] ?>+"&est_id="+input5);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var arr = this.responseText.split('_#_');
            console.log(arr);
            table.row.add([
                e,
                arr[0],
                arr[1],
                arr[2],
                arr[3]
            ]).draw(false);
        }
    };
    e++;
}

function material()
{
    var table = $('#example3').DataTable();
    var input1 = document.getElementById('name_m').value;
    var input2 = document.getElementById('brand').value;
    var input3 = document.getElementById('model').value;
    var input4 = document.getElementById('quantity').value;
    var input5 = document.getElementById('condition').value;
    document.getElementById('name_m').value = '';
    document.getElementById('brand').value = '';
    document.getElementById('model').value = '';
    document.getElementById('quantity').value = '';
    document.getElementById('condition').value = '';
    xmlhttp.open("POST", "http://localhost/GMS/ajax/new_material/", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("Name="+input1+"&Brand="+input2+"&Model="+input3+"&Quantity="+input4+"&Material_Status="+input5+"&card_id="+<?= $info['id'] ?>);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var arr = this.responseText.split('_#_');
            console.log(arr);
            table.row.add([
                m,
                arr[0],
                arr[1],
                arr[2],
                arr[3],
                arr[4],
                'Pending'
            ]).draw(false);
        }
    };
    m++;
}
function estimation_f()
{
    var input1 = document.getElementById('Employee_e').value;
    var input2 = document.getElementById('Payment_e').value;
    var input3 = document.getElementById('Remark_e_e').value;
    xmlhttp.open("POST", "http://localhost/GMS/ajax/start_est/", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("employee="+input1+"&payment="+input2+"&remark="+input3+"&card_id="+<?= $info['id'] ?>);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var arr = this.responseText;
            /*document.getElementById('est_btn').setAttribute('disabled',false);*/
            $('#est_btn').prop('disabled', false);
            console.log(arr);
        }
    }
}
function inspection_f()
{
    var input1 = document.getElementById('Employee_i').value;
    var input2 = document.getElementById('Payment_i').value;
    var input3 = document.getElementById('Remark_i').value;
    xmlhttp.open("POST", "http://localhost/GMS/ajax/start_ins/", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("employee="+input1+"&payment="+input2+"&remark="+input3+"&card_id="+<?= $info['id'] ?>);
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var arr = this.responseText.split('_#_');
            /*document.getElementById('ins_btn').setAttribute('disabled',false);*/
            $('#ins_btn').prop('disabled', false);
            console.log(arr);
        }
    }
}