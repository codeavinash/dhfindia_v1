<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Join us and become a member | dinbandhu help foundation | working for the best</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/joinus.css') }}">
    <script src="{{ asset('js/joinus.js') }}" defer></script>
</head>
<body>
   <section class="containersection backgroundImage f jc ac" style="background-image: linear-gradient(rgba(20, 20, 20, 0.904),rgba(20, 20, 20, 0.904)),url('{{ asset('images/backgroundimageThree.jpg') }}')">
        <div class="formContainer">
            <div class="headImage-contaienr f jc ac">
                <img src="{{ asset('images/fullLogo.svg') }}" alt="" id="header-banner-image">
            </div>
            <div class="form-detail-container f jb ac">
                <form action="{{ route('user.joinusForm') }}" method="post" enctype="multipart/form-data" class="joinus-form">
                    @csrf
                    <div class="form-heading-container">
                        <h1>join us</h1>
                        <p>join us and become a member</p>
                    </div>

                    <label for="profile_inputfield" id="profilePic" class="profile-image backgroundImage f ja ac" style="background-image:url('{{ asset(Auth::user()->profilepic) }}') "><i class="im im-cloud-upload"></i>upload a profile image</label>
                    <input type="file" name="profilePic" accept="image/x-png,image/gif,image/jpeg" style="display: none;" id="profile_inputfield" @if (Auth::user()->profilepic)
                        required
                    @endif >

                    <label for="fulname" class="label-field">enter name</label>
                    <input type="text" name="fulname" id="fulname" class="inputField" value="{{ Auth::user()->name }}" required>

                    <label for="mobile" class="label-field">enter mobile number <strong>*same number as per loged in</strong></label>
                    <input type="number" name="mobileNumber" id="mobile" class="inputField" value="{{ Auth::user()->number }}" required>

                    <label for="gender" class="label-field">gender</label>
                    <select name="gender" id="gender" class="inputField">
                        <option value="">male</option>
                        <option value="">female</option>
                        <option value="">other</option>
                    </select>

                    <label for="dob" class="label-field">date of birth</label>
                    <input type="date" name="dateOfBirth" id="dob" class="inputField" required>

                    <label for="email" class="label-field">enter your email <strong>* enter the same email form which you have loged in</strong></label>
                    <input type="email" class="inputField" name="email_id" id="email" value="{{ Auth::user()->email }}" required>

                    <label for="state" class="label-field">state</label>
                    <select name="state" id="state"  class="inputField" required>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->stateName }}</option>
                        @endforeach
                    </select>

                    <label for="District" class="label-field">District</label>
                    <select name="District" id="District" class="inputField" required>
                
                    </select>

                    <label for="bg" class="label-field">blood group</label>
                    <select name="blood_group" id="bg" class="inputField">
                        <option value="dontKnow">dont know</option>
                        <option value="a+">a +</option>
                        <option value="a-">a -</option>
                        <option value="b+">b +</option>
                        <option value="b-">b -</option>
                        <option value="o+">o +</option>
                        <option value="o-">o -</option>
                        
                        <option value="ab+">ab +</option>
                        <option value="ab-">ab -</option>

                    </select>

                    <label for="education" class="label-field">education</label>
                    <input type="text" name="education" id="education" class="inputField" required>

                    <label for="skills" class="label-field">your skills</label>
                    <textarea name="skills" id="skills" rows="10" class="textarea-field" required></textarea>

                    <label for="payment" class="label-field">upload payment proof</label>
                    <input type="file" name="paymentProof" class="inputField fileupload" id="payment" required>

                    <button type="submit" name="submit" class="submit-button">join us</button>
                </form>

                <div class="bank-detail-container">
`                   <img src="{{ asset('images/dhfPaymetImage.jpg') }}" alt="" class="payment-image">

                    <div class="bank-details-container">
                        <div class="detail-heading f jc ac">
                            bank details
                        </div>
                        <div class="details-text-container f jb ac">
                            <strong>a/c holder</strong>
                            <strong>dinbandhu help foundation</strong>
                        </div>

                        <div class="details-text-container f jb ac">
                            <strong>bank name</strong>
                            <strong>bank of baroda</strong>
                        </div>

                        <div class="details-text-container f jb ac">
                            <strong>a/c number</strong>
                            <strong>78550100000115</strong>
                        </div>

                        <div class="details-text-container f jb ac">
                            <strong>ifsc code</strong>
                            <strong>BARB0VJBILA</strong>
                        </div>

                        <div class="details-text-container f jb ac">
                            <strong>address</strong>
                            <strong>bilaspur chhattisgarh</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
</body>
</html>