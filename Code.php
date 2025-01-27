<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-image: url("bg.jpg");
            color: wheat;
        }
        .log {
            width: 80px;
            height: 80px;
            border-radius: 40px;
        }
        .form-container {
            border: 2px solid #f0ad4e;
            border-radius: 10px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }
        .section-title {
            color: rgb(233, 123, 123);
            border-bottom: 2px solid rgb(233, 123, 123);
            padding-bottom: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container form-container">
        <div class="row">
            <div class="col-2 text-center">
                <img class="log" src="/logo.jpg">
            </div>
            <div class="col-10 left">
                <b><h1>PES Institute Of Advance Management Studies, Shimogga</h1></b>
            </div>
        </div><br>
        
        <div class="row">
            <div class="col-12">
                <h2 style="color: rgb(231, 231, 86);">Student Registration Form</h2><br>
                <form>
                    <h3 class="section-title">Personal Details</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="father_name">Father's Name:</label>
                                <input type="text" class="form-control" id="father_name" placeholder="Enter your father's name">
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth:</label>
                                <input type="date" class="form-control" id="date_of_birth">
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label>
                                <input type="text" class="form-control" id="phone_number" placeholder="Enter your phone number">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="mother_name">Mother's Name:</label>
                                <input type="text" class="form-control" id="mother_name" placeholder="Enter your mother's name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="parent_phone_number">Parent's Phone Number:</label>
                                <input type="text" class="form-control" id="parent_phone_number" placeholder="Enter parent's phone number">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <select class="form-control" id="gender">
                                    <option value="">Select a gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nationality">Nationality:</label>
                                <input type="text" class="form-control" id="nationality" placeholder="Enter your nationality">
                            </div>
                            <div class="form-group">
                                <label for="religion">Religion:</label>
                                <input type="text" class="form-control" id="religion" placeholder="Enter your religion">
                            </div>
                            <div class="form-group">
                                <label for="caste">Caste:</label>
                                <input type="text" class="form-control" id="caste" placeholder="Enter your caste">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea class="form-control" id="address" placeholder="Enter your address"></textarea>
                            </div>
                        </div>
                    </div><br>

                    <h3 class="section-title">Education Details</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <h5>10th Details</h5>
                            <div class="form-group">
                                <label for="10th_school_name">School Name:</label>
                                <input type="text" class="form-control" id="10th_school_name" placeholder="Enter your 10th school name">
                            </div>
                            <div class="form-group">
                                <label for="10th_year_of_passing">Year of Passing:</label>
                                <input type="text" class="form-control" id="10th_year_of_passing" placeholder="Enter your 10th year of passing">
                            </div>
                            <div class="form-group">
                                <label for="10th_percentage">Obtained Percentage:</label>
                                <input type="number" class="form-control" id="10th_percentage" placeholder="Enter your 10th obtained percentage" min="0" max="100" step="0.01">
                            </div>
                            <div class="form-group">
                                <label for="10th_marks_card_upload">Upload 10th Marks Card:</label>
                                <input type="file" class="form-control-file" id="10th_marks_card_upload">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5>12th Details</h5>
                            <div class="form-group">
                                <label for="12th_college_name">College Name:</label>
                                <input type="text" class="form-control" id="12th_college_name" placeholder="Enter your 12th college name">
                            </div>
                            <div class="form-group">
                                <label>Branch:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="branch" id="science_branch" value="Science">
                                    <label class="form-check-label" for="science_branch">Science</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="branch" id="commerce_branch" value="Commerce">
                                    <label class="form-check-label" for="commerce_branch">Commerce</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="branch" id="arts_branch" value="Arts">
                                    <label class="form-check-label" for="arts_branch">Arts</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="12th_percentage">Obtained Percentage:</label>
                                <input type="number" class="form-control" id="12th_percentage" placeholder="Enter your 12th obtained percentage" min="0" max="100" step="0.01">
                            </div>
                            <div class="form-group">
                                <label for="12th_marks_card_upload">Upload 12th Marks Card:</label>
                                <input type="file" class="form-control-file" id="12th_marks_card_upload">
                            </div>
                        </div>
                    </div><br>
                    
                    <h3 class="section-title">Course Selection</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="course">Select Course:</label>
                                <select class="form-control" id="course">
                                    <option value="">Select a course</option>
                                    <option value="BCA">BCA</option>
                                    <option value="BCom">BCom</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BSc CS">BSc CS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Bus Required:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bus" id="bus_yes" value="Yes" onclick="toggleSection('bus', true)">
                                    <label class="form-check-label" for="bus_yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="bus" id="bus_no" value="No" onclick="toggleSection('bus', false)">
                                    <label class="form-check-label" for="bus_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Hostel Required:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hostel" id="hostel_yes" value="Yes" onclick="toggleSection('hostel', true)">
                                    <label class="form-check-label" for="hostel_yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="hostel" id="hostel_no" value="No" onclick="toggleSection('hostel', false)">
                                    <label class="form-check-label" for="hostel_no">No</label>
                                </div>
                            </div>
                        </div>
                    
                        <div id="busAddressSection" style="display: none;" class="col-md-12">
                            <div class="form-group">
                                <label for="bus_address">Bus Address:</label>
                                <textarea class="form-control" id="bus_address" placeholder="Enter your bus address"></textarea>
                            </div>
                        </div>
                    </div>
                    
                        
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function toggleSection(section, show) {
            if (section === 'bus') {
                var busSection = document.getElementById('busAddressSection');
                busSection.style.display = show ? 'block' : 'none';
                
                // Hide hostel section if bus is selected
                var hostelSection = document.getElementById('hostelSection');
                if (show) {
                    hostelSection.style.display = 'none';
                    document.getElementById('hostel_yes').checked = false;
                    document.getElementById('hostel_no').checked = true;
                } else {
                    hostelSection.style.display = 'block';
                }
            } else if (section === 'hostel') {
                // Add logic for hostel section
                var hostelSection = document.getElementById('hostelSection');
                hostelSection.style.display = show ? 'block' : 'none';
                
                // Hide bus section if hostel is selected
                var busSection = document.getElementById('busAddressSection');
                if (show) {
                    busSection.style.display = 'none';
                    document.getElementById('bus_yes').checked = false;
                    document.getElementById('bus_no').checked = true;
                } else {
                    busSection.style.display = 'block';
                }
            }
        }
    </script>
</body>
</html>