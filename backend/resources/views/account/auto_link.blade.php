
@extends('common.master')


@section('bodyContent')
<div id="wrapper">
    @include('common.navigation')

    <!-- Page Wrapper -->
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><i class="fa fa-link fa-fw"></i> Auto Link</h1>
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
                        <a href="{{ url('/search') }}" target="_blank" style="color: white;"><i class="fa fa-search"></i> New</a>
                    </div>
                    <div class="panel-body">                       
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::open(['url'=>'upload','files'=>true,'id'=>'myform']) !!}         
                                <div class="form-group input-group">
                                    <input type="text" id="search_text" class="form-control" value="{{ $borrower_name }}" readonly="true">
                                    <input type="hidden" id="record_id" value="{{ $id }}"/>
                                    <span class="input-group-btn">
                                        <button id="auto_link_btn" class="btn btn-primary" type="button">
                                            <i class="fa fa-refresh"></i> Reload
                                        </button>
                                    </span>
                                </div>
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

<script>
    $(document).ready(function(){
        
        var base_url = $("base").attr("href");
        $("#auto_link_btn").attr('disabled','disabled');
        $("#results").html('<center><img src="<?php echo asset('/assets/icons/loading.gif'); ?>" style="margin: auto;"/></center>');
        
        // auto link Btn
        $("#auto_link_btn").on("click", function(){
            callAutoLink();
        }); 
        
        setTimeout(function(){
            callAutoLink();
        }, 1600);
    });
    
    function callAutoLink() {
        $("#msg_error").hide();
        $("#msg_success").hide();        
        var base_url = $("base").attr("href");
        var co_borrower = $("#co_borrower").val();
        var character_reference   = $("#character_reference").val();
        var record_id = $("#record_id").val();
        var _token = $("input[name='_token']").val();
        var _data = {"_token":_token, 'record_id':record_id };
        $.ajax({                
            type: "POST",
            url: base_url +"/search/autoLink",
            data: _data,
            dataType: "json",
            beforeSend: function(){
                $("#auto_link_btn").attr('disabled','disabled');
                $("#results").html('<center><img src="<?php echo asset('/assets/icons/loading.gif'); ?>" style="margin: auto;"/></center>');
            },
            success: function(result){
                var cls = (parseInt(result.total) > 0) ? 'btn-success':'btn-danger';                
                var _div = "<div><h4>Result: <span class='btn "+ cls +" btn-circle'>"+ result.total +"</span></h4></div><table class='table'>";                
                if(result && result.total) {
                    _div += "<thead><tr><th>No.</th><th>Name</th><th>Relation</th><th></th></tr></thead><tbody>";
                    var application = result.records;                    
                    var lop = 1;
                    for(var x in application) {                    	
                    	_div += "<tr><td style='width: 60px;'>"+ lop +".</td>";
                        _div += "<td>"+ application[x]['borrower_name'] +"</td>";
                        _div += "<td>"+ application[x]['relation_found'] +"</td>";
                        _div += "<td><button class='btn btn-success btn-xs' app_id='"+ application[x]['id'] +"' data-type='"+ result.data_type +"' style='cursor: pointer;'><i class='fa fa-info-circle'></i> View</button> &nbsp;| ";                        
                        _div += "<a href='"+ base_url +'/search/comelink/'+ application[x]['id'] +"' class='btn btn-primary btn-xs' target='_blank' style='cursor: pointer;'><i class='fa fa-folder-open-o'></i> Comelec</a></td>";
                        _div += "</tr>";
                        lop++; 
                    }                    
                    _div += "</tbody></table>";
                } 
                else {
                    var _m = "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><p>No match result</p>";
                    $("#msg_error").html(_m).show();
                }
                $("#results").html(_div);                                        
                $("#auto_link_btn").removeAttr('disabled');
                console.log("result", result);

                // View Moddal
                $("table > tbody > tr > td > button").on("click", function(){
                    var app_id = $(this).attr("app_id");
                    var data_type = $(this).attr("data-type");
                    console.log("APP: "+ app_id);    
                    // Call Ajax
                    callAjax(app_id, data_type);
                });
            },
            error: function(err) {
                console.log("error", err.responseText);
                $("#auto_link_btn").removeAttr('disabled');
            }
        });
    }
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
                showRecModal();
            },
            success: function(result){
                console.log(result);
                if(result) {
                    var _table = "<table><tbody>";
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
                        _table += "<tr><td><b>Branch:</b><td><td>"+ records[x]['branch'] +"</td></tr>";
                        _table += "<tr><td><b>PNNO:</b><td><td>"+ records[x]['pnno'] +"</td></tr>";
                        _table += "<tr><td><b>Type:</b><td><td>"+ records[x]['type'] +"</td></tr>";
                        _table += "<tr><td><b>Name:</b><td><td>"+ records[x]['borrower_name'] +"</td></tr>";
                        _table += "<tr><td><b>Address:</b><td><td>"+ records[x]['borrower_address'] +"</td></tr>";
                        _table += "<tr><td><b>Contact:</b><td><td>"+ records[x]['tel_no'] +"</td></tr>";
                        _table += "<tr><td><b>Birthdate:</b><td><td>"+ records[x]['bday'] +"</td></tr>";
                        _table += "<tr><td><b>Spouse:</b><td><td>"+ records[x]['spouse'] +"</td></tr>";
                        _table += "<tr><td><b>TIN:</b><td><td>"+ records[x]['tin'] +"</td></tr>";
                        _table += "<tr><td><b>SSS:</b><td><td>"+ records[x]['sss'] +"</td></tr>";
                        _table += "<tr><td><b>Email Address:</b><td><td>"+ records[x]['email_address'] +"</td></tr>";
                        _table += "<tr><td><b>Business Name:</b><td><td>"+ records[x]['business_name'] +"</td></tr>";
                        _table += "<tr><td><b>Business Contact:</b><td><td>"+ records[x]['business_contact'] +"</td></tr>";
                        _table += "<tr><td><b>Business Address:</b><td><td>"+ records[x]['business_address'] +"</td></tr>"; 

                        _table += "<tr><td><b>Co-Maker:</b><td><td>"+ records[x]['comaker'] +"</td></tr>";
                        _table += "<tr><td><b>Co-Maker Contact:</b><td><td>"+ records[x]['comaker_contact'] +"</td></tr>";
                        _table += "<tr><td><b>Co-Maker Social Media:</b><td><td>"+ records[x]['comaker_social_media'] +"</td></tr>";
                        _table += "<tr><td><b>Co-Maker Address:</b><td><td>"+ records[x]['comaker_address'] +"</td></tr>";
                                               
                        _table += "<tr><td><b>Co-Borrower:</b><td><td>"+ records[x]['co_borrower'] +"</td></tr>";
                        _table += "<tr><td><b>Co-Borrower Contact:</b><td><td>"+ records[x]['co_borrower_contact'] +"</td></tr>";
                        _table += "<tr><td><b>Co-Borrower Address:</b><td><td>"+ records[x]['co_borrower_address'] +"</td></tr>";
                        _table += "<tr><td><b>Character Reference:</b><td><td>"+ records[x]['character_reference'] +"</td></tr>";
                        _table += "<tr><td><b>Character Contact:</b><td><td>"+ records[x]['character_contact'] +"</td></tr>";
                        _table += "<tr><td><b>Character Address:</b><td><td>"+ records[x]['reference_address'] +"</td></tr>";
						_table += "<tr><td><b>Relation:</b><td><td>"+ records[x]['relation'] +"</td></tr>";                        
                        */
                    }
                    //_table += "</tbody></table>";
                    //$(".modal-body").html(_table);
                }                
            },
            error: function(){
                console.log("ERROR");
            }
        });
    }
    function showRecModal() {
        ///$(".modal-body").html("");
        $("#myModal").modal();
    }
</script>
@endsection