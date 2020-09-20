<div class="container mt-5">
  <div class="card p-3" style="width: 100%">
    <h2 style="text-align:center">All Post showing</h2>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Job Title</th>
            <th scope="col">Company Name</th>
            <th scope="col">Salary Range</th>
            <th scope="col">Job Type</th>
            <th scope="col">Job Sub Type</th>
            <th scope="col">Deadline</th>
            <th scope="col">Take Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $row) {
          ?>
            <tr>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->job_title ?></td>
              <td><?php echo $row->company_name ?></td>
              <td><?php echo $row->salary_range ?></td>
              <td><?php echo $row->job_type ?></td>
              <td><?php echo $row->job_sub_type ?></td>
              <td><?php echo $row->deadline ?></td>
              <!-- <td><?php echo $row->job_description ?></td> -->
              <td>
                <div class="row">
                  <div class="col-sm-6"><button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button></div>
                  <div class="col-sm-6"><button class="btn btn-secondary btn-sm"><i class="material-icons">edit</i></button></div>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>