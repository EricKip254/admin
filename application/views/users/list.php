<div class="container-fluid px-4">
                        
    <ol class="breadcrumb mb-4">
       <h1>Users List</h1>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Role</th>
                        <th>Date Created</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> -->
                <tbody>
                <?php  for( $i=0; $i<count( $records ); $i++ ) : ?>
                <?php $record = &$records[$i]; ?>
                    <tr>
                        <td><?php echo $record->FName;?></td>
                        <td><?php echo $record->LName;?></td>
                        <td><?php echo $record->RName;?></td>
                        <td><?php echo $record->DateCreated;?></td>
                    </tr>
                   <?php endfor;?>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>