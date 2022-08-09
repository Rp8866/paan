@include('head');
<title>New Form</title>
<script src="form.js"></script>
{{-- form --}}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<main id="main">
    <br><br>
    <section class="inner-page">
        <div class="container">
            <h1 class="well">New Pan Card Form</h1>
            <div class="col-lg-12 well">
                <div class="row">
                    <form method="POST" enctype="multipart/form-data" id="myform">
                        @csrf
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>First Name</label>
                                    <input type="text" id="first_name" name="first_name"
                                        placeholder="Enter First Name Here.." class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="last_name" placeholder="Enter Last Name Here.."
                                        class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Midddle Name</label>
                                    <input type="text" name="midddle_name" placeholder="Enter Midddle Name Here.."
                                        class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Parents Surname</label>
                                    <input type="text" name="parents_surname" placeholder="Parents Surname"
                                        class="form-control">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Parents Name</label>
                                    <input type="text" name="parents_name" placeholder="Parents Name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-3 form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone_number" placeholder="Enter Phone Number Here.."
                                        class="form-control">
                                </div>

                                <div class="col-sm-4 form-group">
                                    <label>Email Address</label>
                                    <input type="text" name="email" value="rohitpal8866317504@gmail.com"
                                        class="form-control">
                                </div>

                                <div class="col-sm-4 form-group">
                                    <label>DOB</label>
                                    <div class="row">
                                        <div class="col-sm-3 form-group">
                                            <input type="text" name="day" placeholder="dd" class="form-control">
                                        </div>
                                        <div class="col-sm-3 form-group">
                                            <input type="text" name="month" placeholder="mm" class="form-control">
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <input type="text" name="year" placeholder="year"
                                                class="form-control">
                                        </div>
                                    </div>


                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Proof</label>
                                    <input type="text" name="proof" value="Aadhar" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Aadhar Number</label>
                                    <input type="text" name="proof_number" placeholder="Aadhar Number..."
                                        class="form-control">
                                </div>
                            </div>

                            <div id="acknowledgement_section" class="row hide">
                                <div class="row">
                                    <div class="col-sm-3 form-group">
                                        <label>Pan Type</label>
                                        <select class="form-control" aria-label="Default select">
                                            <option selected  >Select Option</option>
                                            <option>New</option>
                                            <option>Update</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Agent ID</label>
                                        <input type="text" placeholder="Agent Id.." class="form-control">
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Ackno. Number</label>
                                        <input type="text" name="proof_img" class="form-control">
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea placeholder="Enter Address Here.." name="address" rows="3" class="form-control"></textarea>
                                </div>


                                <div class="col-sm-3 form-group">
                                    <label>State</label>
                                    <input type="text" value="Gujarat" name="state" class="form-control">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>City</label>
                                    <input type="text" value="Surat" name="city" class="form-control">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Country</label>
                                    <input type="text" value="India" name="country" class="form-control">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Zip</label>
                                    <input type="text" name="pin" placeholder="Enter Zip Code Here.."
                                        class="form-control">
                                </div>

                                <div class="col-sm-4 form-group">
                                    <label>Photo</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Proof Img</label>
                                    <input type="file" name="proof_img" class="form-control">
                                </div>
                                <div class="col-sm-4 form-group">
                                    <label>Receipt Pdf</label>
                                    <input type="file" name="proof_img" class="form-control">
                                </div>

                                
                            </div>
                        </div>
                        <button onclick="newform()" style="background-color:rgba(21, 34, 43, 0.85); color:white;"
                            type="button" class="btn  btn-lg btn-block">Submit</button>

                </div>
                </form>

            </div>
        </div>
        </div>
    </section>


</main><!-- End #main -->



@include('footer');
