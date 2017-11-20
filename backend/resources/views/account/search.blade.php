
@extends('common.master')


@section('bodyContent')
<div id="wrapper">
    @include('common.navigation')

    <!-- Page Wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-search fa-fw"></i> Search</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div id="msg_success" class="alert alert-success alert-dismissable" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                                
                </div>
                <div id="msg_error" class="alert alert-danger alert-dismissable" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                  
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Form
                    </div>
                    <div class="panel-body">                       
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::open(['url'=>'search','files'=>true,'id'=>'myform']) !!}         
                                <table style="width: 100%;">
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <select id="search_column" class="form-control">
                                                    <option value="borrower_name">Borrower Name</option>
                                                    <option value="sss">SSS</option>
                                                    <option value="tin">TIN</option>
                                                    <option value="borrower_address">Borrower Address</option>
                                                    <option value="email_address">Email Address</option>
                                                    <option value="spouse">Spouse</option>
                                                    <option value="co_borrower">Co-Borrower</option>
                                                    <option value="character_reference">Character Reference</option>
                                                    <option value="comelec">COMELEC</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group input-group" style="margin-left: 10px;">
                                                <input type="text" id="search_text" class="form-control" placeholder="Please enter search text..." style="width: 100%;">
                                                <span class="input-group-btn">
                                                    <button id="search_btn" class="btn btn-primary" type="button">
                                                        <i class="fa fa-search"></i> Search
                                                    </button>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <div class="row">
                            <div id="results" class="col-lg-12"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->

    </div><!-- /Page Wrapper -->        

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Account Details</h4>
            </div>
            <div class="modal-body">
                
                <div class="panel-group" id="accordion">
                    <!-- Borrower -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Form #1 Borrower</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">                                        
                                <div class="form-group">
                                    <label>Branch</label>
                                    <input type="text" id="branch" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>PNNO</label>
                                    <input type="text" id="pnno" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <input type="text" id="type" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Borrower's Name</label>
                                    <input type="text" id="borrower_name" placeholder="Lastname, Firstname Middlename" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Borrower Address</label>
                                    <textarea id="borrower_address" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Character URL</label>
                                    <input type="text" id="character_url" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" id="tel_no" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Birthday</label>
                                    <input type="text" id="bday" class="datepicker form-control" placeholder="YYYY-MM-DD" readonly="true" style="cursor: pointer;background-color: rgba(255, 255, 255, 0.15);"/>
                                </div>
                                <div class="form-group">
                                    <label>Spouse</label>
                                    <input type="text" id="spouse" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>TIN</label>
                                    <input type="text" id="tin" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>SSS</label>
                                    <input type="text" id="sss" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="text" id="email_address" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Business Name</label>
                                    <input type="text" id="business_name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Business Contact</label>
                                    <input type="text" id="business_contact" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Business Address</label>
                                    <textarea id="business_address" class="form-control"></textarea>
                                </div>                                        
                            </div> <!-- /panel-body -->                                
                        </div> <!-- /collapseOne -->
                    </div>
                    <!-- /Borrower -->
                    
                    <!-- Co-Maker -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Form #2 Co-Maker</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Co-Maker</label>
                                    <input type="text" id="comaker" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Co-Maker Contact</label>
                                    <input type="text" id="comaker_contact" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Co-Maker Social Media</label>
                                    <input type="text" id="comaker_social_media" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Co-Maker Address</label>
                                    <textarea id="comaker_address" class="form-control"></textarea>
                                </div>
                            </div> <!-- /panel-body -->                                
                        </div> <!-- /collapseTwo -->
                    </div>
                    <!-- /Co-Maker -->
                    
                    <!-- Co-Borrower -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Form #3 Co-Borrower</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Co-Borrower</label>
                                    <input type="text" id="co_borrower" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Co-Borrower Contact</label>
                                    <input type="text" id="co_borrower_contact" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label>Co-Borrower Address</label>
                                    <textarea id="co_borrower_address" class="form-control"></textarea>
                                </div>
                            </div> <!-- /panel-body -->                                
                        </div> <!-- /collapseTwo -->
                    </div>
                    <!-- /Co-Borrower -->
                    
                    <!-- Character Reference -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Form #4 Character Reference</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="form-group" id="character_reference">
                                    <label>Character Reference</label>                                    
                                </div>
                                <div class="form-group" id="character_contact">
                                    <label>Character Reference Contact</label>                                    
                                </div>
                                <div class="form-group" id="reference_address">
                                    <label>Character Reference Address</label>
                                </div>                                
                                <div class="form-group" id="relation">
                                    <label>Character Reference Relation</label>                                    
                                </div>
                                <div class="form-group">
                                    <label>Character Reference URL</label>
                                    <input type="text" id="reference_url" class="form-control"/>
                                </div>
                            </div> <!-- /panel-body -->                                
                        </div> <!-- /collapseFour -->
                    </div>
                    <!-- /Character Reference -->
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Account Details</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
    $(document).ready(function(){                

        var base_url = $("base").attr("href");
        
        // Search Btn
        $("#search_btn").on("click", function(){            
            $("#msg_error").hide();
            $("#msg_success").hide();
            var search_column = $("#search_column").val();
            var search_text   = $("#search_text").val();
            var _token = $("input[name='_token']").val();
            var _data = {"search_column":search_column, "search_text":search_text, "_token":_token};
            if(search_text == "") {
                var _m = "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><p>Please enter search text.</p>";
                $("#msg_error").html(_m).show();
                return false;
            }
            
            $.ajax({                
                type: "POST",
                url: "<?php echo url('/search/filter'); ?>",
                data: _data,
                dataType: "json",
                beforeSend: function(){
                    $("#results").html('<center><img src="<?php echo asset('/assets/icons/loading.gif'); ?>" style="margin: auto;"/></center>');
                },
                success: function(result){
                    console.log(result);
                    var cls = (parseInt(result.total) > 0) ? 'btn-success':'btn-danger';
                    var _div = "<div><h4>Result: <span class='btn "+ cls +" btn-circle'>"+ result.total +"</span></h4></div><table id='tbl_results' class='table table-hover'>";

                    if(result.isComelec) {                        
                        if(result && result.total) {
                            _div += "<thead><tr><th>No.</th><th>Name</th><th>Action</th></tr></thead><tbody>";
                            var comelec = result.comelec
                            var lop = 1;
                            for(var x=0; x < comelec.length; x++) {                            
                                _div += "<tr id='row_"+ comelec[x]['id'] +"'><td style='width: 60px;'>"+ lop +".</td>";
                                _div += "<td>"+ comelec[x]['voters_name'] +"</td>";
                                //_div += "<td><a href='"+ base_url +"/search/"+ comelec[x]['id'] +"' class='btn btn-success btn-xs' target='_blank' title='Auto Link'><i class='fa fa-chain'></i> Auto Link</a> &nbsp;&nbsp; ";
                                //_div += "<a href='"+ base_url +"/search/comelink/"+ comelec[x]['id'] +"' class='btn btn-info btn-xs' target='_blank' title='Comelec'><i class='fa fa-gears'></i> Comelec</a> &nbsp;&nbsp; ";
                                _div += "<td><a href='#' app_id='"+ comelec[x]['id'] +"' data-type='comelec' class='btn btn-primary btn-xs view_rec_modal' title='View'><i class='fa fa-info-circle'></i> View</a> &nbsp;&nbsp; ";                                
                                //_div += "<a href='"+ base_url +"/encode/"+ comelec[x]['id'] +"/edit' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i> Edit</a> &nbsp;&nbsp; ";                                                                                                
                                //_div += "<a href='#' app_id='"+ comelec[x]['id'] +"' class='btn btn-danger btn-xs remv_rec' title='Delete'><i class='fa fa-trash-o'></i> Delete</a></td></tr>";
                                lop++;
                            }
                            _div += "</tbody></table>";
                        }
                        else {
                            var _m = "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><p>No match result</p>";
                            $("#msg_error").html(_m).show();
                        }
                    } else {                        
                        if(result && result.total) {
                            _div += "<thead><tr><th>No.</th><th>Name</th><th>Action</th></tr></thead><tbody>";
                            var application = result.application
                            var lop = 1;
                            for(var x=0; x < application.length; x++) {                            
                                _div += "<tr id='row_"+ application[x]['id'] +"'><td style='width: 60px;'>"+ lop +".</td>";
                                _div += "<td>"+ application[x]['borrower_name'] +"</td>";
                                _div += "<td><a href='"+ base_url +"/search/"+ application[x]['id'] +"' class='btn btn-success btn-xs' target='_blank' title='Auto Link'><i class='fa fa-chain'></i> Auto Link</a> &nbsp;&nbsp; ";
                                _div += "<a href='"+ base_url +"/search/comelink/"+ application[x]['id'] +"' class='btn btn-info btn-xs' target='_blank' title='Comelec'><i class='fa fa-gears'></i> Comelec</a> &nbsp;&nbsp; ";
                                _div += "<a href='#' app_id='"+ application[x]['id'] +"' data-type='application' class='btn btn-primary btn-xs view_rec_modal' title='View'><i class='fa fa-info-circle'></i> View</a> &nbsp;&nbsp; ";
                                
                                _div += "<a href='"+ base_url +"/encode/"+ application[x]['id'] +"/edit' class='btn btn-warning btn-xs' title='Edit'><i class='fa fa-edit'></i> Edit</a> &nbsp;&nbsp; ";
                                
                                //_div += "<a href='"+ base_url +"/encode/"+ application[x]['id'] +"/edit' class='btn btn-warning btn-xs'><i class='fa fa-edit'></i> Edit</a></td></tr>";
                                
                                _div += "<a href='#' app_id='"+ application[x]['id'] +"' data-type='application' class='btn btn-danger btn-xs remv_rec' title='Delete'><i class='fa fa-trash-o'></i> Delete</a></td></tr>";
                                lop++;
                            }
                            _div += "</tbody></table>";
                        }
                        else {
                            var _m = "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><p>No match result</p>";
                            $("#msg_error").html(_m).show();
                        }
                    }

                    $("#results").html(_div);
                    console.log("success", result);
                    // View Modal
                    $("table > tbody > tr > td > a.view_rec_modal").on("click", function(e){
                        e.preventDefault();
                        var app_id = $(this).attr("app_id");                        
                        var data_type = $(this).attr("data-type");
                        // Call Ajax                        
                        callAjax(app_id, data_type);
                    });
                    // Remove
                    $("table > tbody > tr > td > a.remv_rec").on("click", function(e){
                        e.preventDefault();
                        var app_id = $(this).attr("app_id");                                              
                        // Call Ajax
                        if(confirm("Are you sure this will be remove permanently, Continue anyway.?")) {
                          callAjaxRemove(app_id);                           
                        }                                                
                    });
                },
                error: function(err) {
                    console.log("error", err.responseText);
                }
            });
        });
    });
    
    function callAjax(app_id, data_type) {
        var base_url = $("base").attr("href");
        var _token = $("input[name='_token']").val();
        var _data = {"app_id":app_id,"_token":_token,"data_type":data_type};
        $.ajax({
            type: "POST",
            url: base_url +"/search/viewAppDetails",
            data: _data,
            dataType: "json",
            beforeSend: function(){                                              
                if(data_type == "comelec") {
                    $("#myModal2").modal();
                } else {
                    $("#myModal").modal();                    
                }
            },
            success: function(result){
                console.log(result);
                if(result) {                    
                    if(result.data_type == 'comelec') {                        
                        _appendComelecDiv(result);
                    } else {                        
                        _appendAppicationDiv(result);
                    }                    
                }                
            },
            error: function(){
                console.log("ERROR");
            }
        });
    }

    function callAjaxRemove(app_id) {
    	var base_url = $("base").attr("href");
        var _token = $("input[name='_token']").val();
        var _data = {"app_id":app_id,"_token":_token};
        $.ajax({
            type: "POST",
            url: base_url +"/search/deleteRecord",
            data: _data,
            dataType: "json",
            beforeSend: function(){                
                
            },
            success: function(result){
                console.log(result);
                $("input[name='_token']").val(result['_token']); // Update token          
                if(result['status']) {
                	$("#row_"+ app_id).remove();
                } else {
                    alert('Unable to delete please try again later.');
                }
            },
            error: function(){
            	alert('Ajax Error');
            }
        });
    }

    function _appendAppicationDiv(result) {
        var _table = "<table class='table'><tbody>";
        var records = result.records;
        for(var x=0; x < records.length; x++) {

            $("#branch").val( records[x]['branch'] );
            $("#pnno").val( records[x]['pnno'] );
            $("#type").val( records[x]['type'] );
            $("#borrower_name").val( records[x]['borrower_name'] );
            $("#borrower_address").val( records[x]['borrower_address'] );
            $("#character_url").val( records[x]['character_url'] );
            $("#tel_no").val( records[x]['tel_no'] );
            $("#bday").val( records[x]['bday'] );
            $("#spouse").val( records[x]['spouse'] );
            $("#tin").val( records[x]['tin'] );            
            $("#sss").val( records[x]['sss'] );
            $("#email_address").val( records[x]['email_address'] );
            $("#business_name").val( records[x]['business_name'] );
            $("#business_contact").val( records[x]['business_contact'] );
            $("#business_address").val( records[x]['business_address'] );
            $("#comaker").val( records[x]['comaker'] );
            $("#comaker_contact").val( records[x]['comaker_contact'] );
            $("#comaker_social_media").val( records[x]['comaker_social_media'] );
            $("#comaker_address").val( records[x]['comaker_address'] );
            $("#co_borrower").val( records[x]['co_borrower'] );
            $("#co_borrower_contact").val( records[x]['co_borrower_contact'] );
            $("#co_borrower_address").val( records[x]['co_borrower_address'] );
            $("#reference_url").val( records[x]['reference_url'] );

            $("#character_reference p").remove();
            var refChar = records[x]['character_reference'];
            for(var refChKey in refChar) {                
                $("#character_reference").append("<p>"+ (parseInt(refChKey) + 1) +". "+ refChar[refChKey] +"</p>");
            }

            $("#character_contact p").remove();
            var refContact = records[x]['character_contact'];
            for(var refCntKey in refContact) {                
                $("#character_contact").append("<p>"+ (parseInt(refCntKey) + 1) +". "+ refContact[refCntKey] +"</p>");
            }

            $("#reference_address p").remove();
            var refAddress = records[x]['reference_address'];
            for(var refAdKey in refAddress) {                
                $("#reference_address").append("<p>"+ (parseInt(refAdKey) + 1) +". "+ refAddress[refAdKey] +"</p>");
            }

            $("#relation p").remove();
            var relation = records[x]['relation'];
            for(var relKey in relation) {                
                $("#relation").append("<p>"+ (parseInt(relKey) + 1) +". "+ relation[relKey] +"</p>");
            }

            /*
            _table += "<tr><td><b>Branch:</b><td><td><input type='text' class='form-control' value='"+ records[x]['branch'] +"'/></td></tr>";
            _table += "<tr><td><b>PNNO:</b><td><td><input type='text' class='form-control' value='"+ records[x]['pnno'] +"'/></td></tr>";
            _table += "<tr><td><b>Type:</b><td><td><input type='text' class='form-control' value='"+ records[x]['type'] +"'/></td></tr>";
            _table += "<tr><td><b>Name:</b><td><td><input type='text' class='form-control' value='"+ records[x]['borrower_name'] +"'/></td></tr>";
            _table += "<tr><td><b>Address:</b><td><td><textarea class='form-control'>"+ records[x]['borrower_address'] +"</textarea></td></tr>";
            _table += "<tr><td><b>Contact:</b><td><td><input type='text' class='form-control' value='"+ records[x]['tel_no'] +"'/></td></tr>";
            _table += "<tr><td><b>Birthdate:</b><td><td><input type='text' class='form-control' value='"+ records[x]['bday'] +"'></td></tr>";
            _table += "<tr><td><b>Spouse:</b><td><td><input type='text' class='form-control' value='"+ records[x]['spouse'] +"'/></td></tr>";
            _table += "<tr><td><b>TIN:</b><td><td><input type='text' class='form-control' value='"+ records[x]['tin'] +"'/></td></tr>";
            _table += "<tr><td><b>SSS:</b><td><td><input type='text' class='form-control' value='"+ records[x]['sss'] +"'/></td></tr>";
            _table += "<tr><td><b>Email Address:</b><td><td><input type='text' class='form-control' value='"+ records[x]['email_address'] +"'/></td></tr>";
            _table += "<tr><td><b>Business Name:</b><td><td><input type='text' class='form-control' value='"+ records[x]['business_name'] +"'/></td></tr>";
            _table += "<tr><td><b>Business Contact:</b><td><td><input type='text' class='form-control' value='"+ records[x]['business_contact'] +"'/></td></tr>";
            _table += "<tr><td><b>Business Address:</b><td><td><input type='text' class='form-control' value='"+ records[x]['business_address'] +"'/></td></tr>";

            _table += "<tr><td><b>Co-Maker:</b><td><td><input type='text' class='form-control' value='"+ records[x]['comaker'] +"'/></td></tr>";
            _table += "<tr><td><b>Co-Maker Contact:</b><td><td><input type='text' class='form-control' value='"+ records[x]['comaker_contact'] +"'/></td></tr>";
            _table += "<tr><td><b>Co-Maker Social Media:</b><td><td><input type='text' class='form-control' value='"+ records[x]['comaker_social_media'] +"'/></td></tr>";
            _table += "<tr><td><b>Co-Maker Address:</b><td><td><textarea class='form-control'>"+ records[x]['comaker_address'] +"</textarea></td></tr>";
                                
            _table += "<tr><td><b>Co-Borrower:</b><td><td><input type='text' class='form-control' value='"+ records[x]['co_borrower'] +"'/></td></tr>";
            _table += "<tr><td><b>Co-Borrower Contact:</b><td><td><input type='text' class='form-control' value='"+ records[x]['co_borrower_contact'] +"'/></td></tr>";
            _table += "<tr><td><b>Co-Borrower Address:</b><td><td><textarea class='form-control'>"+ records[x]['co_borrower_address'] +"</textarea></td></tr>";
            _table += "<tr><td><b>Character Reference:</b><td><td><textarea class='form-control'>"+ records[x]['character_reference'] +"</textarea></td></tr>";
            _table += "<tr><td><b>Character Contact:</b><td><td><textarea class='form-control'>"+ records[x]['character_contact'] +"</textarea></td></tr>";
            _table += "<tr><td><b>Character Address:</b><td><td><textarea class='form-control'>"+ records[x]['reference_address'] +"</textarea></td></tr>";
            _table += "<tr><td><b>Relation:</b><td><td><textarea class='form-control'>"+ records[x]['relation'] +"</textarea></td></tr>";
            */
        }
        //_table += "</tbody></table>";
        //$(".modal-body").html(_table);        
    }

    function _appendComelecDiv(result) {
        var _table = "<table class='table'><tbody>";
        var records = result.records;
        for(var x=0; x < records.length; x++) {                        
            _table += "<tr><td><b>Name:</b><td><td>"+ records[x]['voters_name'] +"</td></tr>";            
            _table += "<tr><td><b>Address:</b><td><td>"+ records[x]['voters_address'] +"</td></tr>";
            _table += "<tr><td><b>Birthdate:</b><td><td>"+ records[x]['bday'] +"</td></tr>";
            _table += "<tr><td><b>Barangay:</b><td><td>"+ records[x]['baranggay'] +"</td></tr>";            
            _table += "<tr><td><b>City:</b><td><td>"+ records[x]['city'] +"</td></tr>";            
        }
        _table += "</tbody></table>";
        $("#myModal2").find(".modal-body").html(_table);
    }

</script>
@endsection