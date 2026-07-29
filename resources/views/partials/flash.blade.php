@if(session('success'))

<div
style="
background:#d1fae5;
padding:15px;
border-radius:6px;
margin-bottom:20px;
color:green;
">

{{ session('success') }}

</div>

@endif