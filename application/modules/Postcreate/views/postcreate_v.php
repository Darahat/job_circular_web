    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <div class="container mt-5">
        <div class="card" style="width: 100%">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <div class="card-body">
                <div class="row">

                    <div class="col-sm-5 ">
                        <div class="container  p-4">
                            <h1>Create a Job Circular Post</h1>
                            <p style="font-size:16px">A job, employment, work or occupation, is a person's role in society.Create a job post create an opportunity for others.</h2>
                                <img src="<?php echo base_url('public/images/createpost.webp'); ?>" width="400" height="300" />
                        </div>
                    </div>
                    <form class="col-sm-6" action="<?php echo site_url('Postcreate/savedata') ?>" method="post">
                        <div class="container m-4 p-4">
                            <div class="form-group">
                                <!-- <label for="formGroupExampleInput">Job Title</label> -->
                                <input class="form-control" id="job_title" name="job_title" type="text" placeholder="Job Title">

                            </div>
                            <div class="form-group">
                                <!-- <label for="formGroupExampleInput">Job Title</label> -->
                                <input class="form-control" id="company_name" name="company_name" type="text" placeholder="Company Name">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="datepicker">Application Deadline</label>
                                    <input id="datepicker" name="deadline" />
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="salary_range">Salary Range</label>
                                        <select class="form-control" id="salary_range" name="salary_range">
                                            <option>10000-25000</option>
                                            <option>25000-50000</option>
                                            <option>More than 50000</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="job_type">Job Type</label>
                                        <select class="form-control" id="job_type" name="job_type">
                                            <option>Government Job</option>
                                            <option>Private Job</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="job_subtype">Job Subtype</label>
                                        <select class="form-control" id="job_subtype" name="job_subtype">
                                            <option>IT Jobs</option>
                                            <option>Bank Jobs</option>
                                            <option>University Job</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Job Description</label>
                                <textarea class="form-control" id="job_description" rows="3" name="job_description"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-primary" type="submit" name="save" value="Save Data">Create A Post</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>