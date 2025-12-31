let form = document.getElementById('dataform');
let table = document.getElementById('datatable');

form.addEventListener('submit',function(event){
    event.preventDefault();
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    let email = document.getElementById("email").value;
    let gender = document.getElementById("gender").value;
    let city = document.getElementById("city").value;
    let newRow = table.insertRow();
    let column1 = newRow.insertCell(0);
    let column2 = newRow.insertCell(1);
    let column3 = newRow.insertCell(2);
    let column4 = newRow.insertCell(3);
    let column5 = newRow.insertCell(4);

    column1.innerHTML = name;
    column2.innerHTML = age;
    column3.innerHTML = email;
    column4.innerHTML = password;
    column5.innerHTML = gender;
    column6.innerHTML = city;
    form.reset();
})
