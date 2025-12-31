<?php include('header.php');?>

<div class="container my-5">
    <h2 class="text-center">Student Management (AJAX Version)</h2>
    
    <div class="card p-4 shadow-sm">
        <div class="mb-3">
            <label>First Name</label>
            <input type="text" id="fname" class="form-control" placeholder="First Name">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" id="email" class="form-control" placeholder="Email">
        </div>
        <button type="button" id="addBtn" class="btn btn-primary">Add Student</button>
    </div>

    <table class="table mt-5">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
            </tr>
        </thead>
        <tbody id="studentTable">
            </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function(){
    
    function loadData(){
        $.ajax({
            url: "fetch.php",
            success: function(data){
                $('#studentTable').html(data);
            }
        });
    }
    loadData();

    $('#addBtn').click(function(){
        var fname = $('#fname').val();
        var email = $('#email').val();

        $.ajax({
            url: "insert.php",
            method: "POST",
            data: { f: fname, e: email },
            success: function(res){
                alert(res);
                $('#fname').val('');
                $('#email').val('');
                loadData(); 
            }
        });
    });

    $(document).on('click', '.del-btn', function(){
        var id = $(this).data('id');
        if(confirm("Delete karna hai?")){
            $.ajax({
                url: "delete_ajax.php",
                method: "POST",
                data: { id: id },
                success: function(res){
                    loadData();
                }
            });
        }
    });
});
</script>

<?php include('footer.php'); ?>