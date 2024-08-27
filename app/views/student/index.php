<h2 class="text-muted">Students</h2>

<?php

    require_once '../app/model/Student_model.php';
    $student_model = new Student_model();

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        if (isset($_POST["action"]) && $_POST["action"] === "store") {
            $name = $_POST["name"];
            $ic_number = $_POST["ic_number"];
            $country = $_POST["country"];
            $student_model->addStudents($name, $ic_number, $country);
            
        }
        
        if (isset($_POST["action"]) && $_POST["action"] === "delete") {
            $id = $_POST["id"];
            
            $result = $student_model->deleteStudents($id);
        }
    }

?>

<div class="row">
    <div class="col-6">
        <form method="post" class="bg-light shadow-sm p-4 mt-5" id="submit_form">
            <input type="hidden" name="action" value="store">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="ic_number" class="form-label">IC Number</label>
                <input type="text" class="form-control" id="ic_number" name="ic_number">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
            <div class="w-100 text-center">
                <small class="text-success d-none" id="success_message"></small>
            </div>
        </form>
    </div>
    <div class="col-6">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">IC Number</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data["students"] as $index => $student) : ?>
                    <tr>
                        <th scope="row"><?php echo $index += 1; ?></th>
                        <td><?php echo $student["name"]; ?></td>
                        <td><?php echo $student["ic_no"]; ?></td>
                        <td><?php echo $student["country"]; ?></td>
                        <td>
                            <div class="d-flex align-items-center justify-content-start gap-1">
                                <button class="btn btn-danger btn-sm delete_user" data-id="<?php echo $student["id"]; ?>">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                                <button class="btn btn-warning btn-sm">
                                    <i class="bi bi-pen-fill"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        // Delete User
        $(".delete_user").on('click', function(event) {
            event.preventDefault();

            const user_id = $(this).data('id');

            $.ajax({
                url: '<?= BASE_URL ?>/student',
                method: 'POST',
                data: {
                    "action": "delete",
                    "id": user_id
                }, success: function(res) {
                    $("#success_message").parent().addClass('mt-3');
                    $("#success_message").removeClass('d-none').text("Delete Successful!");
                }, error: function(err) {
                    console.error(err);
                }
            });
        });
    });
</script>