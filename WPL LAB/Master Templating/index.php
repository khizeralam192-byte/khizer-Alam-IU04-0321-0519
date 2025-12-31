<?php include('header.php'); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <h4>Add New Student</h4>
            <div class="card p-3 shadow-sm">
                <input type="text" id="fname" class="form-control mb-2" placeholder="First Name">
                <input type="email" id="email" class="form-control mb-2" placeholder="Email Address">
                <button type="button" id="addBtn" class="btn btn-success w-100">Save with AJAX</button>
            </div>
        </div>
        
        <div class="col-md-8">
            <h4>Student List</h4>
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
                    </tr>
                </thead>
                <tbody id="studentTable">
                    </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    
    function loadTable(){
        $.ajax({
            url: "fetch.php",
            type: "GET",
            success: function(data){
                $('#studentTable').html(data);
            }
        });
    }
    loadTable(); 

    
    $('#addBtn').click(function(){
        var f = $('#fname').val();
        var e = $('#email').val();
        if(f=="" || e==""){ alert("Fill all fields"); return; }

        $.ajax({
            url: "insert.php",
            type: "POST",
            data: { fname: f, email: e },
            success: function(response){
                alert(response);
                $('#fname').val('');
                $('#email').val('');
                loadTable();
            }
        });
    });
});
</script>

<?php include('footer.php'); ?>