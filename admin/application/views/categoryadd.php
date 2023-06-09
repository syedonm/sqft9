<?= $header;?>
<div class="page has-sidebar-left bg-light height-full">
	    <div class="container-fluid my-3">
        <div class="d-flex row">
            <div class="col-md-7">
                    <!-- Basic Validation -->
                    <div class="card mb-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>BASIC VALIDATION</h6>
                        </div>
                        <div class="card-body">
                            <form id="form_validation" class="form-material" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="surname" required>
                                        <label class="form-label">Surname</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="email" required>
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="male" class="with-gap">
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" id="female" class="with-gap">
                                    <label for="female" class="m-l-20">Female</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                                        <label class="form-label">Description</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                <table class="table">
                                	<tr>
                                		<th>Sl.no</th>
                                		<th>title</th>
                                		<th>Action</th>
                                	</tr>
                                	<tr>
                                		<td>1</td>
                                		<td>title1</td>
                                		<td><button class="btn btn-info">+</button></td>
                                	</tr>
                                	<tr>
                                		<td>2</td>
                                		<td>title2</td>
                                		<td><button class="btn btn-danger">-</button></td>
                                	</tr>
                                </table>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                    <!-- #END# Basic Validation -->
                    <!-- Advanced Validation -->
                    <div class="card my-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>ADVANCED VALIDATION</h6>
                        </div>
                        <div class="card-body">
                            <form id="form_advanced_validation" class="form-material" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="minmaxlength" maxlength="10" minlength="3" required>
                                        <label class="form-label">Min/Max Length</label>
                                    </div>
                                    <div class="help-info">Min. 3, Max. 10 characters</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="minmaxvalue" min="10" max="200" required>
                                        <label class="form-label">Min/Max Value</label>
                                    </div>
                                    <div class="help-info">Min. Value: 10, Max. Value: 200</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="url" class="form-control" name="url" required>
                                        <label class="form-label">Url</label>
                                    </div>
                                    <div class="help-info">Starts with http://, https://, ftp:// etc</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="date" required>
                                        <label class="form-label">Date</label>
                                    </div>
                                    <div class="help-info">YYYY-MM-DD format</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="number" required>
                                        <label class="form-label">Number</label>
                                    </div>
                                    <div class="help-info">Numbers only</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="creditcard" pattern="[0-9]{13,16}" required>
                                        <label class="form-label">Credit Card</label>
                                    </div>
                                    <div class="help-info">Ex: 1234-5678-9012-3456</div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                    <!-- #END# Advanced Validation -->
                    <!-- Validation Stats -->
                    <div class="card my-3 shadow no-b r-0">
                        <div class="card-header white">
                            <h6>
                                VALIDATION STATS
                            </h6>
                        </div>
                        <div class="card-body">
                            <form id="form_validation_stats" class="form-material">
                                <div class="form-group form-float">
                                    <div class="form-line focused warning">
                                        <input type="text" class="form-control" name="warning" value="Warning" required>
                                        <label class="form-label">Form Validation - Warning</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line focused error">
                                        <input type="text" class="form-control" name="error" value="Error" required>
                                        <label class="form-label">Form Validation - Error</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line focused success">
                                        <input type="email" class="form-control" name="success" value="Success" required>
                                        <label class="form-label">Form Validation - Success</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- #END# Validation Stats -->
                </div>
            <div class="col-md-5">
                <h3>Documentation</h3>
                <hr>
                <p>These forms are using jquery validations plugin its flexible and easy to use. Please check official docs to write your own rules</p>
                <a href="https://jqueryvalidation.org/" target="_blank"
                   class="btn btn-xs btn-primary">Plugin Docs</a>
                <h4 class="mt-5">Related Files</h4>
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Type</th>
                        <th>File</th>
                    </tr>
                    <tr>
                        <td><span class="badge badge-danger">HTML</span></td>
                        <td>
                            form-jquery-validations.html
                        </td>
                    </tr>
                    <tr>
                        <td><span class="badge badge-warning">JS</span></td>
                        <td>
                            _validations.js
                        </td>
                    </tr>
                    </tbody>
                </table>
                <h4 class="mt-5">Code Example</h4>
                <hr>
            </div>
        </div>
    </div>
</div>

<?= $footer?>