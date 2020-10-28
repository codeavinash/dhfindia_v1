


<div>a new user wants to contact you</div> 

<strong>user details :-</strong>



<ul>
    <li><strong>name :- </strong> {{ $details->name }}</li>
    <li><strong>number :- </strong> {{ $details->phoneNumber }}</li>
    <li><strong>message :- </strong> {{ $details->message }}</li>
</ul>

<a href="tel:{{ $details->phoneNumber }}">call user now</a>


 