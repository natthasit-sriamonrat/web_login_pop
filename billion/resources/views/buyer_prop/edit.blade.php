@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Property') }}</div>

                <div class="card-body">

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

                    <form action="{{ route('buyer_prop.update', $buyerProp->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="property" value="บ้าน">

                        <input type="hidden" name="city_plan_color" value="-">
                        <input type="hidden" name="area_type" value="-">
                        <input type="hidden" name="business_license" value="-">
                        <input type="hidden" name="buy_with_machine" value="-">

                        <label for="sell_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ข้อมูลโครงการ') }}</label>

                        <div class="form-group row">
                            <label for="sell_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="sell_type" value="ขาย" <?php if ($buyerProp->sell_type=="ขาย") echo "checked";?>> ขาย
                                <input type="checkbox" name="sell_type" value="เช่า" <?php if ($buyerProp->sell_type=="เช่า") echo "checked";?>> เช่า
                                <input type="checkbox" name="sell_type" value="ขายเซ้ง" <?php if ($buyerProp->sell_type=="ขายเซ้ง") echo "checked";?>> ขายเซ้ง

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="property_type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภทอสังหาริมทรัพย์') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="property_type" value="บ้านเดี่ยว" <?php if ($buyerProp->property_type=="บ้านเดี่ยว") echo "checked";?>> บ้านเดี่ยว
                                <input type="checkbox" name="property_type" value="บ้านแฝด" <?php if ($buyerProp->property_type=="บ้านแฝด") echo "checked";?>> บ้านแฝด  
                                <input type="checkbox" name="property_type" value="ทาวน์เฮาส์/ทาวน์โฮม" <?php if ($buyerProp->property_type=="ทาวน์เฮาส์/ทาวน์โฮม") echo "checked";?>> ทาวน์เฮาส์/ทาวน์โฮม

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="project_name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อโครงการ') }}</label>

                            <div class="col-md-6">
                                <input id="project_name" type="text" value="{{ $buyerProp->project_name }}" class="form-control" name="project_name" placeholder="Project Name">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('ประเภท') }}</label>

                            <div class="col-md-6">
                                <input type="checkbox" name="type" value="มือ 1" <?php if ($buyerProp->type=="มือ 1") echo "checked";?>> มือ 1
                                <input type="checkbox" name="type" value="มือ 2" <?php if ($buyerProp->type=="มือ 2") echo "checked";?>> มือ 2
                                

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="floor_num" class="col-md-4 col-form-label text-md-right">{{ __('จำนวนชั้น') }}</label>

                            <div class="col-md-6">
                                <input id="floor_num" type="number" value="{{ $buyerProp->floor_num }}" class="form-control" name="floor_num" placeholder="Floor Number" min="1">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bedroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนอน') }}</label>

                            <div class="col-md-6">
                                <input id="bedroom_num" type="number" value="{{ $buyerProp->bedroom_num }}" class="form-control" name="bedroom_num" placeholder="Bedroom Number" min="0">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bathroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องน้ำ') }}</label>

                            <div class="col-md-6">
                                <input id="bathroom_num" type="number" value="{{ $buyerProp->bathroom_num }}" class="form-control" name="bathroom_num" placeholder="Bathroom Number" min="0">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kitchen_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องครัว') }}</label>

                            <div class="col-md-6">
                                <input id="kitchen_num" type="number" value="{{ $buyerProp->kitchen_num }}" class="form-control" name="kitchen_num" placeholder="Kitchen Number" min="0">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parking_num" class="col-md-4 col-form-label text-md-right">{{ __('ที่จอดรถ') }}</label>

                            <div class="col-md-6">
                                <input id="parking_num" type="number" value="{{ $buyerProp->parking_num }}" class="form-control" name="parking_num" placeholder="Parking Number" min="0">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="livingroom_num" class="col-md-4 col-form-label text-md-right">{{ __('ห้องนั่งเล่น') }}</label>

                            <div class="col-md-6">
                                <input id="livingroom_num" type="number" value="{{ $buyerProp->livingroom_num }}" class="form-control" name="livingroom_num" placeholder="Livingroom Number" min="0">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="furniture" class="col-md-4 col-form-label text-md-right">{{ __('เฟอร์นิเจอร์') }}</label>

                            <div class="col-md-6">
                                <input id="furniture" type="text" value="{{ $buyerProp->furniture }}" class="form-control" name="furniture" placeholder="Furniture">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_min" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_min" type="text" value="{{ $buyerProp->usable_area_min }}" class="form-control" name="usable_area_min" placeholder="Usable Area Min" >

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usable_area_max" class="col-md-4 col-form-label text-md-right">{{ __('พื้นที่ใช้สอย(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="usable_area_max" type="text" value="{{ $buyerProp->usable_area_max }}" class="form-control" name="usable_area_max" placeholder="Usable Area Max">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_min" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_min" type="text" value="{{ $buyerProp->area_min }}" class="form-control" name="area_min" placeholder="Area Min">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="area_max" class="col-md-4 col-form-label text-md-right">{{ __('เนื้อที่(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="area_max" type="text" value="{{ $buyerProp->area_max }}" class="form-control" name="area_max" placeholder="Area Max">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <label for="property_type" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ทำเลที่ตั้ง') }}</label>

                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">{{ __('ซอย') }}</label>

                            <div class="col-md-6">
                                <input id="alley" type="text" value="{{ $buyerProp->alley }}" class="form-control" name="alley" placeholder="Alley">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="road" class="col-md-4 col-form-label text-md-right">{{ __('ถนน') }}</label>

                            <div class="col-md-6">
                                <input id="road" type="text" value="{{ $buyerProp->road }}" class="form-control" name="road" placeholder="Road">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sub_district" class="col-md-4 col-form-label text-md-right">{{ __('ตำบล/แขวง') }}</label>

                            <div class="col-md-6">
                                <input id="sub_district" type="text" value="{{ $buyerProp->sub_district }}" class="form-control" name="sub_district" placeholder="Sub District">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('อำเภอ/เขต') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" value="{{ $buyerProp->district }}" class="form-control" name="district" placeholder="District">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('จังหวัด') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" value="{{ $buyerProp->province }}" class="form-control" name="province" placeholder="Province">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nearby_place" class="col-md-4 col-form-label text-md-right">{{ __('สถานที่ใกล้เคียง') }}</label>

                            <div class="col-md-6">
                                <input name="nearby_place" type="checkbox" value="supermarket" <?php if ($buyerProp->nearby_place=="supermarket") echo "checked";?>> supermarket
                                <input name="nearby_place" type="checkbox" value="ห้างสรรพสินค้า" <?php if ($buyerProp->nearby_place=="ห้างสรรพสินค้า") echo "checked";?>> ห้างสรรพสินค้า
                                <input name="nearby_place" type="checkbox" value="BTS" <?php if ($buyerProp->nearby_place=="BTS") echo "checked";?>> BTS
                                <input name="nearby_place" type="checkbox" value="MRT" <?php if ($buyerProp->nearby_place=="MRT") echo "checked";?>> MRT
                                <input name="nearby_place" type="checkbox" value="Airport Link" <?php if ($buyerProp->nearby_place=="Airport Link") echo "checked";?>> Airport Link
                                <input name="nearby_place" type="checkbox" value="โรงพยาบาล" <?php if ($buyerProp->nearby_place=="โรงพยาบาล") echo "checked";?>> โรงพยาบาล
                                <input name="nearby_place" type="checkbox" value="สนามบิน" <?php if ($buyerProp->nearby_place=="สนามบิน") echo "checked";?>> สนามบิน
                                <input name="nearby_place" type="checkbox" value="ทางด่วน" <?php if ($buyerProp->nearby_place=="ทางด่วน") echo "checked";?>> ทางด่วน
                                <input name="nearby_place" type="checkbox" value="โรงเรียน" <?php if ($buyerProp->nearby_place=="โรงเรียน") echo "checked";?>> โรงเรียน
                                <input name="nearby_place" type="checkbox" value="มหาวิทยาลัย" <?php if ($buyerProp->nearby_place=="มหาวิทยาลัย") echo "checked";?>> มหาวิทยาลัย

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <label for="price" class="col-md-4 col-form-label text-md-right" style="font-size:30px;">{{ __('ราคา') }}</label>

                        <div class="form-group row">
                            <label for="price_range_min" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(ต่ำสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_min" type="text" value="{{ $buyerProp->price_range_min }}" class="form-control" name="price_range_min" placeholder="Price Range Min">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>  

                        <div class="form-group row">
                            <label for="price_range_max" class="col-md-4 col-form-label text-md-right">{{ __('ช่วงราคาที่ต้องการ(สูงสุด)') }}</label>

                            <div class="col-md-6">
                                <input id="price_range_max" type="text" value="{{ $buyerProp->price_range_max }}" class="form-control" name="price_range_max" placeholder="Price Range Max">

                                <!-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror -->
                            </div>
                        </div>

                        <p>*คำแนะนำในการค้นหาอสังหาริมทรัพย์</p>

                        <div class="form-group row mb-0">
                            <div class="col align-items-end p-0 m-0">
                                <input class="m-1" name="agent_welcome" type="checkbox" value="ใช่" <?php if ($buyerProp->agent_welcome=="ใช่") echo "checked";?>>
                                ยินดีรับเอเจ้นท์
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
