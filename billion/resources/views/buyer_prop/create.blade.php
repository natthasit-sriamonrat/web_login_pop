@extends('layouts.app')

@section('content')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    
  

<div class="container-fluid faded">
    
<script>
    $(document).ready(function(){
  $(".House").show("slow");
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  $("#House").click(function(){
    $(".House").show("slow");
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Apartment").click(function(){
    $(".Apartment").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Commercial-Building").click(function(){
    $(".Commercial-Building").show("slow");
    $(".House").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Condo").click(function(){
    $(".Condo").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Down").click(function(){
    $(".Down").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Hotel").click(function(){
    $(".Hotel").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Land").click(function(){
    $(".Land").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Pre-Emption").click(function(){
    $(".Pre-Emption").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Resort").click(function(){
    $(".Resort").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Warehouse").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Warehouse").click(function(){
    $(".Warehouse").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Dormitory").hide();
    $(".Office").hide();
  });
  $("#Dormitory").click(function(){
    $(".Dormitory").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Warehouse").hide();
    $(".Office").hide();
  });
  $("#Office").click(function(){
    $(".Office").show("slow");
    $(".House").hide();
    $(".Commercial-Building").hide();
    $(".Apartment").hide();
    $(".Condo").hide();
    $(".Down").hide();
    $(".Hotel").hide();
    $(".Land").hide();
    $(".Pre-Emption").hide();
    $(".Resort").hide();
    $(".Dormitory").hide();
    $(".Warehouse").hide();
  });

    });

</script>

    <div class="row justify-content-center pt-0 m-0 ">
        <div class="col-2 d-none d-md-block p-0"></div>
        <div class="col-12 col-lg-7 text-center my-0 p-0">
            <h2 class="my-0">?????????????????????????????????????????????????????????</h2>
        </div>
    </div>
    <div class="d-none d-md-block">
        <div class="row justify-content-center pt-0 m-0 ">
            <div class="col-2 p-0"></div>
            <div class="col-12 col-lg-7 p-0">
                <div class="row pt-0">
                    <div class="col-2 text-center">
                        <img src="<?php echo asset('img/progress_circle.svg'); ?>" class="rounded-circle" width="60x" height="60px" alt="..." style="object-fit:cover">
                    </div>
                    <div class="col-9 text-right">
                        <p>????????????????????????????????????????????????????????????</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-md-none">
        <div class="row">
            <div class="col-8 justify-content-center">
            </div>
        </div>
    </div>
    <div class="row justify-content-center m-0">
        <div class="d-none d-lg-block">  
            <div class="btn-group-vertical">
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="House" onclick="loadDoc()" checked />
                <label for="House" class="col-10 text-center btn_list_font">House</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Apartment"/>
                <label for="Apartment" class="col-10 text-center btn_list_font">Apartment</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Commercial-Building" />
                <label for="Commercial-Building" class="col-10 text-center btn_list_font">Commercial Building</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Condo"/>
                <label for="Condo" class="col-10 text-center btn_list_font">Condo</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Down"/>
                <label for="Down" class="col-10 text-center btn_list_font">Down</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Hotel"/>
                <label for="Hotel" class="col-10 text-center btn_list_font">Hotel</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Land"/>
                <label for="Land" class="col-10 text-center btn_list_font">Land</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Pre-Emption"/>
                <label for="Pre-Emption" class="col-10 text-center btn_list_font">Pre-Emption</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Resort"/>
                <label for="Resort" class="col-10 text-center btn_list_font">Resort</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Warehouse"/>
                <label for="Warehouse" class="col-10 text-center btn_list_font">Warehouse</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Dormitory"/>
                <label for="Dormitory" class="col-10 text-center btn_list_font">Dormitory</label>
                <input class="stv-radio-button" type="radio" name="radioButtonTest" id="Office"/>
                <label for="Office" class="col-10 text-center btn_list_font">Office</label>
            </div>
        </div>
        <div class="col-12 col-lg-7">
            <div class="d-inline">
                <div class="House">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            There were some problems with your input. <br><br>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="property" value="????????????">
                        <input type="hidden" name="post_allow" value="-">

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-3">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-?????????????????????" autocomplete="off" name="sell_type" value="?????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????">?????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display: none;" id="btn-check-????????????????????????" autocomplete="off" name="sell_type" value="????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????">????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-?????????????????????" autocomplete="off" name="sell_type" value="?????????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????">?????????????????????</label>
                                    </div>  
                                </div>
                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????????????????/????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????????????????/????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ???????????????????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>



<!-- ---------------------------------------------------------- End House ---------------------------------------------------------- -->


            <div class="d-inline">
               
                <div class="Apartment">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="property" value="????????????????????????????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buyer_with_machine" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-3">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????????????????????????????????????????" autocomplete="off" name="sell_type" value="?????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????????????????????????????????????????">?????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display: none;" id="btn-check-????????????????????????????????????????????????????????????????????????" autocomplete="off" name="sell_type" value="????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????????????????????????????????????????">????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="checkbox" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????????????????????????????????????????" autocomplete="off" name="sell_type" value="?????????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????????????????????????????????????????">?????????????????????</label>
                                    </div>  
                                </div>
                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ???????????????????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>



<!-- ---------------------------------------------------------- End Apartment ---------------------------------------------------------- -->

<div class="d-inline">
                <div class="Commercial-Building">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        
                        <input type="hidden" name="property" value="????????????????????????????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????????????????????????? 1 ????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????????????????????????? 1 ????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????????????????????????? 1 ??????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????????????????????????? 1 ??????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ???????????????????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>

<!-- ---------------------------------------------------------- End Commercial-Building ---------------------------------------------------------- -->

<div class="d-inline">
                <div class="Condo">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                            <input type="hidden" name="property" value="???????????????">
                            <input type="hidden" name="city_plan_color" value="-">
                            <input type="hidden" name="area_type" value="-">
                            <input type="hidden" name="business_license" value="-">
                            <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-md-2"></div>  
                                    <div class="col text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-??????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-??????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????? Low Rise">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????? Low Rise</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????? High Rise">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????? High Rise</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ??????????????????????????????????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>

<!-- ---------------------------------------------------------- End Condo ---------------------------------------------------------- -->

<div class="d-inline">
                <div class="Down">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="????????????????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                            
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-???????????????????????????" autocomplete="off" name="sell_type" value="???????????????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-???????????????????????????">???????????????????????????</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????????????????/????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????????????????/????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????/????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????/????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>




<!-- ---------------------------------------------------------- End Down ---------------------------------------------------------- -->





<div class="d-inline">
                <div class="Hotel">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="??????????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <input type="hidden" name="floor_num" value="1">
                        <input type="hidden" name="bedroom_num" value="0">
                        <input type="hidden" name="bathroom_num" value="0">
                        <input type="hidden" name="kitchen_num" value="0">
                        <input type="hidden" name="parking_num" value="0">
                        <input type="hidden" name="livingroom_num" value="0">
                        <input type="hidden" name="furniture" value="-">

                        <!-- <input type="hidden" name="buy_with_machine" value="-"> -->

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                        <select class="form-control" name="property_type">
                                            <option value="?????????????????? 1 ?????????">?????????????????? 1 ?????????</option>
                                            <option value="?????????????????? 2 ?????????">?????????????????? 2 ?????????</option>
                                            <option value="?????????????????? 3 ?????????">?????????????????? 3 ?????????</option>
                                            <option value="?????????????????? 4 ?????????">?????????????????? 4 ?????????</option>
                                            <option value="?????????????????? 5 ?????????">?????????????????? 5 ?????????</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                        <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                        <div class="mt-3">
                                            <input  type="checkbox" name="business_license" value="-">
                                            <p class="d-inline sub_style">???????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>





<!-- ---------------------------------------------------------- End Hotel ---------------------------------------------------------- -->


<div class="d-inline">
                <div class="Land">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="??????????????????">

                        <input type="hidden" name="project_name" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">
                        <input type="hidden" name="type" value=0>
                        <input type="hidden" name="floor_num" value=0>
                        <input type="hidden" name="bedroom_num" value=0>
                        <input type="hidden" name="bathroom_num" value=0>
                        <input type="hidden" name="kitchen_num" value=0>
                        <input type="hidden" name="parking_num" value=0>
                        <input type="hidden" name="livingroom_num" value=0>
                        <input type="hidden" name="furniture" value="-">
                        <input type="hidden" name="usable_area_min" value=0>
                        <input type="hidden" name="usable_area_max" value=0>

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="city_plan_color" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????? (????????????????????????????????????????????????)
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                        <select id="city_plan_color" type="text" class="form-control" name="city_plan_color" placeholder="City Plan Color">
                                            <option value="????????????????????????">????????????????????????</option>
                                            <option value="???????????????">???????????????</option>
                                            <option value="????????????????????????">????????????????????????</option>
                                            <option value="???????????????">???????????????</option>
                                            <option value="??????????????????">??????????????????</option>
                                            <option value="????????????????????????????????????">????????????????????????????????????</option>
                                            <option value="?????????????????????">?????????????????????</option>
                                            <option value="???????????????????????????????????????????????????????????????????????????????????????">???????????????????????????????????????????????????????????????????????????????????????</option>
                                            <option value="????????????????????????????????????">????????????????????????????????????</option>
                                            <option value="???????????????????????????">???????????????????????????</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="area_type" value="??????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="area_type">??????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="area_type" value="???????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="area_type">???????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md-3 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="area_type" value="??????????????????">
                                        <label class="form-check-label m-2 content_style" for="area_type">??????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="area_type" value="????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="area_type">????????????????????????</label>
                                        <span><input class="rounded-pill mr-2 pl-2" type="text" style="width: 5rem;">????????????</span>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                        <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                        <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>




<!-- ---------------------------------------------------------- End Land ---------------------------------------------------------- -->

<div class="d-inline">
                <div class="Pre-Emption">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="???????????????">
                            <input type="hidden" name="type" value="-">
                            <input type="hidden" name="city_plan_color" value="-">
                            <input type="hidden" name="area_type" value="-">
                            <input type="hidden" name="business_license" value="-">
                            <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-???????????????????????????" autocomplete="off" name="sell_type" value="???????????????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-???????????????????????????">???????????????????????????</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????/????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????/????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>




<!-- ---------------------------------------------------------- End Pre-Emption ---------------------------------------------------------- -->


<div class="d-inline">
                <div class="Resort">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="?????????????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">
                        <input type="hidden" name="floor_num" value=0>
                        <input type="hidden" name="bedroom_num" value=0>
                        <input type="hidden" name="bathroom_num" value=0>
                        <input type="hidden" name="kitchen_num" value=0>
                        <input type="hidden" name="parking_num" value=0>
                        <input type="hidden" name="livingroom_num" value=0>
                        <input type="hidden" name="furniture" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-???????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-???????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-???????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-???????????????????????????????????????">????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-???????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-???????????????????????????????????????">??????????????????</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    <div class="mt-3">
                                        <input  type="checkbox" name="business_license" value="-">
                                        <p class="d-inline sub_style">???????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>





<!-- ---------------------------------------------------------- End Resort ---------------------------------------------------------- -->




<div class="d-inline">
                <div class="Warehouse">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="???????????????/??????????????????">
                        <input type="hidden" name="project_name" value="-">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="type" value="-">
                        <input type="hidden" name="floor_num" value=0>
                        <input type="hidden" name="bedroom_num" value=0>
                        <input type="hidden" name="bathroom_num" value=0>
                        <input type="hidden" name="kitchen_num" value=0>
                        <input type="hidden" name="parking_num" value=0>
                        <input type="hidden" name="livingroom_num" value=0>
                        <input type="hidden" name="furniture" value="-">
                        <input type="hidden" name="usable_area_min" value=0>
                        <input type="hidden" name="usable_area_max" value=0>

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-12 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="area_type" value="????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="area_type">?????????????????????????????????????????????</label>
                                        <span><input class="rounded-pill mr-2 pl-2" type="text" style="width: 5rem;">????????????</span>
                                    </div>
                                    <div class="col-12 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="business_license" value="?????????">
                                        <label class="form-check-label m-2 content_style" for="business_license">???????????????????????????????????????????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="checkbox" name="buy_with_machine" value="?????????">
                                        <label class="form-check-label m-2 content_style" for="buy_with_machine">?????????????????????????????????/????????????/????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>




<!-- ---------------------------------------------------------- End Warehouse ---------------------------------------------------------- -->




<div class="d-inline">
                <div class="Dormitory">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="???????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-4 text-lg-right text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-4 text-lg-left text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-?????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-?????????????????????????????????">??????????????????</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????????????????????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="???????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">???????????????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ??????????????????????????????????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>




<!-- ---------------------------------------------------------- End Dormitory ---------------------------------------------------------- -->




<div class="d-inline">
                <div class="Office">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('fail'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">??</button>    
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('buyer_prop.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="property" value="??????????????????">
                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <div class="card card_border mb-4 pr-0 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="sell_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">??????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="row px-0 mx-0">
                                    <div class="col-md-2"></div>
                                    <div class="col text-center px-0">
                                        <input type="radio" class="btn-check" style="display:none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col text-center px-0">
                                        <input type="radio" class="btn-check" style="display: none;" id="btn-check-????????????????????????????????????" autocomplete="off" name="sell_type" value="??????????????????">
                                        <label class="btn btn_custom rounded-pill p-0 m-0 text-center" style="width: 5.5rem; font-size: 1.3rem;" for="btn-check-????????????????????????????????????">??????????????????</label>
                                    </div>
                                    <div class="col-md-2"></div>  
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="city_plan_color" value="-">
                        <!--ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo-->
                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">???????????????????????????????????????</h4>
                                </label>
                            </div>
                            

                            <div class="form-group row margin-padding-form" >
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="property_type" class="col-12 m-0 p-0 my-2 topic_style">
                                        ???????????????????????????????????? / ????????????????????????
                                    </label>
                                    <div class="col-12 col-lg-4 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-lg-4 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????</label>
                                    </div>
                                    <div class="col-12 col-lg-4 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="?????????????????????????????????/????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">?????????????????????????????????/????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-lg-4 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">????????????????????????????????????</label>
                                    </div>
                                    <div class="col-12 col-lg-4 form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="property_type" value="??????????????????????????????????????????????????????????????????">
                                        <label class="form-check-label m-2 content_style" for="property_type">??????????????????????????????????????????????????????????????????</label>
                                    </div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row">
                                    <label for="project_name" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="project_name" type="text" class="form-control rounded-pill" name="project_name" placeholder="Project Name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="type" class="col-12 m-0 p-0 topic_style">
                                        ??????????????????
                                    </label>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 1">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 1</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline">
                                        <input class="form-check-input m-2" type="radio" name="type" value="????????? 2">
                                        <label class="form-check-label m-2 content_style" for="type">????????? 2</label>
                                    </div>
                                    <div class="col-12 col-md form-check form-check-inline"></div>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="floor_num" class="sub_style">
                                            ??????????????????????????????????????????
                                        </label>
                                        <input id="floor_num" type="number" class="form-control rounded-pill" name="floor_num" placeholder="Floor Number" min="1">
                                        <br/>
                                        <label for="kitchen_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="kitchen_num" type="number" class="form-control rounded-pill" name="kitchen_num" placeholder="Kitchen Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bedroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bedroom_num" type="number" class="form-control rounded-pill" name="bedroom_num" placeholder="Bedroom Number" min="0">
                                        <br/>
                                        <label for="parking_num"class="sub_style">
                                            ????????????????????????
                                        </label>
                                        <input id="parking_num" type="number" class="form-control rounded-pill" name="parking_num" placeholder="Parking Number" min="0">
                                    </div>
                                    <div class="col-11 col-md form-check mr-3 p-0">
                                        <label for="bathroom_num"class="sub_style">
                                            ?????????????????????
                                        </label>
                                        <input id="bathroom_num" type="number" class="form-control rounded-pill" name="bathroom_num" placeholder="Bathroom Number" min="0">
                                        <br/>
                                        <label for="livingroom_num"class="sub_style">
                                            ????????????????????????????????????
                                        </label>
                                        <input id="livingroom_num" type="number" class="form-control rounded-pill" name="livingroom_num" placeholder="Livingroom Number" min="0">
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1 pt-0"></div>
                                <div class="col row pt-0">
                                    <label for="furniture" class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????????????????
                                    </label>
                                    <div class="col-11 pr-md-3 mt-2 p-0 ">
                                    <input id="furniture" type="text" class="form-control rounded-pill" name="furniture" placeholder="Furniture">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ???????????????????????????????????????(??????.???.)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="usable_area_min" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_min" type="text" class="form-control rounded-pill" name="usable_area_min" placeholder="Usable Area Min" >
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="usable_area_max" class="sub_style">
                                            ???????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="usable_area_max" type="text" class="form-control rounded-pill" name="usable_area_max" placeholder="Usable Area Max">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label class="col-12 m-0 p-0 topic_style">
                                        ????????????????????????(??????.??????)
                                    </label>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="area_min" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_min" type="text" class="form-control rounded-pill" name="area_min" placeholder="Area Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="area_max" class="sub_style">
                                            ????????????????????????(??????????????????)
                                        </label>
                                        <input id="area_max" type="text" class="form-control rounded-pill" name="area_max" placeholder="Area Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="property_type" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">?????????????????????????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="alley">
                                            ?????????
                                        </label>
                                        <input id="alley" type="text" class="form-control rounded-pill mb-3" name="alley" placeholder="Alley">
                                    </div>
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label class="sub_style" for="road" >
                                            ?????????
                                        </label>
                                        <input id="road" type="text" class="form-control rounded-pill mb-3" name="road" placeholder="Road">
                                    </div>
                                    
                                    <select class="province rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="province" id="province">
                                        <option value="">???????????????????????????????????????????????????????????????????????????</option>
                                        @foreach($list as $row)
                                            <option value="{{$row->name_th}}">{{$row->name_th}}</option>
                                        @endforeach
                                    </select>
                                    <select class="amphures rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-3" style="height:2.5rem;" name="district">
                                        <option value="">?????????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <select class="districts rounded-pill col-11 col-md-5 form-check mr-3 m-0 p-0 form-select-lg mb-0" style="height:2.5rem;" name="sub_district">
                                        <option value="">??????????????????????????????????????????????????????????????????</option>
                                    </select>
                                    <div class="col-lg-1"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-1"></div>
                                <div class="col m-0 p-0">
                                    <label class="topic_style" for="nearby_place">
                                        ????????????????????????????????????????????????
                                    </label>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="supermarket">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Supermarket</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="??????????????????????????????????????????">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">??????????????????????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="BTS"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">BTS</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="MRT"> 
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">MRT</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="Airport Link">
                                            <label class="form-check-label ml-2 p-0 content_style" for="nearby_place">Airport Link</label>
                                        </div>
                                    </div>
                                    <div class="row pt-0 justify-content-center">
                                        <div class="col-12 col-md form-check-inline justify-content-center-xs">
                                            <input name="nearby_place[]" type="checkbox" value="???????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">???????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">????????????????????????</label>
                                        </div>
                                        <div class="col-12 col-md form-check-inline">
                                            <input name="nearby_place[]" type="checkbox" value="?????????????????????????????????"> 
                                            <label class="form-check-label ml-2 content_style" for="nearby_place">?????????????????????????????????</label>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            {{csrf_field()}}
                        </div>

                        <div class="card card_border mb-4 pr-1 pr-md-2">
                            <div class="card-header card_green1 text-center py-2" style="width: 140px;border-top-left-radius: 1.5rem;">
                                <label for="price" class="text-center m-0 p-0">
                                        <h4 class="m-0 py-1" style="font-weight: bold;">????????????</h4>
                                </label>
                            </div>
                            <div class="form-group row margin-padding-form mt-3">
                                <div class="col-lg-1"></div>
                                <div class="col row margin-padding-form">
                                    <label for="price" class="col-12 m-0 p-0 topic_style">
                                        ?????????????????????????????????????????????????????? (?????????)
                                    </label>
                                    
                                    <div class="col-11 col-md-5 form-check mr-3 m-0 p-0">
                                        <label for="price_range_min" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_min" type="text" class="form-control rounded-pill" name="price_range_min" placeholder="Price Range Min">
                                    </div>
                                    <div class="col-11 col-md-5 form-check m-0 p-0">
                                        <label for="price_range_max" class="sub_style">
                                            ??????????????????????????????????????????????????????(??????????????????)
                                        </label>
                                        <input id="price_range_max" type="text" class="form-control rounded-pill" name="price_range_max" placeholder="Price Range Max">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row m-0 p-0">
                            <div class="col-1">
                                <img src="<?php echo asset('img/bulb-icon.svg'); ?>" class="rounded text-center" width="30x" height="30px" alt="..." style="object-fit:cover;">
                            </div>
                            <div class="col">
                                <p class="m-0 p-0" style="font-size: 1.1rem;"><span style="color: red;">*</span>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                                <p style="font-size: 0.9rem;">???????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????????????????</p>
                            </div>
                        </div>

                        <div class="form-group row p-0 m-0 d-flex">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="?????????">
                                ????????????????????????????????????????????????
                            </div>
                            <div class="col text-center p-0 m-0">
                                <button type="submit" class="col-12 btn button_list" name="sub">
                                    Submit
                                </button>
                            </div>
                            <div class="col"></div>
                        </div>
                    </form>
                </div>
            </div>




<!-- ---------------------------------------------------------- End Office ---------------------------------------------------------- -->





<script type="text/javascript">
    $('.province').change(function() {
        if($(this).val()!='') {
            var select = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{route('fetch')}}",
                method:"POST",
                data:{select:select,_token:_token},
                success:function(result) {
                    $('.amphures').html(result);
                }
            })
            console.log(select);
        }
    });

    $('.amphures').change(function() {
        if($(this).val()!='') {
            var select = $(this).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{route('amphures')}}",
                method:"POST",
                data:{select:select,_token:_token},
                success:function(result) {
                    $('.districts').html(result);
                }
            })
            console.log(select);
        }
    });

    </script>

    
<?php  
    if(isset($_POST['sub']))  {  
        $host="localhost";//host name  
        $username="root"; //database username  
        $word="";//database word  
        $db_name="multi_auth10";//database name  
        $tbl_name="buyer_props"; //table name  
        $con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
        $checkbox1=$_POST['nearby_place'];  
        $chk="";  
        foreach($checkbox1 as $chk1)  {  
            $chk .= $chk1.",";  
        }  
        $in_ch=mysqli_query($con,"insert into buyer_props(nearby_place) values ('$chk')");  
        if($in_ch==1)  {  
            echo'<script>alert("Inserted Successfully")</script>';  
        }  
        else  {  
            echo'<script>alert("Failed To Insert")</script>';  
        }  
    }  
?>  



@endsection