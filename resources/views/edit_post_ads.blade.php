@extends('frontend.layouts.main')

@section('title', 'Post Ad')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/postad.css') }}">
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <style>
        .preview-image {
            position: relative;
            display: inline-block;
        }

        .preview-image img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
            border: 2px solid #b71c1c;
        }
        .remove-image {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            text-align: center;
            line-height: 20px;
            font-size: 14px;
            cursor: pointer;
        }

        .cke_notifications_area {
            display: none !important;
        }
        /* Title */
        .title {
            font-size: 18px;
            font-weight: bold;
            color: #b71c1c;
            display: block;
            margin-bottom: 10px;
        }

        /* Upload Box */
        .upload-box {
            border: 2px dashed #b71c1c;
            padding: 30px;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            text-align: center;
        }

        .upload-box:hover {
            background: #ffeeee;
        }

        /* Upload Icon */
        .upload-icon {
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            color: #777;
        }

        /* Upload Button */
        .upload-btn {
            background-color: #b71c1c;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        .upload-btn:hover {
            background-color: #8c1313;
        }

        /* Hide File Input */
        .hidden {
            display: none;
        }
        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
    </style>
@endsection
@section('content')
<div class="container">
    <div class="ad-form-container card">
        <div class="form-hero text-center">
            <h2><i class="fas fa-edit"></i> Post your ad</h2>
            <p>It's free and fast</p>
        </div>  
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Form Steps -->
        <form action="{{ route('post.ads.update', $postAd->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Step 1: About You -->
            <div class="form-step" id="step1">
                <div class="section-header">
                    <h5><i class="fas fa-user"></i> ABOUT YOU</h5>
                    <span class="required-note">*REQUIRED FIELDS</span>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user p-2"></i></span>
                        </div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $postAd->name) }}"  required>
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+91</span>
                        </div>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', $postAd->phone) }}" placeholder="Enter your phone number" required>
                        @error('phone')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="whatsapp">WhatsApp Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+91</span>
                        </div>
                        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $postAd->whatsapp) }}" placeholder="Enter your whatsapp number" required >
                        @error('whatsapp')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age', $postAd->age) }}" >
                    @error('age')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <div class="row">
                        <div class="col-md-6">
                            <select class="form-control @error('country') is-invalid @enderror" id="country" name="country" required>
                                <option value="">SELECT COUNTRY</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}" {{ $country->name == $postAd->country->name ? 'selected' : '' }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <select class="form-control @error('state') is-invalid @enderror" id="state" name="state" required>
                                <option value="">SELECT STATE</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}" {{ $state->name == $postAd->state->name ? 'selected' : '' }}>{{ $state->name }}</option>
                                @endforeach
                            </select>
                            @error('state')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <select class="form-control @error('city') is-invalid @enderror" id="city" name="city" required>
                                <option value="">SELECT CITY</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}" {{ $city->name == $postAd->city->name ? 'selected' : '' }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                            @error('city')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('locality') is-invalid @enderror" id="locality" name="locality" value="{{ old('locality', $postAd->locality) }}" placeholder="Enter locality" required >
                            @error('locality')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" required>
                        <option value="">SELECT CATEGORY</option>
                        <option value="Call Girls" {{ $postAd->category == 'Call Girls' ? 'selected' : '' }}>Call Girls</option>
                        <option value="Massages" {{ $postAd->category == 'Massages' ? 'selected' : '' }}>Massages</option>
                        <option value="Male Escorts" {{ $postAd->category == 'Male Escorts' ? 'selected' : '' }}>Male Escorts</option>
                        <option value="Transsexuals" {{ $postAd->category == 'Transsexuals' ? 'selected' : '' }}>Transsexuals</option>
                    </select>
                    @error('category')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="details">Enter Details</label>
                    <input type="text" class="form-control @error('details') is-invalid @enderror" id="details" name="details" value="{{ old('details', $postAd->details) }}" required>
                    @error('details')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" >{{ old('description', $postAd->description) }}</textarea>
                    @error('description')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="title">Add Images</label>
                    <div class="upload-box" id="dropzone">
                        <svg class="upload-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="currentColor" stroke-width="2" d="M12 4v16m8-8H4"></path>
                        </svg>
                        <p>Select Photos (Max 10) (JPG | PNG | WEBP)</p>
                        <input type="file" id="imageUpload" class="hidden" name="images[]" accept="image/jpeg, image/png, image/webp" multiple >
                        <span class="upload-btn" onclick="document.getElementById('imageUpload').click()">Upload images</span>
                    </div>
                    <div id="imagePreviewContainer" class="image-preview-container">
                        @foreach (json_decode($postAd->images) as $image)
                            <div class="preview-image">
                                <img src="{{ asset($image) }}" alt="">
                                <span class="remove-image" onclick="removeImage(this, {{ $image }})">X</span>
                            </div>
                        @endforeach
                    </div>
                    @error('images.*')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="title">Select Any 5 Services</label>
                    <div class="services-checkboxes" style="display: flex; flex-wrap: wrap; gap: 10px;">
                        @php
                            $services = [
                                'Anal Sex', 'BDSM', 'CIM - Cum In Mouth', 'COB - Cum On Body',
                                'Couples', 'Deep throat', 'Domination', 'Face sitting', 'Fingering',
                                'Fisting', 'Foot fetish', 'French kissing', 'GFE', 'Giving hardsports',
                                'Receiving hardsports', 'Lap dancing', 'Massage', 'Nuru massage',
                                'Oral sex - blowjob', 'OWO - Oral without condom', 'Parties',
                                'Reverse oral', 'Giving rimming', 'Rimming receiving', 'Role play',
                                'Sex toys', 'Spanking', 'Strapon', 'Striptease', 'Submissive',
                                'Squirting', 'Tantric massage', 'Teabagging', 'Tie and tease',
                                'Uniforms', 'Giving watersports', 'Receiving watersports', 'Webcam sex'
                            ];
                        @endphp
                        @foreach ($services as $service)
                            <div class="form-check" style="flex: 0 0 45%;">
                                <input class="form-check-input" type="checkbox" name="services[]" value="{{ $service }}" id="service-{{ $loop->index }}" {{ strpos($postAd->services, $service) !== false ? 'checked' : '' }}>
                                <label class="form-check-label" for="service-{{ $loop->index }}">
                                    {{ $service }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('services')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
             
            </div>
            <div class="form-step-buttons align-items-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-share"></i> UPDATE</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#state').click(function(){
                var countryId = $('#country').val();
                $.ajax({
                    url: "{{ route('get.states') }}",
                    method: "GET",
                    data: {countryId: countryId},
                    success: function(data){
                        $.each(data, function(key, value){
                            $('#state').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
            $('#state').change(function(){
                var stateId = $(this).val();
                $('#city').find('option').not(':first').remove();
                $.ajax({
                    url: "{{ route('get.cities') }}",
                    method: "GET",
                    data: {stateId: stateId},
                    success: function(data){
                        $.each(data, function(key, value){
                            $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

            $('#city').change(function(){
                var cityId = $(this).val();
                $.ajax({
                    url: "{{ url('get.localities') }}",
                    method: "GET",
                    data: {cityId: cityId},
                    success: function(data){
                        $('#locality').html(data);
                    }
                });
            });

            $('#addManualLocality').click(function(){
                var localityName = $('#manualLocality').val();
                var cityId = $('#city').val();
                $.ajax({
                    url: "{{ url('add.locality') }}",
                    method: "POST",
                    data: {localityName: localityName, cityId: cityId, _token: '{{ csrf_token() }}'},
                    success: function(data){
                        $('#locality').append('<option value="' + data.id + '">' + data.name + '</option>');
                        $('#manualLocalityModal').modal('hide');
                    }
                });
            });
            var editor = CKEDITOR.replace('description');
            editor.on('change', function() {
                $('#description').val(editor.getData());
            });
            const imageInput = document.getElementById("imageUpload");
            const previewContainer = document.getElementById("imagePreviewContainer");

            if (!imageInput || !previewContainer) {
                console.error("Elements not found!");
                return;
            }

            let selectedImages = []; // Store selected image files

            imageInput.addEventListener("change", function (event) {
                const files = Array.from(event.target.files);
                if (files.length + selectedImages.length > 10) {
                    alert("You can select a maximum of 10 images.");
                    return;
                }

                files.forEach((file) => {
                    if (file.type.startsWith("image/")) {
                        selectedImages.push(file);
                        renderImages();
                    }
                });

                updateFileInput();
            });

            function renderImages() {
                previewContainer.innerHTML = ""; // Clear previews

                selectedImages.forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const imageDiv = document.createElement("div");
                        imageDiv.classList.add("preview-image");
                        imageDiv.innerHTML = `
                            <img src="${e.target.result}" alt="Image Preview">
                            <span class="remove-image" data-index="${index}">&times;</span>
                        `;
                        previewContainer.appendChild(imageDiv);
                    };
                    reader.readAsDataURL(file);
                });
            }

            function updateFileInput() {
                const dataTransfer = new DataTransfer();
                selectedImages.forEach((file) => dataTransfer.items.add(file));
                imageInput.files = dataTransfer.files;
            }

            previewContainer.addEventListener("click", function (event) {
                if (event.target.classList.contains("remove-image")) {
                    const index = parseInt(event.target.dataset.index);
                    selectedImages.splice(index, 1);
                    renderImages();
                    updateFileInput();
                }
            });
        });
    </script>
@endsection



