A
<!-- Set Flash data and session data -->
<div class="container-fluid px-4">
                        
    <ol class="breadcrumb mb-4">
       <h1>Register User</h1>
    </ol>
   
</div>
<div class="alert alert-warning" role="alert">
<?php echo validation_errors();?>
</div>
<?php echo form_open('user/register')?>
<div class="row d-flex justify-content-center">
    <div class="col-md-9">
        
        <div class="form-group">
            <label>First Name<strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="FName" placeholder="First Name" required>
        </div>
        <br>
        <div class="form-group">
            <label>Last Name<strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="LName" placeholder="Last Name" required>
        </div>
        <br>
        <div class="form-group">
            <label>Other Name</label>
            <input type="text" class="form-control" name="OName" placeholder="Other Name" >
        </div>
        <br>
        <div class="form-group">
            <label>System role <strong class="text-danger">*</strong></label>
            <div>
                <select class="form-control select2" name="Role" title="System Role" required>
                    <option>Select</option>
                    <?php foreach( $roles as $role ) : ?>
                        <option value="<?php echo $role->id; ?>"><?php echo ucwords(strtolower($role->RName)) ; ?></option>
                    <?php endforeach; ?>   
                </select>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label>Email<strong class="text-danger">*</strong></label>
            <input type="email" class="form-control" name="Email" placeholder="Email" required>
        </div>
        <br>
        <div class="form-group">
            <label>Phone Number<strong class="text-danger">*</strong></label>
            <input type="text" class="form-control" name="Phone" placeholder="Phone Number" required>
        </div>
        <br>
        <div class="form-group">
            <label>Password<strong class="text-danger">*</strong></label>
            <input type="password" class="form-control" name="Password" placeholder="Password" required>
        </div>
        <br>
        <div class="form-group">
            <label>Confirm Password<strong class="text-danger">*</strong></label>
            <input type="password" class="form-control" name="Password2" placeholder="Confirm Password">
        </div>
        <br>
        <button type="submit" class="btn btn-secondary btn-block">Submit</button>
        </div>
</div>

</form>
<br>