
<div style="width: 100%" class="w-full">


    <div>
        <!-- Profile Photo -->
        <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4">
                <div class="">
                    
                    <div  class="col-xxl-12">
                        <div class="d-flex align-items-center">
                            <img
                                id="previewImage"
                                class="me-3 rounded-circle me-0 me-sm-3"
                                @if(auth()->user()->profile_photo_path)
                                src="{{ '../public/'.Storage::url(auth()->user()->profile_photo_path) }}"
                                @else
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmw0mqGxMV3LaBmRd2LTjBWq8PMMm2ZnoiopUzXmaMlw&s"
                                @endif
                                width="90"
                                height="90"
                                alt=""
                            />
                            <div class="media-body">
                                <h4 class="mb-0">{{ auth()->user()->fname.' '.auth()->user()->lname}}</h4>
                                <p class="mb-0">Max file size is 20mb</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-xs" style="background-color:blueviolet" id="openModalBtn">Change Profile Picture</button>
                </div>
            </div>
            @livewire('profile.update-password-form')
        </div>
        <br>
        

        <br>
        <div class="mt-4">
            <h4 class="card-title">Personal Information</h4>
        </div>
        <div class="col-xxl-12">
            <div class="">
               
                <div class="">
                 
                    <form action="{{ route('update-profile') }}" method="POST" class="row g-4">
                        @csrf
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">First Name</label>
                            <input
                            type="text"
                            class="form-control"
                            placeholder="{{ auth()->user()->fname }}"
                            name="fname"
                            value="{{ auth()->user()->fname }}"
                            {{-- wire:model.defer="state.fname" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Last Name</label>
                            <input
                            name="lname"
                            type="text"
                            class="form-control"
                            placeholder="{{ auth()->user()->lname }}"
                            value="{{ auth()->user()->lname }}"
                            {{-- wire:model.defer="state.lname" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Email</label>
                            <input
                            readonly
                            name="email"
                            type="email"
                            class="form-control"
                            placeholder="{{ auth()->user()->email}}"
                            value="{{ auth()->user()->email}}"
                            {{-- wire:model.defer="state.email" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Phone Number</label>
                            <input
                            name="phone"
                            type="text"
                            class="form-control"
                            placeholder="{{ auth()->user()->phone}}"
                            value="{{ auth()->user()->phone}}"
                            {{-- wire:model.defer="state.phone" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">National ID Type</label>
                            <select
                                name="id_type"
                                class="form-control"
                                wire:model.defer="state.id_type"
                                >  
                                <option {{ auth()->user()->id_type == null ? 'selected' : ''}} value="">-- Choose --</option>
                                <option {{ auth()->user()->id_type == 'NRC' ? 'selected' : ''}} value="NRC">NRC</option>
                                <option {{ auth()->user()->id_type == 'Passport' ? 'selected' : ''}} value="Passport">Passport</option>
                                <option {{ auth()->user()->id_type == 'Driver Liecense' ? 'selected' : ''}} value="Driver Liecense">Driver Liecense</option>
                            </select>
                        </div>
                        
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">National ID Number</label>
                            <input
                            name="nrc_no"
                            type="text"
                            class="form-control"
                            placeholder="{{ auth()->user()->nrc_no}}"
                            value="{{ auth()->user()->nrc_no}}"
                            {{-- wire:model.defer="state.nrc_no" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Sex</label>
                            <select
                                name="gender"
                                class="form-control"
                                name="gender"
                                {{-- wire:model.defer="state.gender" --}}
                                >  
                                <option value="{{ auth()->user()->gender}}">{{ auth()->user()->gender}}</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Date of birth</label>
                            <input
                            name="dob"
                            type="text"
                            class="form-control hasDatepicker"
                            placeholder="{{ auth()->user()->dob}}"
                            value="{{ auth()->user()->dob}}"
                            id="datepicker"
                            autocomplete="off"
                            {{-- wire:model.defer="state.dob" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Present Address</label>
                            <input
                            name="address"
                            type="text"
                            class="form-control"
                            placeholder="{{ auth()->user()->address }}"
                            value="{{ auth()->user()->address }}"
                            {{-- wire:model.defer="state.address" --}}
                            />
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Job Title</label>
                            <input
                            name="occupation"
                            type="text"
                            class="form-control"
                            placeholder="{{ auth()->user()->occupation }}"
                            value="{{ auth()->user()->occupation }}"
                            {{-- wire:model.defer="state.address" --}}
                            />
                        </div>
                        {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">City</label>
                            <input
                            type="text"
                            class="form-control"
                            placeholder="Lusaka"
                            name="city"
                            />
                        </div> --}}
                        {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Postal Code</label>
                            <input
                            type="text"
                            class="form-control"
                            placeholder="25481"
                            name="postal"
                            />
                        </div> --}}
                            {{-- <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <label class="form-label">Country</label>
                                <select class="form-select" name="country">
                                <option value="">Select</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">
                                    Åland Islands
                                </option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">
                                    American Samoa
                                </option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">
                                    Antigua and Barbuda
                                </option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">
                                    Bosnia and Herzegovina
                                </option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">
                                    Bouvet Island
                                </option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">
                                    British Indian Ocean Territory
                                </option>
                                <option value="Brunei Darussalam">
                                    Brunei Darussalam
                                </option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">
                                    Cayman Islands
                                </option>
                                <option value="Central African Republic">
                                    Central African Republic
                                </option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">
                                    Christmas Island
                                </option>
                                <option value="Cocos (Keeling) Islands">
                                    Cocos (Keeling) Islands
                                </option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option
                                    value="Congo, The Democratic Republic of The"
                                >
                                    Congo, The Democratic Republic of The
                                </option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">
                                    Cote D'ivoire
                                </option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">
                                    Czech Republic
                                </option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">
                                    Dominican Republic
                                </option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">
                                    Equatorial Guinea
                                </option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">
                                    Falkland Islands (Malvinas)
                                </option>
                                <option value="Faroe Islands">
                                    Faroe Islands
                                </option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">
                                    French Guiana
                                </option>
                                <option value="French Polynesia">
                                    French Polynesia
                                </option>
                                <option value="French Southern Territories">
                                    French Southern Territories
                                </option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">
                                    Guinea-bissau
                                </option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">
                                    Heard Island and Mcdonald Islands
                                </option>
                                <option value="Holy See (Vatican City State)">
                                    Holy See (Vatican City State)
                                </option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">
                                    Iran, Islamic Republic of
                                </option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option
                                    value="Korea, Democratic People's Republic of"
                                >
                                    Korea, Democratic People's Republic of
                                </option>
                                <option value="Korea, Republic of">
                                    Korea, Republic of
                                </option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">
                                    Lao People's Democratic Republic
                                </option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">
                                    Libyan Arab Jamahiriya
                                </option>
                                <option value="Liechtenstein">
                                    Liechtenstein
                                </option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option
                                    value="Macedonia, The Former Yugoslav Republic of"
                                >
                                    Macedonia, The Former Yugoslav Republic of
                                </option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">
                                    Marshall Islands
                                </option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">
                                    Micronesia, Federated States of
                                </option>
                                <option value="Moldova, Republic of">
                                    Moldova, Republic of
                                </option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">
                                    Netherlands Antilles
                                </option>
                                <option value="New Caledonia">
                                    New Caledonia
                                </option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">
                                    Norfolk Island
                                </option>
                                <option value="Northern Mariana Islands">
                                    Northern Mariana Islands
                                </option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">
                                    Palestinian Territory, Occupied
                                </option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">
                                    Papua New Guinea
                                </option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">
                                    Russian Federation
                                </option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">
                                    Saint Kitts and Nevis
                                </option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">
                                    Saint Pierre and Miquelon
                                </option>
                                <option value="Saint Vincent and The Grenadines">
                                    Saint Vincent and The Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">
                                    Sao Tome and Principe
                                </option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">
                                    Solomon Islands
                                </option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option
                                    value="South Georgia and The South Sandwich Islands"
                                >
                                    South Georgia and The South Sandwich Islands
                                </option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">
                                    Svalbard and Jan Mayen
                                </option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">
                                    Syrian Arab Republic
                                </option>
                                <option value="Taiwan, Province of China">
                                    Taiwan, Province of China
                                </option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">
                                    Tanzania, United Republic of
                                </option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">
                                    Trinidad and Tobago
                                </option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">
                                    Turks and Caicos Islands
                                </option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">
                                    United Arab Emirates
                                </option>
                                <option value="United Kingdom">
                                    United Kingdom
                                </option>
                                <option value="United States">
                                    United States
                                </option>
                                <option
                                    value="United States Minor Outlying Islands"
                                >
                                    United States Minor Outlying Islands
                                </option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">
                                    Virgin Islands, British
                                </option>
                                <option value="Virgin Islands, U.S.">
                                    Virgin Islands, U.S.
                                </option>
                                <option value="Wallis and Futuna">
                                    Wallis and Futuna
                                </option>
                                <option value="Western Sahara">
                                    Western Sahara
                                </option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">
                                    Zimbabwe
                                </option>
                                </select>
                            </div> --}}

                        <div class="col-12">
                            <button type="submit" style="background-color: blueviolet" class="btn btn-xs"
                            >
                            Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Updating...') }}
        </x-jet-action-message>
        <br>
        <x-jet-button wire:loading.attr="disabled" type="submit"  class="btn  btn-square btn-primary" wire:target="photo">
            {{ __('Save Changes') }}
        </x-jet-button>
    </x-slot> --}}
    <div id="myModal" class="modal col-6">
        <!-- Modal Content -->
        <div class="modal-content" style="padding: 4%">
            <!-- Modal Header -->
            <span style="float: right" class="modal-close" onclick="closeModal()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </span>
            <form id="imageForm" action="{{ route('update-prof-pic') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <h5>New Profile Picture</h5>
                    <div class="file-input-container">
                        <label for="imageInput" class="file-input-label">Choose a picture</label>
                        <input type="file" name="photo" id="imageInput" accept="image/*" onchange="previewImage()" class="form-control">
                    </div>
                </div>
                    
                <div class="col-md-6">
                    <div id="preview-container" class="text-center">
                        <img id="preview-image" alt="Preview Image" class="img-fluid">
                    </div>
                </div>
            
                <div class="col-xxl-12">
                    <button type="submit" onclick="submitForm()" class="btn btn-xs  btn-bg waves-effect">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('openModalBtn');
        var profileForm = document.getElementById('profileForm');
        var fileSizeError = document.getElementById('fileSizeError');
    
        btn.onclick = function () {
            modal.style.display = 'block';
        };
    
        function closeModal() {
            modal.style.display = 'none';
        }
    
        window.onclick = function (event) {
            if (event.target === modal) {
                closeModal();
            }
        };

        function previewImage() {
            var previewContainer = document.getElementById('preview-container');
            var previewImage = document.getElementById('preview-image');
            var imageInput = document.getElementById('imageInput');

            // Check if a file is selected
            if (imageInput.files && imageInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
                }

                reader.readAsDataURL(imageInput.files[0]);
            } else {
                // No file selected, hide the preview
                previewImage.src = '';
                previewContainer.style.display = 'none';
            }
        }
    </script>
    
    
</div>
